@extends('layouts.loginMaster')
    @section('title')
    <title>Forgot password | Member Platform | Startups Club</title> 
   @stop

@section('content')



       <div class="small-info" ng-app="scLogin">
            <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
              <div class="card-group animated flipInX">
                <div class="card" ng-controller="myCtrl">
                  <div class="card-block">
                    <div class="center">
                      <h4 class="m-b-0"><span class="icon-text">Forgot Password</span></h4>
                      <p class="text-muted">Please enter your Registred mail id</p>
                    </div>
            
                    <form id="forgot_password" method="post" action="/check-forgot" enctype="multipart/form-data">
                      <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <input data-parsley-trigger="change" required="" type="email" class="form-control" name="username" id="user_email" placeholder="Email Address">
                      </div>
                       @foreach ($errors->all() as $error)
                 <div class='bg-danger alert'>{{ $error }}</div>
             @endforeach
                     
                      <div class="center">
                        
              <input type="submit" name="submit" class="btn  btn-azure" value="Send Mail"  />
                         
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
    <script src="<?php echo URL::asset('/js/forgot_password.js') ?>"></script>
@stop