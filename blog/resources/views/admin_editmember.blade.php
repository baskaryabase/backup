  @extends('layouts.adminMaster')
   @section('content')

<?php

/*echo '<pre>';
print_r($details);
echo '</pre>';
die;*/
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profile
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Edit profile</a></li>
        <li class="active">Basic Information</li>
      </ol>
    </section>
<section class="content">
	<div class="row">
	<div class="col-md-12">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Basic Information</h3>
            </div>
  <form class="form-horizontal" role="form" method="post"  enctype="multipart/form-data">
                <fieldset>
                <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" id="user_id" value="{{ $details['id'] }}">
               <input type="hidden" id="join_suc_hidden"  value="{{ $details['joinsuc'] }}"> 
        <input type="hidden" id="sc_aoe"  value="{{ $details['sc_expertise'] }}"> 
                <input type="hidden" id="personal_domain_hidden"  value="{{ $details['personal_domain'] }}">
                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Full name</label>
                    <div class="col-sm-7">
                      <input type="text" id="fullname" name="fullname" value="{{ $details['sc_fullname'] }}" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Phone number</label>
                    <div class="col-sm-7">
                      <input type="text" id="phonenumber" name="phonenumber" value="{{ $details['sc_phone'] }}" class="form-control" required="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Email id</label>
                    <div class="col-sm-7">
                      <input type="text" disabled id="emailid" name="emailid" value="{{ $details['sc_email'] }}" class="form-control" required="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Location</label>
                    <div class="col-sm-7">
                      <input type="text" id="location" name="Location" value="{{ $details['sc_location'] }}" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Area of expertise</label>
                    <div class="col-sm-7">
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
                    <div class="col-sm-7">
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
                <div class="box-footer">

<input type="button" class="btn btn-info pull-right" id="update_basic" value="update">
</div>
              </form>
</div>
</div>
</div>
</section>

<section class="content">
	<div class="row">
	<div class="col-md-12">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Startup Information</h3>
            </div>
  <form class="form-horizontal" role="form" id="update_companyprofile" method="post" >
                <fieldset>

            <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">  <p>Do you have a startup?</p></label>
                    <div class="col-sm-4">
                    <div class="radio-inline">
                                  <label>
                                      <input name="form-field-radio" type="radio" class="inverted" <?php if($details['is_sc']=='yes'){ echo 'checked'; } ?> value="yes">
                                      <span class="text">Yes</span>
                                  </label>
                              </div>
<div class="radio-inline">
                                  <label>
                                      <input name="form-field-radio" type="radio" class="inverted" <?php if($details['is_sc']=='no'){ echo 'checked'; } ?> value="no">
                                      <span class="text">No</span>
                                  </label>
                              </div>
                    </div>
                  </div>
        <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" id="join_suc_hidden"  value="{{ $details['joinsuc'] }}">
        <input type="hidden" id="sc_aoe"  value="{{ $details['sc_expertise'] }}">

<div id="display_startup" <?php if($details['is_sc']=='no'){ echo 'style="display:none"'; } ?>>

                  <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Startup name</label>
                    <div class="col-sm-4">
                      <input type="text" id="startup_name" name="startup_name" value="{{ $details['startup_name'] }}" class="form-control" required="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Startup age</label>
                    <div class="col-sm-4">
                      <select class="form-control" name="startup_age" id="startup_age">
    <option disabled>Startup Age</option>
    <option <?php if('less than 1 year'== $details['startup_age']){ echo 'checked'; } ?>>less than 1 year</option>
  <option <?php if('1-3 years'== $details['startup_age']){ echo 'checked'; } ?>>1-3 years</option>
  <option <?php if('3-5 years'== $details['startup_age']){ echo 'checked'; } ?>>3-5 years</option>
  <option <?php if('5+ years'== $details['startup_age']){ echo 'checked'; } ?>>5+ years</option>
