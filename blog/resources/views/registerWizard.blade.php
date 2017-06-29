@extends('layouts.registerMaster')
    @section('title')
    <title>Register | Member Platform | Startups Club</title> 
   @stop
@include('layouts.footer')
  @section('footer')
  @stop
@section('content')

<link href="<?php echo URL::asset('/css/register_custom.css') ?>" rel="stylesheet" type="text/css">

<?php


 ?>
<!-- multistep form -->
<form id="msform" method="post" action="/register_user" enctype="multipart/form-data">
  @if(count($errors))
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.
    <br/>
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
  <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
<input type="hidden" name="temp_id" id="temp_id" value="{{ Crypt::encrypt($details['temp_id']) }}">
<input type="hidden" name="user_type" id="user_type" value="{{ $details['type'] }}">
<input type="hidden" name="hidden_image" id="hidden_image" name="" value="<?php echo $details['profile_pic_url'] ?>">
<input type="hidden"  id="hidden_role" name="hidden_role" value="{{ $details['user_flag'] }}">
<input type="hidden"  id="old_flag" name="old_flag" value="{{ $details['type'] }}">
<!-- progressbar -->
<ul id="progressbar">
<li class="active font-medium">Personal Details</li>
<li class="font-medium">Company Details</li>
<li class="font-medium">Membership</li>
</ul>
<!-- fieldsets -->
<fieldset class="form-section">
<h2 class="fs-title align-center"><b>Personal Details</b></h2>
<!-- <h3 class="fs-subtitle">This is step 1</h3> -->
<?php if($details['type'] != 'general'){ ?>
<div class="width-70pc" >
<input type="text" name="register_email" class="form-control" id="register_email" value="{{ $details['email_id'] }}" disabled placeholder="Email" />
</div>
<?php if($details['user_flag'] == 'old'){ ?>
<div class="width-70pc" >
<input type="text" class="form-control" name="register_full" id="register_full" value="{{ $details['full_name'] }}" disabled placeholder="Full name" />
</div>
<?php } ?>
<div class="width-70pc" >
<input type="password" class="form-control" name="register_password" id="register_password" placeholder="Password" />
</div>
<div class="width-70pc" >
<input type="password" class="form-control" name="register_cpassword" id="register_cpassword" placeholder="Confirm password"  />
</div>
<?php } ?>
<div class="align-center width-70pc">
<input type="text" class="form-control " name="Phone number" id="register_phone" placeholder="Phone Number"  /></div>
<div class="width-70pc" >
<input type="text" class="form-control " name="Location" id="register_location" placeholder="Location"  />

</div>
<!-- <input type="text" name="Area of expertise" id="register_aoe" placeholder="Area of expertise"  /> -->
<div class="multiselect  arr width-70pc multi_aoe">
<select name="areaofexp" name="register_aoe" id="register_aoe"  multiple class="form-control areaofexp">
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
<br>
<div class="width-70pc">
<select class="form-control " name="startup_industry" id="personal_domain">
    <option selected disabled>Personal Domain</option>
    <option>Advertising</option>
  <option>Aeronautics/Aerospace</option>
  <option>Agriculture</option>
  <option>AI</option>
  <option>Analytics</option>
  <option>Animation</option>
  <option>AR/VR (Augmented + Virtual)</option>
  <option>Architecture</option>
  <option>Art & Photography</option>
  <option>Automotive</option>
  <option>Beauty</option>
  <option>Computer Vision</option>
  <option>Construction</option>
  <option>Consumer Goods</option>
  <option>Dating/Matrimonial</option>
  <option>Defence</option>
  <option>Design</option>
  <option>Education</option>
  <option>Big Data</option>
  <option>Careers</option>
  <option>Communication</option>
  <option>Energy & Sustainability</option>
  <option>Enterprise Software</option>
  <option>Events</option>
  <option>Fashion</option>
  <option>Finance Technology</option>
  <option>Food & Beverages</option>
  <option>Gaming</option>
  <option>Gifting</option>
  <option>Grocery</option>
  <option>Hardware</option>
  <option>Healthcare</option>
  <option>Human Resources</option>
  <option>Information/Tech</option>
  <option>Internet of Things</option>
  <option>IT Services</option>
  <option>Legal</option>
  <option>Human Resources</option>
  <option>Information/Tech</option>
  <option>Internet of Things</option>
  <option>IT Services</option>
  <option>Legal</option>
  <option>Logistics</option>
  <option>Manufacturing</option>
  <option>Marketing</option>
  <option>Media & Entertainment</option>
  <option>Nanotechnology</option>
  <option>Networking</option>
  <option>Pets & Animals</option>
  <option>Printing</option>
  <option>Real Estate</option>
  <option>Retail</option>
  <option>Robotics</option>
  <option>Safety</option>
  <option>Security</option>
  <option>Services</option>
  <option>Social Impact</option>
  <option>Social Network</option>
  <option>Sports</option>
  <option>Storage</option>
  <option>Transportation</option>
  <option>Other</option>

