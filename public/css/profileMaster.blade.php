
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
        <title>Profile-Startupsclub</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/profile3.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/forms.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/css/toastr.min.css') ?>" rel="stylesheet" type="text/css">

<script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/parsley.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/toastr.min.js') ?>"></script>
    <script src="bootstrap.3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body> 

    <!-- Fixed navbar -->
      @section('header')
        @show
        <?php
/*  echo '<pre>';
        print_r($details);
        echo '</pre>';*/
        ?>
<div class="container page-content">
  <input type="hidden" id="role"  value="{{ session()->get('role') }}"> 
      <div class="row">
      <div class="col-md-10 col-md-offset-1">
      <div class="user-profile">
        <div class="profile-header-background">
          <?php if(!empty($details['sc_cover_photo'])){ ?>
          <img id="display_cover" src="<?php echo URL::asset("/image/".$details['sc_cover_photo']) ?>" alt="Profile Header Background">
        <?php }else{ ?>
         <img id="display_cover" src="<?php echo URL::asset("/image/default.png") ?>" alt="Profile Header Background">
         <?php } ?>
        <p><?php  if($details['user_id'] == session()->get('userid')){ ?>
                        <span class="file-input btn btn-azure btn-file pull-right">
                          Change Cover <input id="change_cover" type="file">
                        </span>
                        <?php } ?>
                         <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      </p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="profile-info-left">
              <div class="text-center">
                  <img src="<?php echo $details['sc_profile_pic']; ?>" alt="Avatar" class="custom_pic avatar img-circle">
                  <h2>{{ $details['sc_fullname'] }}</h2>
              </div>
              <div class="action-buttons">
                <div class="row" >
                 <!--  <div class="col-xs-6">
                      <a href="#" class="btn btn-azure btn-block"><i class="fa fa-user-plus"></i> Follow</a>
                  </div> -->
                <?php  if($details['user_id'] == session()->get('userid')){ ?>
                  <div class="col-xs-6">
                      <a href="/edit-profile" class="btn btn-azure btn-block"><i class="fa fa-envelope"></i> Edit Profile</a>
                  </div>
                  <?php }else{ ?>
                   <div class="col-xs-6">
                      <a onclick="sendMessage(this)" data-user="{{ $details['user_id'] }}" class="btn btn-azure btn-block"><i class="fa fa-envelope"></i> Message</a>
                  </div>

               <?php   } ?>
                </div>
              </div>
             <div class="section">
                <h3 style="padding: 2%">Basic</h3>
                <ul class="list-unstyled list-social">
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['startup_name'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['sc_location'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['sc_expertise'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['startup_website'] }}</a></li>
                </ul>
              </div>
          <?php   if(session()->get('role') == 'pioneer' || $details['user_id'] == session()->get('userid')){ ?>
              <div class="section">
                <h3>Contact</h3>
                <ul class="list-unstyled list-social">
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['sc_phone'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['startup_type'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['startup_age'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['sc_email'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['joinsuc'] }}</a></li>
                  <li><a href="#"><i class="fa fa-dribbble"></i> {{ $details['startup_website'] }}</a></li>
                </ul>
              </div>
              <div class="section">
                <h3>Social</h3>
                <ul class="list-unstyled list-social">
                  <li><a href="#"><i class="fa fa-twitter"></i> {{ $details['sc_twitter_link'] }}</a></li>
                  <li><a href="#"><i class="fa fa-facebook"></i> {{ $details['sc_fb_link'] }}</a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i> {{ $details['sc_linkedin_link'] }}</a></li>
                </ul>
              </div>
<?php }else{ ?>

   <div class="section div-check">
                <h3 style="padding: 2%">Contact</h3>
                <ul class="list-unstyled list-social">
                  <li class=" blur"><a href="#"><i class="fa fa-dribbble"></i> 9999999999</a></li>
                  <li class=" blur"><a href="#"><i class="fa fa-dribbble"></i> xxxxxxxxxx</a></li>
                  <a href="/edit-membership"><div class="pop-one"><b>Become Pioneer Member</b></div></a>
                  <li class=" blur"><a href="#"><i class="fa fa-dribbble"></i> 00</a></li>
                  <li class=" blur"><a href="#"><i class="fa fa-dribbble"></i> xxxx@xxxx.com</a></li>
                  <li class=" blur"><a href="#"><i class="fa fa-dribbble"></i> xxxxxxxxxxxxxxxx</a></li>
                  <li class=" blur"><a href="#"><i class="fa fa-dribbble"></i> xxxxxxxxxxxxxxxxx</a></li>
                </ul>
              </div>
              <div class="section div-check2">
                <h3>Social</h3>
                <ul class="list-unstyled list-social">
                  <li class=" blur"><a href="#"><i class="fa fa-twitter"></i> xxxxxxxxxxxxxxxxxxxx</a></li>
                  <a href="/edit-membership"><div  class="pop-two"><b>Become Pioneer Member</b></div></a> 
                  <li class=" blur"><a href="#"><i class="fa fa-facebook"></i> xxxxxxxxxxxxxxxxxx</a></li>
                  <li class=" blur"><a href="#"><i class="fa fa-linkedin"></i> xxxxxxxxxxxxxxxxx</a></li>
                </ul>
              </div>


<?php } ?>

            </div>
          </div>
          
      @yield('content')    

        </div>
      </div>
      </div>
      </div>
    </div>    
 

   <div class="modal fade" id="sendmessageuser1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Message</h4>
        </div>
        <div class="modal-body">
  <textarea class="form-control" rows="5" id="send_message_value"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="sendmessageuser" data-user="" class="btn btn-primary">Send Message</button>
        </div>
      </div>
    </div>
  </div>
  

   @section('footer')
        @show
    <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/custom.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/profile.js') ?>"></script>
  </body>
  

</html>
