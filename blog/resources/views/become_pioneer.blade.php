@extends('layouts.loginMaster')
 @section('title')
    <title>Become a pioneer member | Member Platform | Startups Club</title> 
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
         
             
       


                <div class="card" >
                  <div class="card-block center">
                    <h4 class="m-b-0">
                      <span class="icon-text">Sign Up</span>
                    </h4>
                    <p class="text-muted">Create a new account</p>
                    <form id="pioneer_register_form" method="post" action="/pioneerregisteruser" enctype="multipart/form-data">
                             <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <input type="text" class="form-control" required="" name="fullname" id="fullname" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" required="" id="emailaddress" name="emailaddress" placeholder="Email">
                      </div>
                       <div class="form-group">
                        <input type="text" class="form-control" required="" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                      </div>
                
                      <input id="become_pioneer" name="submit" class="btn  btn-azure" value="Become a Pioneer Member"  />
                         

                    </form>
               
                  </div>
                </div>
              </div>
            </div>
          </div>
<script src="<?php echo URL::asset('/js/become_pioneer.js') ?>"></script>
@stop