</select>
</div>
<br>



                            <?php  if($details['profile_pic_url'] != ''){  ?>
       <img id="display_pic" src="<?php echo $details['profile_pic_url'] ?>"  height="100" width="100">
       <?php }else{ ?>
<img id="display_pic" src="<?php echo URL::asset('/image/default.png') ?>"  height="100" width="100">
<br>
<span class="register_profile_error file-input btn btn-block btn-default btn-file width-25pc margin-tp-sm">
                              Profile Picture <input type="file" id="register_profile" <?php if($details['profile_pic_url'] != ''){ ?> value="<?php echo $details['profile_pic_url'] ?>" <?php } ?>>
                          </span>





     <?php  } ?>
     <br>
     <input type="button" name="next" class="next first action-button align-center " value="Next" />
     <br>
     <div class="error-class float-right">*All fields are Mandatory</div>

</fieldset>
<fieldset class="form-section">
<h2 class="fs-title"><b class="avv">Company Details</b></h2>
<!-- <h3 class="fs-subtitle">Your presence on the social network</h3> -->
<div class="margin-tp-sm" ><p>Do you have a startup?</p>
<span class="radio-inline">
                                  <label>
                                      <input name="form-field-radio" type="radio" class="inverted" value="yes" checked>
                                      <span class="text">Yes</span>
                                  </label>
                              </span>
<span class="radio-inline">
                                  <label>
                                      <input name="form-field-radio" type="radio" class="inverted" value="no">
                                      <span class="text">No</span>
                                  </label>
                                  </span>
                              </div>
<div id="display_startup" class="width-70pc" >
<input type="text" style="width:100%" name="startup name" id="startup_name" placeholder="Startup Name"  />

<div class="form-group">
<select class="form-control" name="startup_age" id="startup_age">
    <option selected disabled value="">Startup Age</option>
    <option>Less than 1 year</option>
  <option>1-3 years</option>
  <option>3-5 years</option>
  <option>5+ years</option>
</select>
</div>
<input type="text" name="startup_website" id="startup_website" style="width:100%" placeholder="Startup Website"  />
<div class="form-group">
  <select class="form-control" name="startup_type" id="startup_type">
    <option selected disabled>Startup Type</option>
    <option>Idea stage</option>
  <option>Budding startup</option>
  <option>Pre Revenue</option>
      <option>Growth stage</option>
</select>
</div>
<div class="form-group">
<select class="form-control" name="startup_industry" id="startup_industry">
    <option selected disabled>Startup Industry</option>
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
<textarea name="elevator_pitch" style="width:100%" placeholder="Elevator pitch" id="elevator_pitch"  /></textarea>
</div>

<div id="not_display_startup" style="display:none" class="margin-tp-sm">
Current Engagement

<div class="radio-inline">
                                  <label>
                                      <input name="form-field-radio1" type="radio" value="employed" checked class="inverted">
                                      <span class="text">Employed</span>
                                  </label>
                              </div>
<div class="radio-inline">
                                  <label>
                                      <input name="form-field-radio1" value="unemployed" type="radio" class="inverted">
                                      <span class="text">Looking for opportunities</span>
                                  </label>
                              </div>
<div class="radio-inline">
                                  <label>
                                      <input name="form-field-radio1" value="selfemployed" type="radio" class="inverted">
                                      <span class="text">Self Employed</span>
                                  </label>
                              </div>
<input type="text" name="company_name" id="company_name" placeholder="Company name" class="width-70pc margin-tp-sm" />
<input type="text" name="user_desn" id="user_desn" placeholder="Designation" class="width-70pc" />

  </div>
  <div class="width-70pc arr multi_join">
