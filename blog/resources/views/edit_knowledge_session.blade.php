 @extends('layouts.PlainHeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header') 
@stop
   @section('content')

 <link href="<?php echo URL::asset('/css/edit_ks.css') ?>" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="<?php echo URL::asset('/css/jquery.timepicker.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/datepicker3.css') ?>" rel="stylesheet" type="text/css">
           <link href="<?php echo URL::asset('/admin/css/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css">
<?php 
/*echo '<pre>';
print_r($data['metas']);
echo '</pre>';
die;*/
?>


<div style="margin-top: 65px; position: relative;" class="container">
<section>

<div class=" col-md-offset-9 col-md-3 first-div">
            
   <div class="ks-similar-div">
                <h5 
                class="ks-similar-head">
                Similar Sessions</h5></div>
</div>

<div class="similar-eve col-md-offset-9 col-md-3 pull-right">

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

<div class="similar-eve-2 col-md-offset-9 col-md-3 pull-right">

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

<div class="opacity opacity-height"></div>
 
<!-- opacity background -->

<div id="add_section">
<section>
<div class="container add-ks-container">
<div class="margin col-md-7 add-ks-div"> 

<section id="event-details">
  
  <div class=" margin col-md-12">
    <div class="alert alert-danger display_error" style="display:none">
  <strong>Error!</strong>You seem to have left something empty! please check for fields!!!

<ul>
  <div id="error_append"></div> 
</ul>

</div>
    <div>
    <button id="update_ks" class="publish-btn btn btn-md pull-right">Update</button>
    
    <li class="ks-date"><h5><i class="ks-icon fa fa-calendar" aria-hidden="true"></i>
      <span >
        <input type="date" value="{{ $data['ks']['ks_date'] }}" id="ks_date" placeholder="when?" ></span>
    <span><span >,  
      <input type="date" value="{{ $data['ks']['ks_time'] }}" id="ks_time" placeholder="On?" > onwards</span></span></h5></li>

    <li class="li-style"><h5><i class="ks-icon fa fa-clock-o" aria-hidden="true"></i>
      <span ><input type="date" value="{{ $data['ks']['ks_duration'] }}" id="ks_duration" placeholder="How long?" ></span></h5></li>
        <h1 style="font-size: 20px" ><input type="date" value="{{ $data['ks']['ks_title'] }}" style="width:60%"  id="ks_title" placeholder="What is the session about?" ></h1>
    </div>
<div class="padd">
  <ul >
    <li class="li-style"><h5><i class="ks-icon2  fa fa-map-marker" aria-hidden="true"></i>
      <span ><input type="text" id="ks_city" value="{{ $data['ks']['ks_city'] }}" placeholder="Which City?" >,</span><span><br>
      <span style="padding-left: 26px;" > <input type="date" value="{{ $data['ks']['ks_venue'] }}" id="ks_venue" placeholder="Address?" ></span></span>
    <span class="pull-right" > 
      <select id="ks_cost">
  <option >Select Price</option>
  <option <?php echo ($data['ks']['ks_cost'] == '2000')?'selected':'' ?> >2000</option>
  <option <?php echo ($data['ks']['ks_cost'] == '3000')?'selected':'' ?> >3000</option>
  <option <?php echo ($data['ks']['ks_cost'] == '5000')?'selected':'' ?> >5000</option>
</select>  / seat</span> 
    </h5></li>
  </ul>
</div>
<div>
  <h2 class="font-size-15"><span>Event Details</span></h2>
<!--  <textarea rows="4" cols="50" id="ks_event_details" style="width:100%" placeholder="Enter event Details..">
</textarea>  -->
   <form>
                <textarea id="ks_event_details" class="textarea" placeholder="Describe your session in glowing words.." style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
</div>

   

</div>
</section>




<section id="Time">

<center><div class="timeline-style">
<h2 class="font-size-15"><span>Timeline</span></h2>
<!-- <h5 class="hh5"><span>Event Date<br></span><strong>12 August 2017</strong></h5> -->
<div class="timeline">
  <?php $i=0; foreach ($data['metas']['timeline'] as $key => $value) {
?>
  <div class="timeline-item ks_timeline">
   <?php if($i==0){ ?>
    <a  onclick="get_wrapper()"><i class="fa fa-plus pull-right" aria-hidden="true"></i></a>
    <?php }else{ ?>
    <a onclick="remove_wrapper(this)"><i class="fa fa-times pull-right" aria-hidden="true"></i></a>
    <?php } ?>
    <time datetime="2016-02-03T15:00+08:00" ><input type="date" value="{{ $value['meta_data'] }}" class="ks_timeline_time" placeholder="Enter Time" ></time>
    <p ><input type="date" class="ks_timeline_content" value="{{ $value['meta_extra'] }}" placeholder="Details?" > </p>


  </div>
   <?php $i++; } ?>

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
        <div class="ks-speaker-div col-md-4 col-sm-4 col-xs-12">
          <div class="speaker-image">
             <?php $spk_img=URL::asset('/image/speakers/'.$data['ks']["ks_speaker_img"]); ?>
            <img src="<?php echo $spk_img ?>" id="display_pic" alt="speaker image" class="img-responsive ks-speaker-size">
  <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
  <input type="hidden" id="hidden_image" name="_token" value="{{ $data['ks']['ks_speaker_img'] }}">

