


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
     
 <form class="form-horizontal" role="form" id="update_socialprofile1" method="post" action="/update_socialprofile" enctype="multipart/form-data">
                <fieldset>
                <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Facebook link</label>
                    <div class="col-sm-4">
                      <input type="text" id="password" name="facebook_link" value="{{ $details['sc_fb_link'] }}" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Linked in link</label>
                    <div class="col-sm-4">
                      <input type="text" id="password2" name="linkedin_link" value="{{ $details['sc_linkedin_link'] }}" class="form-control">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Twitter link</label>
                    <div class="col-sm-4">
                      <input type="text" id="password2" name="twitter_link" value="{{ $details['sc_twitter_link'] }}" class="form-control">
                    </div>
                  </div>
                  

                </fieldset>
          <input type="submit" name="submit" class="btn  btn-azure" value="Save changes"  />
              </form>
            
            <script type="text/javascript">

  $('#update_socialprofile1').parsley().on('field:validated', function() {

    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(event) {

  //return false;
  
  });


            </script>

    @stop