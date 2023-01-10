<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">

        <style>
          body{
              font-family: 'Poppins', sans-serif;
              background-color: #95baa8;
              min-height: 100%;
            }

          .error-notify-image img{
              max-width: 300px;
              width: 100%;
          }
          .mainbox h1{
            font-size: 52px;
            font-family: 'Poppins', sans-serif;
            line-height: 60px;
            color: #1c1c1c;
            text-transform: uppercase;

          }
          .mainbox p{
            font-size: 42px;
            font-family: 'Poppins', sans-serif;
            line-height: 50px;
            color: #1c1c1c;
            margin-bottom: 5px;

          }
          .mainbox {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              text-align: center;
              width: 90%;
          }
          #contBtn {
            position: relative;
            top: 1.5em;
            text-decoration: none;
            background: #fff;
            color: #2284ad;
            margin: auto;
            padding: .8em 3em;
            -webkit-box-shadow: 0px 15px 30px rgb(50 50 50 / 21%);
            -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.21);
            box-shadow: 0px 15px 30px rgb(50 50 50 / 21%);
            border-radius: 25px;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            -o-transition: all .4s ease;
            transition: all .4s ease;
            text-transform: uppercase;
      }
      #contBtn:hover {
          -webkit-box-shadow: 0px 15px 30px rgb(50 50 50 / 41%);
          -moz-box-shadow: 0px 15px 30px rgba(50, 50, 50, 0.41);
          box-shadow: 0px 15px 30px rgb(50 50 50 / 41%);
          -webkit-transition: all .4s ease;
          -moz-transition: all .4s ease;
          -o-transition: all .4s ease;
          transition: all .4s ease;
      }
          @media  only screen and (max-width: 1024px) {
            .mainbox {
              top: 45%;
              left: 50%;
              transform: translate(-50%, -50%);
            }
            .mainbox h1{
              font-size: 45px;
            }
            .mainbox p{
              font-size: 40px;
              line-height: 55px;
            }
          }
          @media  only screen and (max-width: 991px) {
            .error-notify-image img{
              max-width: 230px;
              width: 100%;
            }
            .mainbox p{
              font-size: 40px;
              line-height: 50px;
            }
          }
          @media only screen and (max-width: 768px) {
            .mainbox p{
              font-size: 36px;
              line-height: 40px;
            }
            .error-notify-image img{
              max-width: 230px;
              width: 100%;
            }
          }
          @media only screen and (max-width: 575px) {
            .mainbox p{
              font-size: 26px;
              line-height: 30px;
            }
            .error-notify-image img{
              max-width: 180px;
              width: 100%;
            }
            .mainbox h1{
              font-size: 32px;
            }
          }
          @media only screen and (max-width: 360px) {
            .mainbox p{
              font-size: 18px;
              line-height: 22px;
            }
            .mainbox h1{
              font-size: 28px;
            }
            .error-notify-image img{
              max-width: 150px;
              width: 100%;
            }
          }
          
          @media only screen and (max-width: 320px) {
            .mainbox p{
              font-size: 16px;
              line-height: 22px;
            }
            .mainbox h1{
              font-size: 26px;
            }
            .error-notify-image img{
              max-width: 130px;
              width: 100%;
            }
          }
          


        </style>
    </head>
<body>
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="mainbox col-sm ">
                  <div class="msg-heading">
                    <h1>Pending</h1>
                  </div>
                   <div class="msg"><div class="error-notify-image"><img src="{{ asset('images/wallet_pending.png') }}"></div>
                    <div class="msg-para">
                      <p>Thank you for your payment.
                      <br>It might take few minutes to reflect in your wallet.</p>
                      <a href="javascript:void(0)" onclick="window.close()" id="contBtn">Home</a>
                    </div>
                  </div>
            </div>
      </div>
      </div>

</body>
<script>
  setTimeout(function () {
    // window.open('elevengamers://elevengamers.com','_self');
    window.close()
  },4000)
</script>
</html>