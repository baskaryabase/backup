    @extends('layouts.PlainHeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
 @section('footer')
@include('layouts.footer')
@stop
   @section('content')	
	
    <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/single_event.css') ?>">
	<link href="<?php echo URL::asset('/css/meetup_style.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

<?php
$date=date('jS F Y',strtotime($events['event']['event_date']));
$time=$events['event']['event_time'];
$events_cost_for_attending_paid=$events['event']['event_cost'];
$events_venue=$events['event']['event_venue'];
$the_content=$events['event']['event_content'];

/*echo '<pre>';
print_r($events);
echo '</pre>';*/
 ?>
	
<section class="full bot-mar"> 
<div class="cont event_single">
<div class="bot-mar col-md-9">
<div class="white-bg col-md-12 col-sm-12">
<div style="padding-top: 5px;" class="article-body">
<h1 class="eve-title">{{ $events['event']['event_title'] }}</h1>
<div class="row highligh_row" >
<?php
if(!empty($date)){ ?>							  	
<p style="font-size: 14px;" class="event_title"><i style="color: #f57f20;" class="fa fa-calendar" aria-hidden="true"></i> <span class="event_info"><?php echo $date; ?></span></p>
		 <?php }
		?>

	<?php 
		if(!empty($time)){ ?>
        <p style="font-size: 14px;" class="event_title event_time"><i style="color: #f57f20;" class="fa fa-clock-o" aria-hidden="true"></i> <span class="econtents"><?php echo $time; ?></span></p>
			            <?php }
			            ?>

					<?php
		if(!empty($events_cost_for_attending_paid)){ ?>
        <p style="font-size: 14px;" class="rate_single"><i style="font-size: 14px; color: #f57f20;" class="event-irupee">&#x20B9;</i><?php echo $events_cost_for_attending_paid; ?></p>
        <?php }
        else{ ?>
    	<p style="font-size: 14px;" class="rate_single"> Free</p>
        <?php }
		?>	
		<p style="font-size: 14px;" class="rate_single" data-post="" data-cost="<?php echo '200' ?>" onclick="buy_ticket(this)">RSVP</p>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-12">
						<?php 
						if(!empty($events_venue)){ ?>
				            <p class="venue_details"><i style="color: #f57f20;" class="fa fa-map-marker fa-lg" aria-hidden="true"></i> <span class="econtents"><?php echo $events_venue; ?></span></p>
				            <?php } ?>	     
			        </div>
			       
			    </div>
			         <hr>
			          <div class="col-md-12">
				        <?php
				        	echo $the_content;
				         ?> 
				    </div> 
				    <hr>   
					<div id="rsvp" class="row text-center">
					<a  class="show-more hvr-bounce-to-right rsvp_link" href="#" data-type="meetup" data-id="{{ $events['event']['event_id'] }}" >RSVP</a>
					</div>
			       
			       
			        	<div id="myModal" class="modal fade" role="dialog">
  
</div>
			
<div class="group">
    <div class="item line"></div>
    <div class="item text">Event Speakers</div>
    <div class="item line"></div>
</div>

</div><!--end of article snippet-->
</div>

 <div><section class="speaker-div" id="event-speakers">
		<div class="container">
		<div class="col-md-9">
			<div class="row height">
				<?php foreach ($events['speaker'] as $key => $value) {
				$speaker_image= URL::asset("/image/speakers/".$value['speaker_image']);
?>
				<div class="col-md-8 col-sm-8 col-lg-offset-0 col-md-offset-1 col-sm-offset-1">
					<!-- .single-speakers -->
					

					<div class="single-speakers row">
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container" data-wow-delay=".6s"><img src="{{ $speaker_image }}" alt=""></div>
						</div>
						<div class="info text-left col-lg-6 col-md-7 col-sm-7">
							<h3>{{ $value['speaker_name'] }}</h3>
							<span class="position">{{ $value['speaker_desn'] }}</span>
							<p>{{ $value['speaker_bio'] }}</p>
							<ul style="margin-left: -60px;" class="social">
								
								<li><a href="{{ $value['speaker_tlink'] }}"><i class="fa fa-twitter"></i></a></li>
								
								<li><a href="{{ $value['speaker_llink'] }}"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					
					<!-- /.single-speakers -->

					<!-- .single-speakers -->
				 
				</div>
				<?php } ?>
				
					<!-- .single-speakers -->
					 
					
				</div>
			</div>
			
		</div>
		</div>
	</section></div>

</div>
<!-- end of 9 columns -->

<div class="ks-sim-mar col-md-3">
<div>
	<div class="ks-sim-div">
	     <h5 style="font-size: 15px; 
	                padding-top: 4px;">Similar events<h5></div>
</div>
<?php foreach ($events['similar'] as $key => $value) {
?>
<a href="/single-events/{{ str_slug($value['event_title']) }}">
<div class="sm-events" style="background: #fff;margin-top: 15px;">	
   <div class="sm-div">
   	<img src="<?php echo URL::asset('/image/ks/header.jpg') ?>">
   	<h4 style="font-size: 18px; font-weight: normal;" class="sm-head">{{ $value['event_title'] }}</h4>
   </div>
   <div>
   	<h6 style="color: black;padding-bottom: 8px;">{{ date('jS F Y',strtotime($value['event_time'])) }}<span class="pull-right">{{ $value['event_time'] }}</span></h6>
   </div>
</div> 
</a>   

  <?php } ?>

</div>


</div>
</section>


<div id="rsvp_modal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
  <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">RSVP Registration</span></h3>
      </div>
      <div class="modal-body">
<div class="row">

        
            <div class="col-md-6">
            	<div class="form-group">

            	<h4>Name in full:</h4>
              <input class="form-control participant_modal" id="attendees_name" type="text">
            </div>
</div>


 <div class="col-md-6">
 	<div class="form-group">
 	<h4>Email-id:</h4>
<input type="text" id="attendees_email" class="form-control participant_modal">
</div>
</div>
</div>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
            <h4>Cell Number:</h4>
            
              <input class="form-control participant_modal" id="attendees_mobile" type="text">
            </div>
</div>
 <div class="col-md-6">
<div class="form-group">
<h4>City of origin</h4>

<input type="text" id="attendees_city" class="form-control participant_modal">
</div>
</div>
</div>
<div class="row">
	<div class="col-md-6">
<div class="form-group">
            <h4>Current status:</h4>

            <select class="form-control participant_modal" id="attendees_status">
  <option>Aspiring entrepreneur</option>
  <option>Budding entrepreneur</option>
  <option>Established  entrepreneur</option>

</select>
            
             
            </div>
</div>

</div>
<div class="row member_partner_display" style="display:none">
	<div class="col-md-12">
<div class="form-group">
            <h4>Passes</h4>

           <div class="radio">
  <label class="radio-inline"><input type="radio" id="yes_pioneer" data-cost="15000" data-value="Platinum ValueKit" checked name="optradio2">Platinum ValueKit     <span style="text-decoration:line-through">Rs. 17,000</span>. Early bird offer    Rs. 15,000  (All 3 days + 4 MasterClass)</label>
</div>
<div class="radio">
  <label class="radio-inline"><input type="radio" data-value="Gold ValueKit" data-cost="10000" name="optradio2">Gold ValueKit           <span style="text-decoration:line-through">Rs. 12,000</span>. Early bird offer     Rs.   10,000  (All 3 days + 2 MasterClass)</label>
</div>
<!-- <div class="radio">
  <label class="radio-inline"><input type="radio" data-value="2-Day Pitch Pass" data-cost="5000" name="optradio2">3-Day Pitch Pass       <span style="text-decoration:line-through">Rs.   7,000</span>. Early bird offer     Rs.   5,000   (All 3 Day minus MasterClass)</label>
</div>
<div class="radio">
  <label class="radio-inline"><input type="radio" data-value="1-Day Pitch Pass" data-cost="3000" name="optradio2">1-Day Pitch Pass       <span style="text-decoration:line-through">Rs.   5,000</span>. Early bird offer     Rs.   3,000  (Day 3)</label>
</div> -->

            
             
            </div>
</div>

</div>

      
      
      
    </div>
    <div class="modal-footer">
    	<span id="total_amount">₹ <span id="change_total_amount_new"></span></span>
        <button type="button" class="btn btn-default close_modal" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-type="" data-id="" id="register_rsvp">Register</button>
    
      </div>

  </div>
</div>
</div>
</div>

@stop