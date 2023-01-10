<!DOCTYPE html>
<html>
    <head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <style>
          body{
              font-family: 'Poppins', sans-serif;
              background-color: #f7f7f7;
              min-height: 100%;
            }
           
          .error-notify-image img{
              max-width: 600px;
              width: 100%;
          }
          .mainbox h1{
            font-size: 49px;
            font-family: 'Poppins', sans-serif;
            line-height: 55px;
            color: #FF7536;

          }
          .mainbox p{
            font-size: 40px;
            font-family: 'Poppins', sans-serif;
            line-height: 50px;
            color: #0F0F0F;
            margin-bottom: 5px;

          }
          .mainbox {
              position: absolute;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              text-align: center;
          }
          #contBtn {
            position: relative;
            top: 1.5em;
            text-decoration: none;
            background: #072f7a;
            color: #fff;
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
          @media only screen and (max-width: 1024px) and (min-width: 1023px)  {
            .mainbox p{
                font-size: 25px;
                line-height: 30px;
            }
          


          }

          @media only screen and (max-width: 1024px) {
            .mainbox {
              position: relative;
              top: inherit;
              left: inherit;
              transform: inherit;
              margin-top: 150px;
            }
           
          }
        </style>
    </head>
<body>
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="mainbox col-sm ">
                  <div class="msg-heading">
                    <h1>Payment Failed</h1>
                  </div>
                   <div class="msg"><div class="error-notify-image"><img src="{{asset('/images/Payment_success_fail_24.png')}}"></div>
                    <div class="msg-para">
                      <p>Something went wrong, Please try again..</p>
                      <a href="javascript:void(0)" onclick="window.close()" id="contBtn">Back to home</a>
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