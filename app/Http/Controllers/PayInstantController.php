<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Models\PhoneNumber;
use DB;
use App\Models\Transaction;

class PayInstantController extends Controller
{
    public function process(Request $request)
    {
      $data = [];
      $data['fields'] = $request->all();
      $data['fields']['orderId'] = time().rand(1000,9999);

      $dailySum = \DB::table('transactions')->where('status',2)->where('created_at','>=',date('Y-m-d').' 00:00:00')->sum('amount');

      if ($dailySum<100000) {
        $data['action_url'] = '/add/transaction/pi/checkout';
      }
      elseif (1) {
        $data['action_url'] = '/add/transaction';
      }

      return view('payments.process',$data);
    }

    public function index(Request $request)
    {
      $data = [];

      $phoneCheck = $request['email'];

      $phone=PhoneNumber::where('users','like','%'.$phoneCheck.'%')->first();

      if (!$phone) {
        $phone=PhoneNumber::whereNull('users')->first();
        if (!$phone) {
          $phone=PhoneNumber::where('users','not like','%'.$phoneCheck.'%')->first();
        }
        $phone->users=$phone->users.','.$phoneCheck;
        $phone->save();
      }

      $request['phone'] = $phone->phone_number;
      // $request['amount'] = (string)rand(2,5);

      $params = $request->all();

      $params['city'] = 'Bangalore';
      $params['zip_code'] = '560001';
      $params['country'] = 'India';

      $validator = self::validator($params);
      if ($validator->fails()) {
        return Response()->json([
          'status'=>201,
          'message'=>$validator->errors()->first()
        ]);
      }

      if (!storeTxn($params,'PayInstant')) {
        return redirect('/add/transaction/fail');
      }

      $order_id = $request['orderId'];
      $amount = $request['amount'];
      $description = $request['gameName'];
      $cust_name = $request['name'];
      $cust_email = $request['email'];
      $cust_phone = $request['phone'];
      $cust_city = 'NA';
      $cust_zip = 'NA';
      $cust_country = 'India';

      // Do not change anything below this
      $data = $params = [];
      $salt = config('app.pay_instant_salt');
      $params['api_key'] = config('app.pay_instant_app_key');
      $params['return_url'] = route('PayInstant.callback');
      $params['order_id'] = $order_id;
      $params['amount'] = $amount;
      $params['currency'] = 'INR';
      $params['description'] = $description;
      $params['name'] = $cust_name;
      $params['email'] = $cust_email;
      $params['phone'] = $cust_phone;
      $params['city'] = $cust_city;
      $params['zip_code'] = $cust_zip;
      $params['country'] = $cust_country;
      // Hash Generation
      $hash = self::hashCalculate($salt, $params);
      $params['hash'] = $hash;
      $data['fields'] = $params;
      $data['action_url'] = 'https://api.payinstance.com/v2/paymentrequest';
      return view('payments.PayInstant.checkout',$data);
    }

