
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo URL::asset('/image/use.png') ?>">
  @section('title')
        @show
    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/login_register.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/forms.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
          <script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/parsley.min.js') ?>"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-fixed-top navbar-transparent" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button id="menu-toggle" type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </button>
          <a class="navbar-brand" href="profile.html"><img src="<?php echo URL::asset('/image/logo_head.png') ?>"></img></a>
        </div>
      </div>
    </nav>
    <div class="wrapper" >
      <div class="parallax filter-black"  >
          <div class="parallax-image" ></div>
      @yield('content')
     </div>
     <div class="landing_content">
<h3>Welcome to the Member Platform</h3>
<p>There are several challenges that you will come across in your entrepreneurial journey. </p><p>Often having a companion in the journey makes the passage a lot easier. </p><p>We are building this community with the intention of creating a support system for entrepreneurs, so you will not be a stranger in any city that you go…</p>
</div>
  @section('footer')
        @show
    </div>
  </body>

 <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo URL::asset('/js/custom.js') ?>"></script>
    <script src="<?php echo URL::asset('/js/loader.js') ?>"></script>



</html>