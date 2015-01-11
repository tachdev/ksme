<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="MyTheme">

  @section('title')
  <title>Login</title>
  @show

 <link href="<?php echo asset('assets/css/style.css') ?>" rel="stylesheet">
 <link href="<?php echo asset('assets/css/style-responsive.css'); ?>" rel="stylesheet">
 <link href="<?php echo asset('assets/css/custom.css'); ?>" rel="stylesheet">

  @yield('script_top')

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body class="login-body sticky-header">
<div class="left-side sticky-left-side login-head-logo">
  <div class="logo">
          <a class="toggle-btn hidden-lg hidden-md" style="color:green"><i class="fa fa-bars"></i></a>
          <a href="<?php echo url('/'); ?>"><img src="assets/images/logo.png" alt=""></a>
  </div>
</div>
<div class="login-right-head">
@include('element.header')
</div>
<div class="login-status">
     @section('login_text')
      <p><span class="key-icon">Please Login To Your Account</span></p>
     @show
</div>
<div class="container login-page-block">
    	 @yield('content')
</div>

<div class="login-footer">
      <img src="assets/images/sponsor.png" alt=""/>
</div>
<!--common scripts for all pages-->
<script src="<?php echo asset('assets/js/jquery/jquery-1.10.2.min.js') ?>"></script>
<script src="<?php echo asset('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo asset('assets/js/modernizr.min.js') ?>"></script>

@yield('script_bottom')


</body>
</html>