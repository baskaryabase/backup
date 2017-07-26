    
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

   <?php
/*echo '<pre>';
print_r($data);
echo '</pre>';
die;*/
$speaker_img=URL::asset('/image/speakers/header.jpg');
    ?>
<input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
 <link href="<?php echo URL::asset('/css/knowledge_session.css') ?>" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


 
<div style="margin-top: 65px;" class="container">


<div style="background: #fff;" class="margin col-md-9">  
<section id="event-details">
  
  <div class=" margin col-md-12">
    <div>
    <h5 style="font-weight: bold;" class="pull-right hidden-xs">Knowledge Session</h5>
    <li style="list-style: none; padding-top: 15px;"><h5>
      <i style="color: #f57f20; padding-right: 14px;" class="fa fa-calendar" aria-hidden="true"></i><span>9th June 2017</span><span><span>,  5:00 PM onwards</span></span></h5></li>

    <li style="list-style: none;"><h5><i style="color: #f57f20; padding-right: 14px;" class="fa fa-clock-o" aria-hidden="true"></i><span>3 Hour session</span></h5></li>
        <h1 style="font-size: 20px">RevUp Hyderabad:
How to Build and Run a Lean Startup?</h1>
    </div>
<div class="padd">
  <ul >
    <li style="list-style: none;"><h5><i style="color: #f57f20; padding-right: 18px;" class="fa fa-map-marker" aria-hidden="true"></i><span>Hyderabad,</span><span><br><span style="padding-left: 26px;"> THub, IIT-Hyderabad Campus</span></span>
  
    </h5></li>
  </ul>
</div>
<div>
  <h2 class="font-size-15"><span>Event Details</span></h2>
  <p>As a startup, staying lean and efficient is key, both for bootstrapped companies and funded companies. Being lean is a rigour, something that needs to be part of the company DNA right from the start. As part of such an effort startups have to constantly evaluate themselves both internally and externally, thus bringing out the best from the organisation and its resources. We bring to you, ‘RevUp Hyderabad - How to Build and Run a Lean Startup?’ an insightful session where startup founders and industry leaders talk about their own journeys driving business success while keeping checks on costs and spending.</p>
</div>

<center>
<div style="padding: 15px">
   <button type="button" class="btn btn-md rsvp paid_rsvp_link" href="https://razorpay.com/events/revup-hyderabad/" >Join Us / RSVP</button></div>
</center>    

</div>
</section>




<section id="Time">

<center><div class="timeline-style">
<h2 class="font-size-15"><span>Timeline</span></h2>
<!-- <h5 class="hh5"><span>Event Date<br></span><strong>12 August 2017</strong></h5> -->
<div class="timeline">

  <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00">5:30 pm</time>
    <p>Entry & Registrations Speaker: Harshil Mathur, CEO, Razorpay</p>
  </div>
    <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00">6:00 pm</time>
    <p> Secrets of being lean & efficient while focussing on growth Speaker: Mrityunjay Kumar, VP Products, Zenoti</p>
  </div>
    <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00">6:30 pm</time>
    <p> Fire side chat - getting the product right, the first time Speaker: Abhay Deshpande - Founder - Martjack & Board Member, Capillary</p>
  </div> 
   <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00">7:00 pm</time>
    <p> The art of survival</p>
  </div>
   <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00">7:30 pm</time>
    <p>Casual catch up over drinks</p>
  </div>
 
  
  
</div>
</div>
</center>
</section>  






    </div>






   
</div>

<section>







</section>





<script type="text/javascript" src="https://checkout.razorpay.com/v1/checkout.js?ver=1.1"></script><div class="razorpay-container" style="z-index: 1000000000; position: fixed; top: 0px; display: none; left: 0px; height: 100%; width: 100%; backface-visibility: hidden; overflow-y: visible;"><style>@keyframes rzp-rot{to{transform: rotate(360deg);}}@-webkit-keyframes rzp-rot{to{-webkit-transform: rotate(360deg);}}</style><div class="razorpay-backdrop" style="min-height: 100%; transition: 0.3s ease-out; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;"><span style="text-decoration: none; background: rgb(214, 68, 68); border: 1px dashed white; padding: 3px; opacity: 0; transform: rotate(45deg); transition: opacity 0.3s ease-in; font-family: lato, ubuntu, helvetica, sans-serif; color: white; position: absolute; width: 200px; text-align: center; right: -50px; top: 50px;">Test Mode</span></div><iframe class="razorpay-checkout-frame" style="height: 100%; position: relative; background: none; display: block; border: 0 none transparent; margin: 0px; padding: 0px;" allowtransparency="true" width="100%" height="100%" src="https://api.razorpay.com/v1/checkout/public"></iframe></div>

@stop