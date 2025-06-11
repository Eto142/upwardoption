<!DOCTYPE html>
<html>

<!-- Mirrored from  by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 09:08:22 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Upwardoptiontrade</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="icon" href="img/favicon.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '4aea598a2a6729d2fe6fac9a6302fc3252617f91';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

<body class="hold-transition register-page" style="background-image: url('images/bg2.jpg');">


  <div class="nk-ovm mask-a shape-a"></div>
  <!-- Place Particle Js -->
  <div id="particles-bg" class="particles-container particles-bg"></div>
  </div>
  <div class="register-box">
    <div class="register-logo" style="margin-bottom: 1px;">
      <a href="/"><img src="io.png" class="img-responsive"></a>

    </div>

    <div class="register-box-body">
      <h3 class="login-box-msg"> Sign-In</h3>
      <p class="login-box-msg">
      <p>Access the Upwardoptiontrade panel using your email and password</p>
      </p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        
         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Enter Password" id="myInput"  required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
           <input type="checkbox" onclick="myFunction()">Show Password
        </div>
        
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

        <div class="form-group">
          <button name="next" class="btn btn-lg btn-primary btn-block" {{ __('Login') }}>Login</button>
        </div>
      </form><!-- form -->
      <div class="form-note-s2 pt-4"> Don't have an account ? <a
          href="{{route('register')}}"><strong>Register</strong></a>
      </div>

      @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif



      <!-- form -->

    </div>
  </div>
  <!-- /.form-box -->
  </div>
  <!-- /.register-box -->
  <script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
  <!-- jQuery 3 -->
  <script src="dist/js/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="dist/js/bootstrap.min.js"></script>

</body>

<!-- Mirrored from Cityfxmarkets.cc/register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 09:08:23 GMT -->

</html>