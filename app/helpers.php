<?php
use App\Models\Transaction;

function checkHelpers()
{
  return  true;
  dd('helper.php is working');
}

function storeTxn($request_arr,$gateway_id)
{
  // dd($request_arr);
    if (Transaction::where('orderId',$request_arr['orderId'])->where('status','!=',1)->first()) {
      return false;
    }

    if (!Transaction::where('orderId',$request_arr['orderId'])->first()) {
      $row = new Transaction;
      $row['orderId'] = $request_arr['orderId'];

      $row['email'] = $request_arr['email'];
      $row['name'] = $request_arr['name'];
      $row['user_id'] = $request_arr['uniqueId'];
      $row['phone'] = $request_arr['phone'];
      $row['amount'] = $request_arr['amount'];

      $row['requestJson'] = json_encode($request_arr);

      $row['merchantTranId'] = isset($request_arr['rzp_orderId']) ? $request_arr['rzp_orderId'] : null;

      $row['gatewayId'] = $gateway_id;
      $row['back23'] = 0;
      $row->save();
    }
    else {
      $old = Transaction::where('orderId',$request_arr['orderId'])->first();
      $old->requestJson = json_encode($request_arr);
      $old->gatewayId = $gateway_id;
      $old->save();
    }

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
        $endpoint = config('app.pg_curl_url').'/pg/initiatePayment';
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

function updateTxn($response_arr,$orderId)
{
  $txn = Transaction::where('orderId',$orderId)->first();
  if ($txn->status!=2) {
    $txn->responseJson = json_encode($response_arr);
    $txn->back23 = 1;
    $txn->sent21 = 0;
    $txn->save();
  }

  return $txn;

  // $result = DB::table('transactions')->where('orderId',$orderId)->update([
  //   'responseJson' => json_encode($response_arr),
  //   'back23' => 1,
  //   'sent21' => 0
  // ]);
  //
  // return $result;
}
