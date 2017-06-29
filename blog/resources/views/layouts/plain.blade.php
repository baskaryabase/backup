
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
     <link href="<?php echo URL::asset('/css/edit_profile.css') ?>" rel="stylesheet" type="text/css">
  <script src="<?php echo URL::asset('/js/jquery.multiselect.js') ?>"></script>
     
<script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>
<script src="<?php echo URL::asset('/js/jquery.multiselect.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/parsley.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/js/profile.js') ?>"></script>
 <script src="<?php echo URL::asset('/js/loader.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   @section('header')
        @show

          <!-- Begin page content -->
    <div class="container page-content edit-profile">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- NAV TABS -->

          <ul class="nav nav-tabs nav-tabs-custom-colored tabs-iconized">
            <li class="<?php echo (Request::segment(1)=='edit-profile')?'active':''; ?>"><a href="/edit-profile"  aria-expanded="true"><i class="fa fa-user"></i> Profile</a></li>
            <li class="<?php echo (Request::segment(1)=='edit-company-profile')?'active':''; ?>"><a href="/edit-company-profile" aria-expanded="false"><i class="fa fa-rss"></i> Company Details</a></li>
            <li class="<?php echo (Request::segment(1)=='edit-social-profile')?'active':''; ?>"><a href="/edit-social-profile" aria-expanded="false"><i class="fa fa-gear"></i> Social</a></li>
            <li class="<?php echo (Request::segment(1)=='edit-settings-profile')?'active':''; ?>"><a href="/edit-settings-profile" aria-expanded="false"><i class="fa fa-user"></i> Settings</a></li>
           <?php if(session()->get('role') == 'regular'){ ?>
            <li class="<?php echo (Request::segment(1)=='edit-membership')?'active':''; ?>"><a href="/edit-membership" aria-expanded="false"><i class="fa fa-gear"></i> Membership</a></li>
          <?php } ?>
          </ul>
          <!-- END NAV TABS -->
          <div class="tab-content profile-page">


 @yield('content')  
            
           
          </div>
        </div>    
      </div>
    </div>



@section('footer')
        @show
  </body>
    <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/custom.js') ?>"></script>
     <script src="<?php echo URL::asset('/js/edit_profile.js') ?>"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    
</html>
