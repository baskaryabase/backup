@extends('layouts.loginMaster')
    @section('title')
    <title>Login | Member Platform | Startups Club</title> 
   @stop
@include('layouts.footer')
  @section('footer')
  @stop
@section('content')
<?php 
/*echo '<pre>';
print_r($errors->all()); 
echo '</pre>';*/

 ?>
          <div class="small-info" ng-app="scLogin">
            <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
              <div class="card-group animated flipInX">
<!-- if there are login errors, show them here -->
         
             
       


                <div class="card" ng-controller="myCtrl">

                  <div class="card-block">
                    <div class="center">
                      <h4 class="m-b-0"><span class="icon-text">Login</span></h4>
                      <p class="text-muted">Access your account</p>
                    </div>
            
                    <form id="login_form" method="post" action="/checkuser" enctype="multipart/form-data">
                      <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <input data-parsley-trigger="change" required="" type="text" class="form-control" name="username" id="user_email" placeholder="Email Address">
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
                <div class="card" ng-controller="registerCtrl" >
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
                
                      <input type="submit" name="submit" class="btn  btn-azure" value="Register"  />
                         

                    </form>
                      <div class="social_signup">
                  <a class="btn btn-primary" href="redirect">Sign up With Facebook</a>
                </div>
                    <div class="social_signup">
        <a href="{{ url('redirectlink') }}" class="btn btn-primary">Sign up With Linkedin</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<script src="<?php echo URL::asset('/js/login.js') ?>"></script>
@stop