</select>

                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Startup website</label>
                    <div class="col-sm-4">
                      <input type="text" id="startup_website" name="startup_website" value="{{ $details['startup_website'] }}" class="form-control" required="">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Startup type</label>
                    <div class="col-sm-4">
                       <select class="form-control" name="startup_type" id="startup_type">
    <option disabled>Startup Type</option>
    <option <?php if('Idea stage' == $details['startup_type']){ echo 'selected'; } ?>>Idea stage</option>
  <option <?php if('Budding startup' == $details['startup_type']){ echo 'selected'; } ?>>Budding startup</option>
  <option <?php if('Pre Revenue' == $details['startup_type']){ echo 'selected'; } ?>>Pre Revenue</option>
      <option <?php if('Growth stage' == $details['startup_type']){ echo 'selected'; } ?>>Growth stage</option>
</select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Startup industry</label>
                    <div class="col-sm-4">
                     <select class="form-control" name="startup_industry" id="startup_industry">
    <option disabled>Startup industry</option>
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
    <option <?php if($value == $details['startup_industry']){ echo 'selected'; } ?>>{{ $value }}</option>
  <?php } ?>

</select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Elevator pitch</label>
                    <div class="col-sm-4">
                      <textarea id="elevator_pitch"  name="elevator_pitch" value="{{ $details['elevator_pitch'] }}" class="form-control" required="">{{ $details['elevator_pitch'] }}</textarea>
                    </div>
                  </div>
</div>

<div id="not_display_startup" <?php if($details['is_sc']=='yes'){ echo 'style="display:none"'; } ?>>








<div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Current Engagement</label>
                    <div class="col-sm-4">
                     <div class="radio">
                                  <label>
                                      <input name="form-field-radio1" <?php if('employed'== $details['current_engg']){ echo 'checked'; } ?> value="employed" type="radio" class="inverted">
                                      <span class="text">Employed</span>
                                  </label>
                              </div>
<div class="radio">
                                  <label>
                                      <input name="form-field-radio1" <?php if('unemployed'== $details['current_engg']){ echo 'checked'; } ?> value="unemployed" type="radio" class="inverted">
                                      <span class="text">Looking for opportunities</span>
                                  </label>
                              </div>
<div class="radio">
                                  <label>
                                      <input name="form-field-radio1" <?php if('selfemployed'== $details['current_engg']){ echo 'checked'; } ?> value="selfemployed" type="radio" class="inverted">
                                      <span class="text">Self Employed</span>
                                  </label>
                              </div>
                    </div>
                  </div>

<div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Company name</label>
                    <div class="col-sm-4">
                    <input type="text" name="company_name" value="{{ $details['company_name'] }}" id="company_name" placeholder="Company name"  />

                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Designation</label>
                    <div class="col-sm-4">
                    <input type="text" name="user_desn" value="{{ $details['user_desn'] }}" id="user_desn" placeholder="Designation"  />
                    </div>
                  </div>






</div>


<div class="form-group">
                    <label for="password2" class="col-sm-3 control-label">Purpose to join Startups Club ?</label>
                    <div class="col-sm-4">
                    <select name="joinsuc"  multiple class="form-control joinsuc">
<option value="Investment">Investment</option>
<option value="Mentoring">Mentoring</option>
<option value="Exploring Ideas">Exploring Ideas</option>
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
                  </div>



                </fieldset>
                     <div class="box-footer">

<input type="button" class="btn btn-info pull-right" id="update_company" value="Update" >
</div>
              </form>
</div>
</div>
</div>
</section>
<section class="content">
	<div class="row">
	<div class="col-md-12">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Social Information</h3>
            </div>
<form class="form-horizontal" role="form" id="update_socialprofile1" method="post" action="/admin/update_socialprofile" enctype="multipart/form-data">
                <fieldset>
                	<input type="hidden" id="user_id" name="user_id" value="{{ $details['id'] }}">
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
 <div class="box-footer">

<button class="btn btn-info pull-right" id="update_company">update</button>
</div>              </form>
</div>
</div>
</div>
</section>

</div>
 <script src="<?php echo URL::asset('/js/admin_edit_profile.js') ?>"></script>
   @stop 