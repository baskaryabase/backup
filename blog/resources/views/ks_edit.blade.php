   
  @extends('layouts.PlainHeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')

 <link href="<?php echo URL::asset('/css/ksedit.css') ?>" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div style="margin-top: 65px; position: relative;" class="container">
<section>

<div style="padding-top: 18px; 
            
            padding-right: 15px;
            padding-left: 15px;" class=" col-md-offset-9 col-md-3">
            
   <div style=" background: #f57f20;
                color: #fff;
                height: 26px;
                text-align: center;
                padding-top: 0px;
                border-radius: 5px;">
                <h5 
                style="font-size: 14px;
                           padding-top:5px;">
                Similar Sessions</h5></div>
</div>

<div style="margin-bottom: 15px;margin-top: 15px;" class="col-md-offset-9 col-md-3 pull-right">

 <div class="event">
  <div class="table">
  <div class="row">
     <div class="col date-short" style="background-color:#8ec33f">
       <div class="month">MAR</div> 
       <div class="day">02</div> 
     </div>
     <div class="col event-details">
       <div class="event-name">Explore Security Graduate Programs</div>
       <div class="date-long">Wednesday, Mar 2, 6pm</div>
       <div class="location">Webinar</div>
       <a href="#"><div class="registration">RSVP</div></a> 
     </div>
    <div class="col right-col"></div>
  </div>
  </div>
</div>

</div>   

<div style="margin-bottom: 25px;"  class="col-md-offset-9 col-md-3 pull-right">

 <div class="event">
  <div class="table">
  <div class="row">
     <div class="col date-short" style="background-color:#999999">
       <div class="month">MAR</div> 
       <div class="day">02</div> 
     </div>
     <div class="col event-details">
       <div class="event-name">Explore Security Graduate Programs</div>
       <div class="date-long">Wednesday, Mar 2, 6pm</div>
       <div class="location">Webinar</div>
       <a href="#"><div class="registration">RSVP</div></a> 
     </div>
    <div class="col right-col"></div>
  </div>
  </div>
</div>

</div>   


</div> 

</section>
</div>

<div style="height: 1400px;" class="opacity"></div>
 
<!-- opacity background -->


<section>
<div class="container">
<div style="background: #fff; position: absolute; top: 67px" class="margin col-md-8"> 

<section id="event-details">
  
  <div class=" margin col-md-12">
    <div>
    <button style="background-color: #f57f20; color: #fff;" class="btn btn-md pull-right">publish</button>
    
    <li style="list-style: none; padding-top: 15px;"><h5><i style="color: #f57f20; padding-right: 14px;" class="fa fa-calendar" aria-hidden="true"></i><span contenteditable="true">12 sep  2017</span>
    <span><span contenteditable="true">,  10 am onwards</span></span></h5></li>

    <li style="list-style: none;"><h5><i style="color: #f57f20; padding-right: 14px;" class="fa fa-clock-o" aria-hidden="true"></i><span contenteditable="true">Four hour Session</span></h5></li>
        <h1 style="font-size: 20px" contenteditable="true">Swapping Customers for Productive Growth – BLR</h1>
    </div>
<div class="padd">
  <ul >
    <li style="list-style: none;"><h5><i style="color: #f57f20; padding-right: 18px;" class="fa fa-map-marker" aria-hidden="true"></i><span contenteditable="true">Coimbatore,</span><span><br><span style="padding-left: 26px;" contenteditable="true"> City hall</span></span>
    <span class="pull-right" contenteditable="true">₹ 5000 / seat</span> 
    </h5></li>
  </ul>
</div>
<div>
  <h2 class="font-size-15"><span>Event Details</span></h2>
  <p contenteditable="true">We have a monthly meetup where entrepreneurs both aspiring and established come together to meet one another. These events typically have a theme, which could be a speaker, a workshop or an entrepreneur sharing his/her experience.We have a monthly meetup where entrepreneurs both aspiring and established come together to meet one another.</p>
</div>

<center>
<div style="padding: 15px">
   <button type="button" class="btn btn-md rsvp" data-toggle="modal" data-target="#myModal">Join Us / RSVP</button></div>
</center>    

</div>
</section>




<section id="Time">

<center><div class="timeline-style">
<h2 class="font-size-15"><span>Timeline</span></h2>
<!-- <h5 class="hh5"><span>Event Date<br></span><strong>12 August 2017</strong></h5> -->
<div class="timeline">
  <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00" contenteditable="true">3:00 PM</time>
    <p contenteditable="true">Task C completed</p>
  </div>
  <div class="timeline-item">
    <time datetime="2016-02-03T11:30+08:00" contenteditable="true">11:30 AM</time>
    <p contenteditable="true">Task B completed</p>
  </div>
  <div class="timeline-item">
    <time datetime="2016-02-03T09:45+08:00" contenteditable="true">9:45 AM</time>
    <p contenteditable="true">Task A completed</p>
  </div>
  <div class="timeline-item">
    <time datetime="2016-02-03T09:45+08:00" contenteditable="true">9:45 AM</time>
    <p contenteditable="true">Task A completed</p>
  </div>
</div>
</div>
</center>
</section>  





<section class="speaker-details padding-120">
      <div class="margin col-md-12">
      <div class="">
        <h2 class="font-size-15"><span>Speaker</span></h2>
      </div>
        <div class="row">
        <div style="box-sizing: inherit; display: block;" class="col-md-4 col-sm-4 col-xs-12">
          <div class="speaker-image">
          
            <img src="<?php echo URL::asset('/image/ks/header.jpg') ?>" alt="speaker image" class="img-responsive ks-speaker-size">

            <input type="file" class="file" id="attachement" name="attachement" style="display: none;" onchange="fileSelected(this)"/>
<input type="button" class="file" id="btnAttachment" onclick="openAttachment()" value="File"/>
          </div>
        </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="speaker-content">
              <h4 contenteditable="true">John dissilva</h4>
              <span contenteditable="true"><strong>Manager</strong></span><br>
                <span style="font-style: italic;" contenteditable="true">company name</span>
              
              <p contenteditable="true">very good skilled person with lot of stuffs filled in and woreking as tech head in product developement in a reputed company</p>
              <ul style="margin-left: -40px;" class="speaker-social">
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              </ul>

            </div>
          </div>
        </div>


<div class="">
  <div class="row col-list">
    <div class="col-md-6 t1">
      <div class="col-head text-center">
        
        <h3 style="padding-top: 5px;font-size: 20px;">Awards</h3>
      </div>
      <ul class="list-unstyled">
           <li>
            <p contenteditable="true" class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span >Option #1 #1</p>
           </li>
           <li>
            <p contenteditable="true" class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #1 #2</p>
           </li>
           <li>
            <p contenteditable="true" class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #1 #3</p>
           </li>
      </ul>
    </div>
    <div class="col-md-6 t2">
      <div class="col-head text-center">
        
        <h3 style="padding-top: 5px;font-size: 20px">Recognitions</h3>
      </div>
      <ul class="list-unstyled">
           <li>
            <p contenteditable="true" class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #2 #1</p>
           </li>
           <li>
            <p contenteditable="true" class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #2 #2</p>
           </li>
      </ul>
    </div>
  
</div>
</div>
<div class="col-md-3"></div>
</section>
</div>
</section>




@stop