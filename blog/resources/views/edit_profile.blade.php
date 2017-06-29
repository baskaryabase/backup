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
  
   <!-- PROFILE TAB CONTENT -->
            <div class="tab-pane profile active" id="profile-tab">
              <div class="row">
                <div class="col-md-3">
                  <div class="user-info-left">
                    <img id="display_pic" style="width: auto; max-width: 100%;" src="<?php echo $details['sc_profile_pic']; ?>" alt="Profile Picture">
                    <h2>{{ $details['sc_fullname'] }}</h2>
                    <div class="contact">
                      <p>
                        <span class="file-input btn btn-azure btn-file">
                          Change Avatar <input type="file" id="basic_profile">
                        </span>
                      </p>
                      
                      <ul class="list-inline social">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter-square"></i></a></li>
                        <li><a href="#" title="Google Plus"><i class="fa fa-google-plus-square"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="user-info-right">
                     @foreach ($errors->all() as $error)
                 <div class='bg-danger alert'>{{ $error }}</div>
             @endforeach
                    <div class="basic-info">
                      <h3><i class="fa fa-square"></i> Basic Information</h3>
            <form class="form-horizontal" role="form" id="update_basicprofile" method="post"  enctype="multipart/form-data">
                <fieldset>
                <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
               <input type="hidden" id="join_suc_hidden"  value="{{ $details['joinsuc'] }}"> 
        <input type="hidden" id="sc_aoe"  value="{{ $details['sc_expertise'] }}"> 
                <input type="hidden" id="personal_domain_hidden"  value="{{ $details['personal_domain'] }}">
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Full name</label>
                    <div class="col-sm-4">
                      <input type="text" id="fullname" name="fullname" value="{{ $details['sc_fullname'] }}" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-4">
                      <input type="text" id="phonenumber" name="phonenumber" value="{{ $details['sc_phone'] }}" class="form-control" required="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Email id</label>
                    <div class="col-sm-4">
                      <input type="text" id="emailid" name="emailid" value="{{ $details['sc_email'] }}" class="form-control" required="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Location</label>
                    <div class="col-sm-4">
                      <input type="text" id="location" name="Location" value="{{ $details['sc_location'] }}" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Area of expertise</label>
                    <div class="col-sm-4">
                      <!-- <input type="text" id="aoe" name="aoe" value="{{ $details['sc_expertise'] }}" class="form-control" required=""> -->
                    
                    <select name="aoe" id="aoe"  multiple class="form-control areaofexp">
<option value="Business Development">Business Development</option>
<option value="Marketing">Marketing</option>
<option value="Technical">Technical</option>
<option value="Product Management">Product Management</option>
<option value="Design">Design</option>
<option value="Operations">Operations</option>
<option value="Programming">Programming</option>
<option value="Sales">Sales</option>
<option value="Growth">Growth</option>
<option value="Fundraising">Fundraising</option>
<option value="Finance">Finance</option>
<option value="Strategy">Strategy</option>
<option value="User Experience">User Experience</option>
<option value="Public Relations">Public Relations</option>
<option value="Legal">Legal</option>
</select>

                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">personal Domain</label>
                    <div class="col-sm-4">
                    <!--   <input type="text" id="password2" name="aoe" value="{{ $details['personal_domain'] }}" class="form-control" required=""> -->
                    <select class="form-control" name="personal_domain" id="personal_domain">
    
    <?php
   $ind = array('Advertising', 'Aeronautics/Aerospace', 'Agriculture', 'AI', 'Analytics',
  'Animation', 'AR/VR (Augmented + Virtual)', 'Architecture', 'Art & Photography', 'Automotive', 'Beauty',
  'Computer Vision', 'Construction', 'Consumer Goods', 'Dating/Matrimonial ', 'Defence', 'Design', 'Education',
  'Big Data', 'Careers', 'Communication', 
  'Energy & Sustainability', 'Enterprise Software', 'Events', 'Fashion', 'Finance Technology', 'Food & Beverages',
  'Gaming', 'Gifting', 'Grocery', 'Hardware', 'Healthcare',
  'Human Resources', 'Information/Tech', 'Internet of Things', 'IT Services', 'Legal',
  'Logistics', 'Manufacturing', 'Marketing', 'Media & Entertainment', 'Nanotechnology', 'Networking',
  'Pets & Animals', 'Printing', 'Real Estate', 'Retail', 'Robotics','Safety',
  'Security', 'Services', 'Social Impact', 'Social Network', 'Sports','Storage','Transportation','Other'
);
foreach ($ind as $key => $value) {
 
?>
    <option>{{ $value }}</option>
  <?php } ?>
    
</select>
                    </div>
                  </div>

                </fieldset>
          <input type="button" name="submit" class="btn  btn-azure" value="Save changes" id="update_basic"  />
              </form>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            <script type="text/javascript">


  $('#update_basicprofile').parsley().on('field:validated', function() {

    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(event) {

  //return false;
  
  });


            </script>


 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_JNV8VAG5tqRSLAjfQOO5tRv3WgA4Tic&sensor=false&libraries=places&language=en"></script>

     <script>
var selected = false;
      var input = document.getElementById('location');
      var autocomplete = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
      google.maps.event.addListener(autocomplete, 'place_changed', function(){

         var place = autocomplete.getPlace();
      })

      $('#location').on('focus', function() {
  selected = false;
  }).on('blur', function() {
    if (!selected) {
      $(this).val('');
    }
  });
    </script>
            <!-- END PROFILE TAB CONTENT -->
        
            <!-- ACTIVITY TAB CONTENT -->
           
            <!-- END SETTINGS TAB CONTENT -->

    @stop