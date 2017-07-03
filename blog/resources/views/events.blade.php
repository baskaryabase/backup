
	

	
  @extends('layouts.HeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')

	<link rel="stylesheet" type="text/css" href="css/events_style.css">



	
	<!-- #upcoming-event -->
	<section id="upcoming-event">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-7">
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
		<div  class="tab-content-wrap row row-eq-height">
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
					<a class="read-more pull-right" href="#"  data-toggle="modal" data-target="#myModal"  >Rsvp<i class="fa fa-angle-right"></i></a>
				</div>
			</div> 
		<?php } ?>
		</div>


				</div>
			</div>
		</div>
	</section>
	<!-- /#upcoming-event -->

	


	<!-- #event-speakers -->
	<section id="event-speakers">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h1>EVENT SPEAKERS</h1>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <br> been the industry's standard dummy text ever since the 1500</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-8 col-sm-8 col-lg-offset-0 col-md-offset-1 col-sm-offset-1">
					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="info text-right col-lg-6 col-md-7 col-sm-7">
							<h3>Masum Rana</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container"><img src="http://wp1.themexlab.com/html/event_time/img/speakers/1.png" alt=""></div>
						</div>
					</div>
					<!-- /.single-speakers -->

					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="info text-right col-lg-6 col-md-7 col-sm-7">
							<h3>Muhibbur Rashid</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container"><img src="http://wp1.themexlab.com/html/event_time/img/speakers/2.png" alt=""></div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 col-sm-10 col-lg-offset-0 col-md-offset-1 col-sm-offset-1">
					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container" data-wow-delay=".6s"><img src="http://wp1.themexlab.com/html/event_time/img/speakers/3.png" alt=""></div>
						</div>
						<div class="info text-left col-lg-6 col-md-7 col-sm-7">
							<h3>Rafifa Nodi</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /.single-speakers -->

					<!-- .single-speakers -->
					<div class="single-speakers row">
						<div class="img-holder text-center col-lg-6 col-md-5 col-sm-5">
							<div class="img-container"><img src="http://wp1.themexlab.com/html/event_time/img/speakers/4.png" alt=""></div>
						</div>
						<div class="info text-left col-lg-6 col-md-7 col-sm-7">
							<h3>Rashed Kabir</h3>
							<span class="position">UI/UX Designer</span>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /.single-speakers -->
				</div>
			</div>
			<div class="row text-center">
				<a href="#" class="show-more hvr-bounce-to-right">SEE MORE</a>
			</div>
		</div>
	</section>

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