<input type="file" name="pic" id="ks_speaker_pic" >
          </div>
        </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="speaker-content">
              <h4><input type="text" value="{{ $data['ks']['ks_speaker_name'] }}" id="ks_speaker_name" placeholder="Name?" ></h4>
              <span ><strong><input type="text" value="{{ $data['ks']['ks_speaker_desn'] }}" id="ks_speaker_desn" placeholder="Designation?" ></strong></span><br>
                <span style="font-style: italic;"><input type="text" value="{{ $data['ks']['ks_speaker_company'] }}" id="ks_speaker_company" placeholder="Where do you work?" ></span>
              
              <p> <textarea rows="3" id="ks_speaker_bio" cols="30" style="width:100%" placeholder="Describe your work and yourself in glowing words...">
</textarea></p>
              <ul class="speaker-social">
                <li><input type="text"  id="ks_speaker_linkedin" value="{{ $data['ks']['ks_speaker_linkedin'] }}" placeholder="Your linkedin profile" ></li>
                <li><input type="text" id="ks_speaker_twitter" value="{{ $data['ks']['ks_speaker_twitter'] }}" placeholder="Your twitter profile" ></li>
              </ul>

            </div>
          </div>
        </div>


<div class="">
  <div class="row col-list">
    <div class="col-md-6 t1">
      <div class="col-head text-center">
        
        <h3 class="ks-awardandachieve">Awards</h3>
      </div>
      <ul class="list-unstyled">
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span ><input type="text" value="{{ isset($data['metas']['awards'][0]['meta_data'])?$data['metas']['awards'][0]['meta_data']:'' }}" class="ks_speaker_awards" placeholder="Awards you have won?" ></p>
           </li>
           <li>
            <p  class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_awards" value="{{ isset($data['metas']['awards'][1]['meta_data'])?$data['metas']['awards'][1]['meta_data']:'' }}" placeholder="Awards you have won?" ></p>
           </li>
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_awards" placeholder="Awards you have won?" value="{{ isset($data['metas']['awards'][2]['meta_data'])?$data['metas']['awards'][2]['meta_data']:'' }}" ></p>
           </li>
            <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_awards" value="{{ isset($data['metas']['awards'][3]['meta_data'])?$data['metas']['awards'][3]['meta_data']:'' }}" placeholder="Awards you have won?" ></p>
           </li>
            <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_awards" placeholder="Awards you have won?" value="{{ isset($data['metas']['awards'][4]['meta_data'])?$data['metas']['awards'][4]['meta_data']:'' }}" ></p>
           </li>
      </ul>
    </div>
    <div class="col-md-6 t2">
      <div class="col-head text-center">
        
        <h3 class="ks-awardandachieve">Recognitions</h3>
      </div>
      <ul class="list-unstyled">
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_recognitions" placeholder="Recognitions you have been given?" value="{{ isset($data['metas']['recognitions'][0]['meta_data'])?$data['metas']['recognitions'][0]['meta_data']:'' }}" ></p>
           </li>
           <li>
            <p  class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_recognitions" placeholder="Recognitions you have been given?" value="{{ isset($data['metas']['recognitions'][1]['meta_data'])?$data['metas']['recognitions'][1]['meta_data']:'' }}" ></p>
           </li>
            <li>
            <p  class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_recognitions" placeholder="Recognitions you have been given?" value="{{ isset($data['metas']['recognitions'][2]['meta_data'])?$data['metas']['recognitions'][2]['meta_data']:'' }}" ></p>
           </li>
           <li>
            <p  class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_recognitions" placeholder="Recognitions you have been given?" value="{{ isset($data['metas']['recognitions'][3]['meta_data'])?$data['metas']['recognitions'][3]['meta_data']:'' }}" ></p>
           </li>
            <li>
            <p  class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span><input type="text" class="ks_speaker_recognitions" placeholder="Recognitions you have been given?" value="{{ isset($data['metas']['recognitions'][4]['meta_data'])?$data['metas']['recognitions'][4]['meta_data']:'' }}" ></p>
           </li>
      </ul>
    </div>
        <input type="hidden" id="hidden_content"  value="{{ $data['ks']['ks_event_details'] }}">
    <input type="hidden" id="hidden_content_bio"  value="{{ $data['ks']['ks_speaker_bio'] }}">
    <input type="hidden" id="edit_id"  value="{{ $data['ks']['ks_id'] }}">
  
</div>
</div>
<div class="col-md-3"></div>
</section>
</div>
</section>
</div>

<div>
  <div class="container">
          <center><p class="text-muted"> Copyright 2017 Startups Club Services Pvt Ltd. </p></center>
        </div>
</div>
 <script src="<?php echo URL::asset('/admin/js/bootstrap-datepicker.js') ?>"></script>
 <script src="<?php echo URL::asset('/js/jquery.timepicker.js') ?>"></script>
 <script src="<?php echo URL::asset('/js/ks.js') ?>"></script>
    <script src="<?php echo URL::asset('/js/loader.js') ?>"></script>
      <script src="<?php echo URL::asset('/admin/js/bootstrap3-wysihtml5.all.min.js') ?>"></script>


<script>
  $('#ks_date').datepicker({
      autoclose: true
    });
  $("#ks_time").timepicker();
  $(".ks_timeline_time").timepicker();
    $(function () {
 
    $("#ks_event_details").wysihtml5();
     $("#ks_event_details").val($('#hidden_content').val());
     $("#ks_speaker_bio").val($('#hidden_content_bio').val());
  });
</script>
@stop