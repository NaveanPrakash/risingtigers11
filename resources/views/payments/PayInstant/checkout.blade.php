<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Redirecting</title>
    <style media="screen">
      .d-none {
        display: none;
      }
    </style>
  </head>
  <body>
    <h2>Please wait while we are processing your request ...</h2>
    <div class="d-none">
      <form class="" action="{{$action_url}}" method="post" id="payForm">
        @foreach($fields as $key => $value)
        {{$key}} : <input type="text" name="{{$key}}" value="{{$value}}"> <br>
        @endforeach
        <button type="submit">Submit</button>
      </form>
    </div>
    <script>
      document.getElementById('payForm').submit();
    </script>
  </body>
</html>
