@extends('layouts.registerMaster')

@section('content')



       <form id="register_form" method="post" action="/registeruser" enctype="multipart/form-data">
                             <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <input type="text" class="form-control" required="" name="fullname" placeholder="Full Name">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" required="" name="emailaddress" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" required="" name="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" required="" name="confirmpassword" placeholder="Confirm Password">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" required="" name="phonenumber" placeholder="Phone Number">
                      </div>
                
                           <input type="submit" name="submit" class="btn  btn-azure" value="Register"  />
                         

                    </form>
    
@stop