<select name="joinsuc"  multiple class="form-control joinsuc  ">
<option type="checkbox" value="Investment">Investment</option>
<option type="checkbox" value="Mentoring">Mentoring</option>
<option type="checkbox" value="Exploring Ideas">Exploring Ideas</option>
<option value="Seeking Team / Cofounder">Seeking Team / Cofounder</option>
<option value="Idea Validation">Idea Validation</option>
<option value="Growth & Reach">Growth & Reach</option>
<option value="Build Prototype">Build Prototype</option>
<option value="Networking">Networking</option>
<option value="Marketing">Marketing</option>
<option value="Explore Startup Ecosystem">Explore Startup Ecosystem</option>
<option value="Incubation">Incubation</option>
<option value="Acceleration">Acceleration</option>
<option value="Seeking Support">Seeking Support</option>
<option value="Others">Others</option>
</select>
</div>
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next second action-button" value="Next" />
</fieldset>
<fieldset class="form-section">
<h2 class="fs-title "><b>Membership</b></h2>
<h3 class="fs-subtitle">Choose your membership type</h3>


<div class="width-70pc row pricing_row" style="margin-top: 0%">
  <?php if($details['user_flag'] != 'old'){ ?>
<div>
<label  class="col-md-6 regular_pricing">

         <div class="reg" style="border:2px solid #c1c1a2">
         <div  class="cus_rdcont">
            <div style="border-bottom: 2px solid black;margin:0px ">
               <h5 class="fs-title " ><b>REGULAR MEMBER</b></h5>
           </div>
               <ul style="margin-left: 4.5%;text-align: left;font-size: 1.2em;padding-left:2%;margin-top: 5%">
                 <li>Access to members.</li>
                 <li>Interaction with members.</li>
                 <li>Filtered Search of all members.</li>
               </ul>

 </div>
       <div class="reg" style="background-color:#c1c1a2;padding: 5%;font-size: 20px;margin-top: 5px;color:white; "><b style="font-size:20px;"> FREE </b></div>
        </div>
    </label>
    </div>
 <label class="col-md-6 pioneer_pricing" >

      <div class="pio" style="border:2px solid #c1c1a2">
         <div  class=" cus_rdcont">
         <div style="border-bottom: 2px solid black;margin:0px ">
            <h5 class="fs-title " style="box-shadow: 1px"><b>PIONEER MEMBER</b></h5>
         </div>
        <ul style="margin-left: 4.5%;text-align: left;font-size: 1.2em ;padding-left:2% ;margin-top: 5%">
        <li>Access to members.</li>
        <li>Access to Honorary.</li>
        <li>Pioneer members.</li>
        <li>Direct Messaging to all members.</li>
        <li>Filtered Search of all members.</li>
        <li>Full platform access.</li>
        <li>Access to pioneer whatsapp group.</li>
        <li>Access to exclusive pioneer meets.</li>
        </ul>
</div>
       <div style="margin-top: 5px;background-color:#8cc442;padding: 5%;font-size: 20px;color:white; "><i style="font-size:25px" class="fa fa-inr" aria-hidden="true"> <b style="font-family:montserrat, arial, verdana"> 4000 </b></i></div>

      </div>
    </label>
<?php }else{ ?>
   <p>"We are excited to reveal this platform to you where you can connect with like minded folks, explore opportunities and grow. We will continue to do everything in our capacity to empower you and this is one more small step in that direction. Welcome to the Pioneers Platform"</p>

<?php } ?>
</div>
  <?php if($details['user_flag'] != 'old'){ ?>
<input type="button" name="previous" class="previous action-button" value="Previous" />
<?php } ?>
<input type="button" name="submit" class="submit third action-button" value="{{ ($details['user_flag'] != 'old')?'Submit':'Lets get started' }}" />

</fieldset>




</form>
    <script src="<?php echo URL::asset('/js/register_wizard.js') ?>"></script>
    <script src="<?php echo URL::asset('/js/jquery.easing.min.js') ?>"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAbfW_3bLL8bRuqC8oXl2gReDHBt3zeNRo&sensor=false&libraries=places&language=en"></script>

     <script>
var selected = false;
      var input = document.getElementById('register_location');
      var autocomplete = new google.maps.places.Autocomplete(input,{types: ['(cities)']});
      google.maps.event.addListener(autocomplete, 'place_changed', function(){

         var place = autocomplete.getPlace();
      })

  
    </script>


@stop
