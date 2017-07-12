
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

	<link rel="stylesheet" type="text/css" href="css/events_style.css">



	
	<!-- #upcoming-event -->
	<section id="upcoming-event">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7 mar-top">
					<div class="section-title">
						<h1>Upcoming Events</h1>
<!-- 						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <br> been the industry's standard dummy text ever since the 1500</p>
 -->					</div>
				</div>
			<!-- 	<div class="col-lg-5 col-md-5 col-sm-5">
					<form action="#" class="pull-right">
						<input type="text" placeholder="Search Event"> <button type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div> -->
			</div>
			<div class="row">
				<div class="col-lg-12">
				<!-- 	<div class="tab-title-wrap">
						<ul class="clearfix">
							<li class="filter active" data-filter="all"><span>All Event</span></li>
							<li class="filter" data-filter=".april-14"><span>April 14</span></li>
							<li class="filter" data-filter=".april-22"><span>April 22</span></li>
							<li class="filter" data-filter=".april-28"><span>April 28</span></li>
							<li class="filter" data-filter=".may-10"><span>May 10</span></li>
							<li class="filter" data-filter=".may-15"><span>May 15</span></li>
							<li class="filter" data-filter=".may-22"><span>May 22</span></li>
							<li class="filter" data-filter=".may-23"><span>May 23</span></li>
							<li class="filter" data-filter=".jun-01"><span>June 01</span></li>
						</ul>
					</div> -->
		<div align="center"  class="tab-content-wrap row row-eq-height">
			<?php foreach ($events as $key => $value) { 
				# code...
		?>
			<div class="col-lg-3 col-md-4 col-sm-6 mix hvr-float-shadow wow fadeIn">
				<div class="img-holder"><img src="http://wp1.themexlab.com/html/event_time/img/upcoming-event/1.jpg" alt="">
                 
				</div>
				<div class="content-wrap row-eq-height">
					
					<div class="meta">
						<ul>
							<li><span><i class="fa fa-clock-o"></i>{{ date('jS F Y',strtotime($value['event_date'])) }}</span></li>
							<li><span><i class="fa fa-map-marker"></i>{{ $value['event_city'] }}</span></li>
						</ul>
					</div>
			
					<h3>{{ $value['event_title'] }}</h3>
					<p>{!! html_entity_decode(substr(strip_tags($value['event_content']),0,40)) !!} [...]</p>
					<a class="read-more" href="/single-events/{{ str_slug($value['event_title']) }}">read more<i class="fa fa-angle-right"></i></a>
					<a class="read-more pull-right rsvp_link" href="#" data-type="meetup" data-id="{{ $value['event_id'] }}"   >Rsvp<i class="fa fa-angle-right"></i></a>
				</div>
			</div> 
		<?php } ?>
		</div>


				</div>
			</div>
		</div>
	</section>
	<!-- /#upcoming-event -->

	





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
	
	<script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>

          
          <script src="<?php echo URL::asset('/events_public/jquery.themepunch.tools.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/jquery.themepunch.revolution.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/countdown.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/jquery.easing.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/jquery.fancybox.pack.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/jquery.mixitup.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/jquery.bxslider.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/owl.carousel.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/jquery.appear.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/jquery.countTo.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/circle-progress.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/wow.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/validate.js') ?>"></script>
          <script src="<?php echo URL::asset('/events_public/custom.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/events.js') ?>"></script>





@stop


