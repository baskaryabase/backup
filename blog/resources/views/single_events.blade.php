  @extends('layouts.HeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')	
	
    <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/single_event.css') ?>">
	<link href="<?php echo URL::asset('/css/meetup_style.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

<?php
$date=date('jS F Y',strtotime($events['event_date']));
$time=$events['event_time'];
$events_cost_for_attending_paid=$events['event_cost'];
$events_venue=$events['event_venue'];
$the_content=$events['event_content'];


 ?>
	
<section class="full">
<div class="cont event_single">
	<div style="margin-top: 90px; margin-bottom: 25px;" class="col-md-9">
			
			<div style="background: #fff" class="col-md-12 col-sm-12">
				<div style="padding-top: 5px;" class="article-body">
				
				<h1 style="font-size: 25px; margin-top: 20px;">{{ $events['event_title'] }}</h1>
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
					<a href="#" class="show-more hvr-bounce-to-right">RSVP</a>
					</div>
			       
			       
			        	<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
			
<div class="group">
    <div class="item line"></div>
    <div class="item text">Event Speakers</div>
    <div class="item line"></div>
</div>

</div><!--end of article snippet-->
</div>

 <div><section style="padding-top: 0px;" id="event-speakers">
		<div class="container">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-lg-offset-0 col-md-offset-1 col-sm-offset-1">
					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container" data-wow-delay=".6s"><img src="http://wp1.themexlab.com/html/event_time/img/speakers/3.png" alt=""></div>
						</div>
						<div class="info text-left col-lg-6 col-md-7 col-sm-7">
							<h3>Rafifa Nodi</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul style="margin-left: -60px;" class="social">
								
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					
					<!-- /.single-speakers -->

					<!-- .single-speakers -->
				 
				</div>
				<div style="margin-bottom: -150px" class="col-md-8 col-sm-10 col-lg-offset-0 col-md-offset-1 col-sm-offset-1">
					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container" data-wow-delay=".6s"><img src="http://wp1.themexlab.com/html/event_time/img/speakers/3.png" alt=""></div>
						</div>
						<div class="info text-left col-lg-6 col-md-7 col-sm-7">
							<h3>Rafifa Nodi</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul style="margin-left: -60px;" class="social">
								
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					
					<!-- .single-speakers -->
					 
					
				</div>
			</div>
			
		</div>
		</div>
	</section></div>

</div>
<!-- end of 9 columns -->

<div style="margin-top: 75px;" class="col-md-3">
<div>
	<div style="height: 26px;
	     background-color: #f57f20;
	     color: #fff;text-align: center;
	     margin-top: 16px;
	     border-radius: 5px;">
	     <h5 style="font-size: 15px; 
	                padding-top: 4px;">Similar events<h5></div>
</div>
<a href="#">
<div class="sm-events" style="background: #fff;margin-top: 15px;">	
   <div class="sm-div">
   	<img src="<?php echo URL::asset('/image/ks/header.jpg') ?>">
   	<h4 style="font-size: 18px; font-weight: normal;" class="sm-head">sales for early stage startupss</h4>
   </div>
   <div>
   	<h6 style="color: black;padding-bottom: 8px;">12 apr 2017<span class="pull-right">9 am</span></h6>
   </div>
</div> 
</a>   

<a href="#">
<div class="sm-events" style="background: #fff;margin-top: 15px;">	
   <div class="sm-div">
   	<img src="<?php echo URL::asset('/image/ks/header.jpg') ?>">
   	<h4 style="font-size: 18px;font-weight: normal;" class="sm-head">sales for early stage startupss</h4>
   </div>
   <div>
   	<h6 style="color: black;padding-bottom: 8px;">12 apr 2017<span class="pull-right">9 am</span></h6>
   </div>
</div> 
</a>   

<a href="#">
<div class="sm-events" style="background: #fff;margin-top: 15px;">	
   <div class="sm-div">
   	<img src="<?php echo URL::asset('/image/ks/header.jpg') ?>">
   	<h4 style="font-size: 18px;font-weight: normal;" class="sm-head">sales for early stage startupss</h4>
   </div>
   <div>
   	<h6 style="color: black;padding-bottom: 8px;">12 apr 2017<span class="pull-right">9 am</span></h6>
   </div>
</div> 
</a>   

</div>


</div>
</section>