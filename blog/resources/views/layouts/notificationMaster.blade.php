
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

 
     <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/cover.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/forms.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/list_posts.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">

<script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>

 <script src="<?php echo URL::asset('/js/loader.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   @section('header')
        @show

 


 @yield('content')  
            
           
     



@section('footer')
        @show
  </body>
    <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/custom.js') ?>"></script>
     <script src="<?php echo URL::asset('/js/notification.js') ?>"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
</html>
