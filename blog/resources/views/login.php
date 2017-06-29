@extends('layouts.master')

@section('content')
<div class="parallax filter-black" ng-app="scLogin" >
          <div class="parallax-image"></div>             
          <div class="small-info">
            <div class="col-sm-10 col-sm-push-1 col-md-6 col-md-push-3 col-lg-6 col-lg-push-3">
              <div class="card-group animated flipInX">
                <div class="card" ng-controller="myCtrl">
                  <div class="card-block">
                    <div class="center">
                      <h4 class="m-b-0"><span class="icon-text">Login</span></h4>
                      <p class="text-muted">Access your account</p>
                    </div>
                    <form action="index.html" method="get">
                      <div class="form-group">
                        <input type="text" ng-required="user.user_email" class="form-control" ng-model="user.user_email" placeholder="Email Address">
                      </div>
                      <div class="form-group">
                        <input type="password" ng-required="user.user_password" class="form-control" ng-model="user.user_password" placeholder="Password">
                        <a href="#" class="pull-xs-right">
                          <small>Forgot?</small>
                        </a>
                        <div class="clearfix"></div>
                      </div>
                      <div class="center">
                        <a ng-click="login_user()" class="btn  btn-azure">
                          Login
                        </a>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="card" ng-controller="registerCtrl">
                  <div class="card-block center">
                    <h4 class="m-b-0">
                      <span class="icon-text">Sign Up</span>
                    </h4>
                    <p class="text-muted">Create a new account</p>
                    <form action="index.html" method="get">
                      <div class="form-group">
                        <input type="text" ng-required="required" class="form-control" ng-model="user.user_fullname" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <input type="text" ng-required="required" class="form-control" ng-model="user.user_emailaddress" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" ng-required="required" class="form-control" ng-model="user.user_pass" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" ng-required="required" class="form-control" ng-model="user.user_passconfirm" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <input type="text" ng-required="required" class="form-control" ng-model="user.user_phone" placeholder="Phone Number">
                      </div>
                        <a ng-click="register_sc()" class="btn  btn-azure">
                          Register
                        </a>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
@stop