     @extends('layouts.plain')
         @section('title')
    <title>Edit Profile | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
@include('layouts.footer')
  @section('footer')
  @stop
   @section('content')
   @foreach ($errors->all() as $error)
                 <div class='bg-danger alert'>{{ $error }}</div>
             @endforeach
     
 <form class="form-horizontal" role="form" id="update_settingsprofile" method="post" action="/update_settingsprofile" enctype="multipart/form-data">
                <fieldset>
                    <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                  <h3><i class="fa fa-square"></i> Change Password</h3>
                  <div class="form-group">
                    <label for="old-password" class="col-sm-3 control-label">Old Password</label>
                    <div class="col-sm-4">
                      <input type="password" id="old-password" name="old-password" class="form-control" required="">
                    </div>
                  </div>
                  <hr>
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">New Password</label>
                    <div class="col-sm-4">
                      <input type="password" id="password" name="password" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Repeat Password</label>
                    <div class="col-sm-4">
                      <input type="password" id="password2" name="password2" data-parsley-equalto-message="Password and confirm password must be same" id="register_Cpassword" required="" data-parsley-equalto="#password" class="form-control" required="">
                    </div>
                  </div>
                </fieldset>
          <input type="submit" name="submit" class="btn  btn-azure" value="Save changes"  />
              </form>

              <script type="text/javascript">

  $('#update_settingsprofile').parsley().on('field:validated', function() {

    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(event) {

  //return false;
  
  });

              </script>
            

    @stop









