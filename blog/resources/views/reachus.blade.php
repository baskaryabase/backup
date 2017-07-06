@extends('layouts.HeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')

<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/reachus.css') ?>">


<div class="container margin">

<div class="col-md-6 mar">
<h2><span class="grey">Contact Us</span></h2>

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


<div class="col-md-6 col-sm-6">
	<h1 class="grey" style="padding-top: 12px;">Headquarters</h1>
 <div style="font-size: 17px;">
    <p>Startups Club Services Pvt. Ltd.</p><br>

    <p>Registered Office: 610,3rd C Cross, 1st Stage, 2nd Block, 6th Main, HRBR Layout, Bangalore 560043</p><br>

    <p>Working From:Startups Club Services Pvt. Ltd. HQ - Classic House, #678, 2nd Floor, 17th Main, 6th A Cross, 3rd Block, Koramangala, Bangalore 560034, Karnataka, India</p><br>
</div>
    <div class="wpb_map_wraper">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1226.265652375716!2d77.62315078434541!3d12.92978354559892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae14598469e773%3A0xc4cb4a97ac6ce32a!2sStartups+Club!5e0!3m2!1sen!2sin!4v1492736622015" width="400" height="400" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>		
	</div>

</div>

</div>


@stop