  @extends('layouts.findMaster')
      @section('title')
    <title>Find | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop

@include('layouts.footer')
  @section('footer')
  @stop
   @section('content')
<?php
/*echo '<pre>';
print_r($details);
echo '</pre>';*/
?>
<style type="text/css">
@media screen and (max-width: 991px){
  .cont{
    padding: 0 15px;
    margin: 0 auto;
  }
}

  @media screen and (max-width: 991px){
    
    .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    margin-left: -30px;
    margin-top: 180px;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 30px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
  }
</style>

 <div class="row page-content">
      <div class="col-md-8 col-md-offset-2">
        <div class="row">
          <div class="col-md-12">

 

 <div class="col-md-9">

   <div class="cover profile">

     <input class="form-control input-sm find_change" id="member_find" placeholder="Enter the name of the member" type="text">

   </div>

 </div>

 <div class="col-md-3" style="

   text-align: right;



   solid #f57f20;

;

   padding: 4px 0;

   color: #333;

">

   <small><span id="members_count">{{ $details['countmembers'] }}</span> members</small>

 </div>

</div>


<!-- filter div starts here -->
<div id="mySidenav" class="col-md-3 sidenav" >
 <a href="javascript:void(0)" class="closebtn hidden-lg hidden-md" onclick="closeNav()">&times;</a>

  <div class="widget" style="max-height: 250px;overflow-y:scroll">
              <div class="widget-body" >Location
 <?php

foreach ($details['location'] as $key => $value) {

?>


                 <div class="checkbox">
                                      <label>
                                          <input class="find_change" name="find_location[]" value="{{ $value }}" type="checkbox">
                                          <span class="text">{{ $value }}</span>
                                      </label>
                  </div>

  <?php } ?>


              </div>
            </div>
            <div class="widget" style="max-height: 250px;overflow-y:scroll">
              <div class="widget-body" >Area of Expertise
 <?php
   $ind = array('Business Development','Marketing','Technical','Product Management','Design','Operations','Programming','Sales','Growth','Fundraising','Finance','Strategy','User Experience','Public Relations','Legal');
foreach ($ind as $key => $value) {

?>


                 <div class="checkbox">
                                      <label>
                                          <input class="find_change" name="find_aoe[]" value="{{ $value }}" type="checkbox">
                                          <span class="text">{{ $value }}</span>
                                      </label>
                  </div>

  <?php } ?>


              </div>
            </div>
        <div class="widget" style="max-height: 250px;overflow-y:scroll">
              <div class="widget-body" >Looking for:
 <?php
   $ind = array('Investment','Mentoring','Exploring Ideas','Seeking Team / Cofounder','Idea Validation','Growth & Reach','Build Prototype','Networking','Marketing','Explore Startup Ecosystem','Incubation','Acceleration','Seeking Support','Others');
foreach ($ind as $key => $value) {

?>


                 <div class="checkbox">
                                      <label>
                                          <input name="joinsuc[]" class="find_change" value="{{ $value }}" type="checkbox">
                                          <span class="text">{{ $value }}</span>
                                      </label>
                  </div>

  <?php } ?>


              </div>
            </div>

  <div class="widget" style="max-height: 250px;overflow-y:scroll">
              <div class="widget-body" > Personal Domain
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


                 <div class="checkbox">
                                      <label>
                                          <input type="checkbox" class="find_change" value="{{ $value }}" name="find_personal_domain[]">
                                          <span class="text">{{ $value }}</span>
                                      </label>
                  </div>

  <?php } ?>


              </div>
            </div>

         </div>
         <!-- filter end -->



<div id="main" class="col-md-9 cont" >
        
        <span class="hidden-lg hidden-md" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<div class="row">
  <div id="display_find_append">
          <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
    <?php foreach ($details['members'] as $key => $value) {
/*echo '<pre>';
print_r($value);
echo '</pre>';*/
     ?>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 find-box">
              <div class="contact-box center-version">
                <a href="/profile/{{ $value['sc_unique_name'] }}">
                  <img alt="image" class="img-circle" src="{{ !empty($value['sc_profile_pic'])?$value['sc_profile_pic']:URL::asset('/image/user-default.png') }}">
                  <h3 class="m-b-xs"><strong>{{ $value['sc_fullname'] }}</strong> <?php if($value['role'] != 'regular'){ ?><img data-toggle="tooltip" title="{{ get_title($value['role']) }}" class="badge_logo" src="{{ get_logo($value['role']) }}" alt="User Image"><?php } ?></h3>

                  <div class="font-bold">{{ empty($value['startup_name'])?$value['company_name']:$value['startup_name'] }}<br>{{ $value['sc_location'] }}</div>
                  
                </a>
                <div class="contact-box-footer">



              <div class="m-t-xs btn-group">

                           <a onclick="sendMessage(this)" data-user="{{ $value['id'] }}" class="btn-white"><i class="fa fa-envelope"></i>&nbsp Send Messages</a>

                       </div>
                </div>
              </div>
          </div>
<?php } ?>

        </div>
      </div>
      </div>
    </div>
    </div>
    </div>


<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("mySidenav").style.marginLeft = "0";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("mySidenav").style.marginLeft = "-30px";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "#E9EAEd";
}
</script>

@stop