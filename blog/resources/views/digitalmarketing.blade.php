@extends('layouts.HeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')

<link rel="stylesheet" type="text/css" 
href="<?php echo URL::asset('/css/digitalmarketing.css') ?>">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>   
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">


<section>
	<div class="container margin">
	  <div class="col-md-6 border-bottom">
	  	<img src="<?php echo URL::asset('/image/digitalmarketing/virtual_footprint.jpg') ?>">
	  </div>

      <div class="col-md-6">
      	<center><h3 class="grey">Virtual Footprints</h3></center>
<div class="grey" style="font-size: 17px;">
      	<p>Have a great website but no search engine presence or traffic? Is your social media  in need of more vibrancy? Does your product need branding? Or maybe you want to understand how to measure the return on investment?</p><br>

      	<p>Our digital marketing experts are here to solve all your problems. At Virtual Footprints we believe in creating customized strategies for you. With our time-bound approach, we ensure that your business enjoys the best marketing !</p><br>

      	<p>If your business needs this thrust of digital excitement from a partner who understands your budget and your challenges, we are your bae. Reach out at siddharth@startupsclub.org . Lets make magic.</p><br>
</div>
      	<center><h3 class="grey">Our Digital Marketing  Services</h3></center>
<div class="grey" style="font-size: 17px;">
	 
	   
       <p>-Social Media Marketing : Unleash the creative genius and deliver stunning social media campaigns which gets your audience talking about your business.</p><br>

       <p>- SEO & SEO: Get your website to be the best version of itself with our search engine optimization and search engine marketing strategies.</p><br>

       <p>-Logo designing & Branding: Get that phenomenal logo and brand name you always wanted your product to represent.</p><br>

       <p>-Product shoot & Video shoot : Be it for a catalogue shoot or a pre launch product shoot, we will give you the portfolio of your dreams.</p><br>

       <p>-Analytics & Reporting: ‘If you can’t measure it, you can’t manage it.’  Measure how the numbers work for your online promotions and manage your digital marketing with our strategies.</p><br>

       <p>Good to know us? We’d like to know you too 🙂 . Call us at -9880775737</p><br>

       <p>Our Fb page:<br> https://www.facebook.com/startupsclubdm/
       </p>  
</div>

      	
      </div>



	</div>
</section>

<section>

  
      <div class="container">
        <div class="row">
            <div class="span12">
                <div class="well">
                    <div id="myCarousel" class="carousel fdi-Carousel slide">
                     <!-- Carousel items -->
                        <div class="carousel fdi-Carousel slide" id="eventCarousel" data-interval="0">
                            <div class="carousel-inner onebyone-carosel">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="#"><img src="<?php echo URL::asset('/image/digitalmarketing/1.png') ?>" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="#"><img src="<?php echo URL::asset('/image/digitalmarketing/2.png') ?>" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="#"><img src="<?php echo URL::asset('/image/digitalmarketing/3.png') ?>" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="#"><img src="<?php echo URL::asset('/image/digitalmarketing/4.png') ?>" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="#"><img src="<?php echo URL::asset('/image/digitalmarketing/5.png') ?>" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="#"><img src="<?php echo URL::asset('/image/digitalmarketing/6.png') ?>" class="img-responsive center-block"></a>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                            <a style="background:transparent;" class="left carousel-control" href="#eventCarousel" data-slide="prev"></a>
                            <a style="background:transparent;" class="right carousel-control" href="#eventCarousel" data-slide="next"></a>
                        </div>
                        <!--/carousel-inner-->
                    </div><!--/myCarousel-->
                </div><!--/well-->
            </div>
        </div>
    </div>

</section>


<section id="form">
<div class="container">

<h2><span>Contact Us</span></h2>

<div class="inner contact">
                <!-- Form Area -->
                <div class="contact-form">
                    <!-- Form -->
                    <form id="contact-us" method="post" action="#">
                        <!-- Left Inputs -->
                        <div class="col-md-6 col-sm-6 wow animated slideInLeft" data-wow-delay=".5s">
                            <!-- Name -->
                            <input type="text" name="name" id="name" required="required" class="form" placeholder="Name" />
                            <!-- Email -->
                            <input type="email" name="mail" id="mail" required="required" class="form" placeholder="Email" />
                            <!-- Subject -->
                            <input type="numbersn" name="phone" id="subject" required="required" class="form" placeholder="Phone Number" />
                        </div><!-- End Left Inputs -->
                        <!-- Right Inputs -->
                        <div class="col-md-6 col-sm-6 wow animated slideInRight" data-wow-delay=".5s">
            <input type="text" name="startupsname" id="subject" required="required" class="form" placeholder="Startups Name" />               
                            <!-- Message -->
                            <textarea name="message" id="message" class="form textarea"  placeholder="Message"></textarea>
                        </div><!-- End Right Inputs -->
                        <!-- Bottom Submit -->
                        <div class="relative fullwidth col-xs-12">
                            <!-- Send Button -->
                            <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button> 
                        </div><!-- End Bottom Submit -->
                        <!-- Clear -->
                        <div class="clear"></div>
                    </form>

                    <!-- Your Mail Message -->
                    <div class="mail-message-area">
                        <!-- Message -->
                        <div class="alert gray-bg mail-message not-visible-message">
                            <strong>Thank You !</strong> Your email has been delivered.
                        </div>
                    </div>

                </div><!-- End Contact Form Area -->
            </div><!-- End Inner -->



</div>
</section>



<script type="text/javascript">
	$(document).ready(function () {
    $('#myCarousel').carousel({
        interval: 5000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
</script>

@stop