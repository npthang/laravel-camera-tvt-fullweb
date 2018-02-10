<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Admin NovaIO</title>
  <base href="{{ asset('') }}">
  
  <link rel="stylesheet" href="admin_assets/site/css/normalize.min.css">

  <link rel="stylesheet" href="admin_assets/site/css/style.css">
    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <div class="login">
  <h1>Login</h1>
    <form action="admin/login" method="POST" enctype="multipart/form-data">
      @if(count($errors) > 0)
      <div style="color: red">
        @foreach($errors->all() as $err)
            {{ $err }}<br>
        @endforeach
      </div>
      @endif
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <input type="text" name="email" type="email" placeholder="Email" required="required" value="{{old('email')}}" />
        <input type="password" name="password" placeholder="Password" required="required" value="{{old('password')}}" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>
  
    <script src="js/index.js"></script>

</body>
</html>
