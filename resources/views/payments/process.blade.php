<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Redirecting ...</h3>
    <div style="display:none;">
      <form class="" id="gettopost" action="{{$action_url}}" method="post">
        @csrf
        @foreach($fields as $key => $value)
        <input type="text" name="{{$key}}" value="{{$value}}">
        @endforeach
      </form>
    </div>
    <script>
    document.getElementById('gettopost').submit();
    </script>
  </body>
</html>
