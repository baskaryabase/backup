@extends('layouts.loginMaster')
    @section('title')
    <title>Reset password | Member Platform | Startups Club</title> 
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
            
                    <form id="reset_password" method="post" action="/resetnewpassword" enctype="multipart/form-data">
                      <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="user_id" value="{{ Crypt::encrypt($results['id']) }}">
                      <div class="form-group">
                        <input type="password" class="form-control" name="reset_password" id="reset_password1"  placeholder="Password" required />

                      </div>
                       <div class="form-group">
                     
                       <input type="password" class="form-control" data-parsley-equalto-message="Password and confirm password must be same" required="" data-parsley-equalto="#reset_password1" name="creset_password" placeholder="Confirm Password">
                       </div>
                      <div class="center">
                        
              <input type="submit" name="submit" class="btn  btn-azure" value="Confirm"  />
                         
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
    <script src="<?php echo URL::asset('/js/reset_password.js') ?>"></script>
@stop