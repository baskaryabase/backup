@extends('layouts.HeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')

<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/mentoringpage.css') ?>">  
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet"> 

<section>
<div class="container margin">
		<h2><span>Mentoring</span></h2>

   <div class="space">
	<center><p class="grey" style="font-size: 30px; font-style: italic; font-weight: 500;">Mentoring Startups</p></center>
    <div class="grey" style="font-size: 17px;">
    <p>Often times once you begin with the process of starting a startup, the deluge of details take over your thoughts and it becomes difficult to look at things with the same degree of clarity as you did when you started out. It helps to great deal to have an external perspective at such times in order to have greater clarity and to understand the big picture better.</p><br>

    <p>Many first time entrepreneurs also struggle with situations that they are faced with for the very first time in life. Be it the first business agreement that they are required to sign or the term sheet which they must evaluate or a business problem that they are faced with.</p><br>

    <p>We take a consultative approach where we help the entrepreneurs understand the repercussions of their actions and provide them perspective from the years of experience that we have accumulated over the years.</p><br>
    
    <p>We conduct one-on-one sessions every week as a part of the mentoring program for the startups. We have face to face or telephonic discussions with the startup founders and address the business challenges as well as the overall strategy that the company is pursuing Often this provides greater clarity to the entrepreneur to make their decisions.</p><br>

    <p>Apply, if you require mentoring support for your startup and we will get back to you to learn more about you.</p>
    </div>
   </div>



<h2 class="padd"><span>Contact Us</span></h2>

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



@stop   