    static public function validator(array $data)
    {
      return Validator::make($data, [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'email', 'max:255'],
      'phone' => ['required', 'string', 'min:10', 'max:10'],
      'orderId' => ['required', 'string', 'max:255'],
      'gameName' => ['required', 'string', 'max:255'],
      'amount' => ['required', 'string', 'max:255'],
      // 'merchID' => ['required', 'string', 'max:255'],
      'uniqueId' => ['required', 'string', 'max:255'],
      // 'vendorId' => ['required', 'int'],
      ]);
    }

    static public function hashCalculate($salt,$input)
    {
      $hash_columns = ['address_line_1', 'address_line_2', 'amount', 'api_key', 'city', 'country', 'currency', 'description', 'email', 'mode', 'name', 'order_id', 'phone', 'return_url', 'state', 'udf1', 'udf2', 'udf3', 'udf4', 'udf5', 'zip_code',];
      sort($hash_columns);
      $hash_data = $salt;
      foreach ($hash_columns as $column) {
        if (isset($input[$column])) {
          if (strlen($input[$column]) > 0) {
            $hash_data .= '|' . trim($input[$column]);
          }
        }
      }
      $hash = strtoupper(hash("sha512", $hash_data));
      return $hash;
    }

    public function callback(Request $request)
    {
      \Log::info('callback Request');
      \Log::info($request);      
      $transaction = updateTxn($request->all(),$request['order_id']);

      $result = self::transactionStatusApi($request['order_id']);

      $txn = Transaction::where('gatewayId','PayInstant')
                ->where('orderId',$request['order_id'])
                ->first();

      if ($txn->status == 2) {
        return redirect('/add/transaction/success');
      }
      elseif ($txn->status == 3) {
        return redirect('/add/transaction/fail');
      }
      else {
        return redirect('/add/transaction/waiting');
      }

      return response([
        'status'=>200,
        'message'=>'Acknowledged',
      ]);
    }

    public function webhookResponse(Request $request)
    {
      \Log::info('webhook received at '.time()." date ".date('h:i:s'));
      \Log::info($request->all());
      \Log::info('webhook received');

      if (Transaction::where('gatewayId','PayInstant')
                     ->where('orderId',$request['order_id'])
                     ->where('status',1)
                     ->first()) {

        $transaction = updateTxn($request->all(),$request['order_id']);

        self::transactionStatusApi($request['order_id']);

      }

      return response([
        'status'=>200,
        'message'=>'Acknowledged',
        'request' => $transaction
      ]);
    }

    static public function transactionStatusApi($order_id = null)
    {
      if ($order_id) {
        $all_txn = Transaction::where('gatewayId','PayInstant')
                  ->where('status',1)
                  ->where('orderId',$order_id)
                  ->get();

        $denyFail = 1;
      }
      else {
        $all_txn = Transaction::where('gatewayId','PayInstant')
                  ->where('status',1)
                  ->where('created_at','<=',Carbon::now()->subMinutes(5)->format('Y-m-d H:i:s'))
                  ->get();

        $denyFail = 0;
      }

      foreach ($all_txn as $key => $txn) {
        $order_id = $txn->orderId;

        // $endpoint = config('app.payproxy_base_url').'/fetchTransactionStatus/spins/'.$order_id;
        //
        // $client = new \GuzzleHttp\Client();
        // $response = $client->request('POST', $endpoint);
        //
        // $response=json_decode($response->getBody()->getContents(),true);

        $response = self::fetchTransactionStatus($order_id);
      \Log::info('PG Curl response');
      \Log::info($response);
        $transaction = Transaction::where('orderId',$order_id)
                                  ->first();

        $transaction->responseJson=json_encode($response);

        $results = $response['data'];

        $statusCodes = [
          '1006','1047','1048','1088','1030',1006,1047,1048,1088,1030
        ];

        $result = $results[0];

        if (count($results)) {
          foreach ($results as $result) {
           // $result['responseCode']==0||$result['responseCode']==1048||
            if (($result['response_code']==0||$result['response_code']==1048)
              &&(strtolower($result['response_message'])=='transaction successful' || strtolower($result['response_message'])=='success'||strtolower($result['response_message'])=='captured')) {
                if ($result['customer_email']==$transaction['email']||
                    $result['amount']==$transaction['amount']
                  ) {
                  $form_data = [
                    'data'=>json_encode($transaction)
                  ];

                  $signature = base64_encode(hash_hmac('sha256',str_replace(':null',':""',json_encode($form_data)), config('app.payment_hask_key'), true));

                  $headers = [
                    'hash'=>[$signature]
                  ];

                  try {

                    $client = new \GuzzleHttp\Client();
                    try {
                      $endpoint = config('app.pg_curl_url').'/pg/captureResponse';
                      $client = new \GuzzleHttp\Client();
                      $response = $client->request('POST', $endpoint, [
                        'headers'=>$headers,
                        'form_params' => $form_data
                      ]);
                      $response=json_decode($response->getBody()->getContents(),true);
                      \Log::info($response);

                    } catch (\GuzzleHttp\Exception\BadResponseException $e) {
                      $response['error']['message'] = $e->getResponse()->getBody()->getContents();
                    } catch (\Exception $e) {
                      $response['error']['message'] = $e->getMessage();
                    }

                    $transaction->responseJson=json_encode($result);
                    $transaction->sent21=1;
                    $transaction->status=2;
                    $transaction->message = $response['message'];

                  } catch (\Exception $e) {
                    // dd($e->getMessage());
                    \Log::info($e->getMessage());
                  }
                }
                else {
                  $transaction->responseJson=json_encode($result);
                  $transaction->message = 'Data missmatch';
                  $transaction->status=4;
                }

                $transaction->save();
            }
            else {
              $d1 = strtotime(date('Y-m-d H:i:s'));
              $d2 = strtotime($transaction->created_at);

              $transaction->message = isset($result['response_message'])?$result['response_message']:'FAILED';
              $transaction->message = $transaction->message." - ".(isset($result['error_desc'])?$result['error_desc']:'');
              // || !in_array($result['responseCode'],$statusCodes)
              if ($d1-$d2 > 86400 || !in_array($result['response_code'],$statusCodes)) {
                $transaction->status=3;
                $transaction->responseJson=json_encode($result);
                $transaction->save();
                $sendStatusFail = self::sendStatusFailed($order_id);
              }
            }
          }
        }
        elseif ($denyFail==0) {
          $d1 = strtotime(date('Y-m-d H:i:s'));
          $d2 = strtotime($transaction->created_at);

          $transaction->message = 'Txn Not Found';

          if ($d1-$d2 > 86400) {
            $transaction->status=3;
            $transaction->responseJson=json_encode($result);
            $transaction->save();
            $sendStatusFail = self::sendStatusFailed($order_id);

          }

          if ((isset($response['actual_response']['error'])&&$response['actual_response']['error']['code']==1028)) {
            $transaction->status=3;
            $transaction->responseJson=json_encode($response);
            $transaction->message = isset($response['actual_response']['error'])?$response['actual_response']['error']['message']:'FAILED';
            $transaction->save();
            $sendStatusFail = self::sendStatusFailed($order_id);
          }
        }
      }
      return true;
    }

    public static function sendStatusFailed($order_id)
    {
      $request_arr = [];
      $request_arr['orderId'] = $order_id;
      $request_arr['status'] = 'Failed';

    $form_data = [
      'data'=>json_encode($request_arr)
    ];

    $signature = base64_encode(hash_hmac('sha256',str_replace(':null',':""',json_encode($form_data)), config('app.payment_hask_key'), true));

    $headers = [
      'hash'=>[$signature]
    ];

    try {
      $client = new \GuzzleHttp\Client();
      try {
        $endpoint = config('app.pg_curl_url').'/pg/captureResponse';
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $endpoint, [
          'headers'=>$headers,
          'form_params' => $form_data
        ]);
        $response=json_decode($response->getBody()->getContents(),true);
        \Log::info($response);
      } catch (\GuzzleHttp\Exception\BadResponseException $e) {
        $response['error']['message'] = $e->getResponse()->getBody()->getContents();
      } catch (\Exception $e) {
        $response['error']['message'] = $e->getMessage();
      }
    } catch (\Exception $e) {
      // dd($e->getMessage());
      \Log::info($e->getMessage());
    }
      return true;
  }

    public static function fetchTransactionStatus($order_id)
    {

      $salt = config('app.pay_instant_salt');
      $params = [];
      $params['api_key'] = config('app.pay_instant_app_key');
      $params['order_id'] = $order_id;

      $hash = self::hashCalculate($salt, $params);
      $params['hash'] = $hash;

      try {
        $endpoint = 'https://api.payinstance.com/v2/paymentstatus';
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $endpoint, [
          'form_params'=>$params,
        ]);
        $response=json_decode($response->getBody()->getContents(),true);
      } catch (\GuzzleHttp\Exception $e) {
        $response = $e->getResponse()->getBody()->getContents();
      } catch (\Exception $e) {
        $response = $e->getMessage();
      }

      $statusCode = 303;
      $data = [];
      if (isset($response['data'])) {
        $statusCode = 200;
        $data = $response['data'];
      }

      return [
        'status'=>200,
        'message'=>'Data fetched successfully',
        'data' => $data,
        'actual_response' => $response
      ];

      // return response()->json([
      //   'status'=>200,
      //   'message'=>'Data fetched successfully',
      //   'data' => $data,
      //   'actual_response' => $response
      // ]);

    }
}
