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
     <?php
/*echo '<pre>';
print_r();
echo '</pre>';*/

      ?>
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

    <option <?php if('less than 1 year'== $details['startup_age']){ echo 'selected'; } ?>>less than 1 year</option>
  <option <?php if('1-3 years'== $details['startup_age']){ echo 'selected'; } ?>>1-3 years</option>
  <option <?php if('3-5 years'== $details['startup_age']){ echo 'selected'; } ?>>3-5 years</option>
  <option <?php if('5+ years'== $details['startup_age']){ echo 'selected'; } ?>>5+ years</option>
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
          <input type="button" name="submit" id="update_company" class="btn  btn-azure" value="Save changes"  />
              </form>



    @stop