  
 @section('header') 
<nav class="navbar navbar-white navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="/"><img src="<?php echo URL::asset('/image/logo_head.png') ?>"></img></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">    
                            <?php if(!empty(session()->get('SessionID'))){ ?>
                  <li class=""><a href="/logout" >Logout</a></li>
                  <?php }else{ ?>
                  <li class=""><a href="#" class="getLogin" >Login</a></li>
                  <?php } ?>
            <li class="<?php echo (Request::segment(1)=='home')?'actives':''; ?>"><a href="/">Home <span class="badge homebadge"></span></a></li>
            <li class="<?php echo (Request::segment(1)=='find')?'actives':''; ?>"><a href="/find">Find</a></li>
            <li class="<?php echo (Request::segment(1)=='ask')?'actives':''; ?>"><a data-html="true" data-toggle="tooltip" data-placement="bottom" title="Coming Soon">Ask</a></li>
            <li class="<?php echo (Request::segment(1)=='events')?'actives':''; ?>"><a href="http://startupsclub.org/monthly-meetings/">Events</a></li>
                          <?php if(!empty(session()->get('SessionID'))){ ?>
  <li><a onclick="get_notification()" class="btn btn-default dropdown-toggle" id="menu1" data-toggle="dropdown"><img src="<?php echo URL::asset('/image/notification.png') ?>"></img> <span class="badge notifybadge"></span></a>
<ul class="dropdown-menu custom_notify" role="menu" aria-labelledby="menu1">
     <div id="display_notify"></div>
    </ul>
            </li>
            <li><a onclick="get_notification_msg()" class="btn btn-default dropdown-toggle" id="menu1" data-toggle="dropdown"><i class="fa fa-envelope" aria-hidden="true"></i>
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
           <?php } ?>
          </ul>
        </div>
      </div>
    </nav>




    
<div id="login_modal" class="modal fade" role="dialog">
  <div class="modal-dialog ">
    <!-- Modal content-->
    <div class="modal-content">
    
      <div class="modal-body">
        <div class="card" style="text-align:center" ng-controller="myCtrl">
                  <div class="card-block">
                    <div class="center">
                      <h4 class="m-b-0"><span class="icon-text">Login</span></h4>
                      <p class="text-muted">Access your account</p>
                    </div>
            
                    <form name="login_form" method="post" ng-app="LoginApp" ng-controller="LoginCtrl"  enctype="multipart/form-data">
                      <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                      <input required="" type="text" ng-model="username" class="form-control" name="username" id="user_email" placeholder="Email Address">
                      <span style="color:red" ng-show="login_form.username.$dirty && login_form.username.$invalid">
                      <span ng-show="login_form.username.$error.required">Username is required.</span>
                      </span>
                      </div>
                      <div class="form-group">
                        <input type="password" required="" class="form-control" id="user_password" name="password" placeholder="Password">
                        <a href="/forgot-password" class="pull-xs-right">
                          <small>Forgot?</small>
                        </a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="center">
                        
              <input type="submit" name="submit" class="btn  btn-azure" value="Login"  />
                         
                      </div>
                    </form>
                       @foreach ($errors->all() as $error)
                 <div class='bg-danger alert'>{{ $error }}</div>
             @endforeach
                  </div>
                </div>
                <div class="card" style="text-align:center" ng-controller="registerCtrl" >
                  <div class="card-block center">
                    <h4 class="m-b-0">
                      <span class="icon-text">Sign Up</span>
                    </h4>
                    <p class="text-muted">Create a new account</p>
                    <form id="register_form" method="post" action="/registeruser" enctype="multipart/form-data">
                             <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <input type="text" class="form-control" required="" name="fullname" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" required="" name="emailaddress" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" id="register_password" class="form-control" required="" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" data-parsley-equalto-message="Password and confirm password must be same" id="register_Cpassword" required="" data-parsley-equalto="#register_password" name="confirmpassword" placeholder="Confirm Password">
                      </div>
                <div class="form-group">
                      <input type="submit" name="submit" class="btn  btn-azure" value="Register"  />
                         
</div>
                    </form>
                    <div class="form-group">
                      <div class="social_signup">
                  <a class="btn btn-primary" href="redirect">Sign up With Facebook</a>
                </div>
                </div>
                    <div class="social_signup">
        <a href="{{ url('redirectlink') }}" class="btn btn-primary">Sign up With Linkedin</a>
                      </div>
                  </div>
                </div>
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script>
/*$(document).ready(function() {
$('[data-toggle="tooltip"]').tooltip(); 
})*/
</script>
   <script src="<?php echo URL::asset('/js/header.js') ?>"></script>
     <link href="<?php echo URL::asset('/css/common.css') ?>" rel="stylesheet" type="text/css">
    @stop