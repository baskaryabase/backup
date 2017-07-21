   
@section('header') 
<style type="text/css">
.navbar-style{
 margin-bottom: 100px;
}
@media screen and (min-width: 767px) and (max-width: 1093px) {
   .navbar-style{
     margin-bottom: 180px;
   }
}
.hover-class{
  cursor: pointer !important;
}
</style>
<input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
<div class="navbar-style" id="navbar">
 <nav class="navbar navbar-default navbar-static-top navbar-fixed-top" role="navigation">
    <div class="container" >
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><img src="<?php echo URL::asset('/image/logo_head.png') ?>"></img></a>
    </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">    
 
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" >Know us<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/what-we-do">What we do</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="/family">Family</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" >Event<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="kopie"><a href="/events">Meetups</a></li>
                        <li><a href="/knowledge-sessions">Ks</a></li>
                        <li><a href="#">Revup</a></li>
                        <li><a href="#">Calender</a></li>
                    </ul>
                </li>
                <li><a href="/demoday">Demoday</a></li>
                <li><a href="/find">Find</a></li>
                <li><a href="#">Ask</a></li>
                <li><a href="/scin">Scin</a></li>
            
              
                 
            
                          <?php if(!empty(session()->get('SessionID'))){ ?>
  <li><a onclick="get_notification()" class="btn-default hover-class dropdown-toggle" id="menu1" data-toggle="dropdown">
  <img src="<?php echo URL::asset('/image/notification.png') ?>">
  </img> <span class="badge notifybadge"></span></a>

<ul class="dropdown-menu custom_notify" role="menu" aria-labelledby="menu1">
     <div id="display_notify"></div>
    </ul>
            </li>
            <li><a onclick="get_notification_msg()" class="hover-class btn-default dropdown-toggle" id="menu1" data-toggle="dropdown"><i class="fa fa-envelope" aria-hidden="true"></i>
 <span class="badge msgbadge"></span></a>

<ul class="dropdown-menu custom_notify" role="menu" aria-labelledby="menu1">
     <div id="display_notify_msg"></div>
    </ul>



            </li>     
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-circle img-sm" src="{{ session()->get('profile_pic') }}" alt="User Image"></i></a>
              </a>
              <ul class="dropdown-menu">
                <li><a href="/profile/<?php echo session()->get('unique_name'); ?>">My profile</a></li>
                <li><a href="/edit-profile">Edit profile</a></li>
                <li><a href="/edit-membership">Become a pioneer Member</a></li>
                <li><a href="/logout">logout</a></li>
                
              </ul>
            </li>
           <?php }else{ ?>
                  <li class=""><a href="#" class="getLogin" >Login/Signup</a></li>
                  <?php } ?>


          </ul>
        </div>
      </div>
      </div>
    </nav>


  <!-- Modal -->
  <div class="modal fade" id="login_modal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
<div class="modal-content">
        
        <!-- <div class="modal-body">
          -->
          
<div style="padding-top: 0px;" class="modal-body">
 <button style="padding-top: 10px;" type="button" class="close" data-dismiss="modal">&times;</button>
   <div style="margin-bottom: -35px;" class="row">
    <div class="">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-12">
              <form id="login-form"  role="form" style="display: block;">
                <h2>LOGIN</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="col-xs-6 form-group pull-left checkbox">
                    <input id="checkbox1" type="checkbox" name="remember">
                    <label for="checkbox1">Remember Me</label>   
                  </div>
                  <div class="col-xs-6 form-group pull-right">     
                        <input type="button" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                  </div>
                  <div class="col-xs-12">
                    <center>forgot password?<a id="forgot-btn" href="#">click here...</a></center>
                  </div>
              </form>


              <form id="register-form"  role="form" style="display: none;">
                <h2>REGISTER</h2>
                  <div class="form-group">
                    <input type="text" name="username" id="fullname" tabindex="1" class="form-control" placeholder="Fullname" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="emailaddress" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="register_password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirmpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="button" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
              </form>

              
              <form id="forgot-password"  role="form" style="display: none;">
                <h2>Forgot Password</h2>
                  <div class="form-group">
                    <input type="email" name="username" id="email_id" tabindex="1" class="form-control" placeholder="Please Enter email id" value="">
                    <div style="padding-top: 20px;" class="col-sm-6 col-sm-offset-3">
                        <input type="button" name="forgot-password-submit" id="forgot-password-submit" tabindex="4" class="form-control btn btn-register" value="Submit">
                      </div>
                  </div>
              </form>


            </div> 
          </div>
        </div>
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-6 tabs">
              <a href="#" class="active" id="login-form-link">
              <div style="border-radius: 0 0 0 4px;" id="a" class="login focus">LOGIN</div></a>
            </div>
            <div class="col-xs-6 tabs">
              <a href="#" id="register-form-link"><div id="b" class="register ">REGISTER</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



        <!-- </div> -->
 
      </div>
      
    </div>
  </div>




<script type="text/javascript">
  $(function() {
    $('#login-form-link').click(function(e) {
      $("#login-form").delay(100).fadeIn(100);
    $("#register-form").fadeOut(100);
    $("#forgot-password").delay(100).fadeOut(100);
    $('#register-form-link').removeClass('active');
    $("#a").addClass('focus');
    $('#b').removeClass('focus');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#forgot-btn').click(function(e) {
      $("#forgot-password").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $("#forgot-password").delay(100).fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    $("#a").removeClass('focus');
    $('#b').addClass('focus')
    e.preventDefault();
  });

});

</script>



<script>
/*$(document).ready(function() {
$('[data-toggle="tooltip"]').tooltip(); 

})*/
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});


</script>
   <script src="<?php echo URL::asset('/js/header.js') ?>"></script>
     <link href="<?php echo URL::asset('/css/common.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/popup.css') ?>">

    @stop