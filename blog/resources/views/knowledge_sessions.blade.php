    
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
$speaker_img=URL::asset('/image/speakers/'.$data['ks']['ks_speaker_img']);
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
      <i style="color: #f57f20; padding-right: 14px;" class="fa fa-calendar" aria-hidden="true"></i><span>{{ date('jS F Y',strtotime($data['ks']['ks_date'])) }}</span><span><span>,  {{ $data['ks']['ks_time'] }} onwards</span></span></h5></li>

    <li style="list-style: none;"><h5><i style="color: #f57f20; padding-right: 14px;" class="fa fa-clock-o" aria-hidden="true"></i><span>{{ $data['ks']['ks_duration'] }}</span></h5></li>
        <h1 style="font-size: 20px">{{ $data['ks']['ks_title'] }}</h1>
    </div>
<div class="padd">
  <ul >
    <li style="list-style: none;"><h5><i style="color: #f57f20; padding-right: 18px;" class="fa fa-map-marker" aria-hidden="true"></i><span>{{ $data['ks']['ks_city'] }},</span><span><br><span style="padding-left: 26px;"> {{ $data['ks']['ks_venue'] }}</span></span>
    <span class="pull-right" >₹ {{ $data['ks']['ks_cost'] }} / seat</span> 
    </h5></li>
  </ul>
</div>
<div>
  <h2 class="font-size-15"><span>Event Details</span></h2>
  <p>{!! html_entity_decode($data['ks']['ks_event_details']) !!}</p>
</div>

<center>
<div style="padding: 15px">
   <button type="button" class="btn btn-md rsvp paid_rsvp_link" href="#" data-type="ks" data-id="{{ $data['ks']['ks_id'] }}" data-cost="{{$data['ks']['ks_cost'] }}" >Join Us / RSVP</button></div>
</center>    

</div>
</section>




<section id="Time">

<center><div class="timeline-style">
<h2 class="font-size-15"><span>Timeline</span></h2>
<!-- <h5 class="hh5"><span>Event Date<br></span><strong>12 August 2017</strong></h5> -->
<div class="timeline">
  <?php foreach ($data['metas']['timeline'] as $key => $value) {
?>
  <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00">{{ $value['meta_data'] }}</time>
    <p>{{ $value['meta_extra'] }}</p>
  </div>

  <?php } ?>
  
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
            <img  src="{{ $speaker_img }}" alt="speaker image" class="img-responsive ks-speaker-size">
          </div>
        </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="speaker-content">
              <h4>{{ $data['ks']['ks_speaker_name'] }}</h4>
              <span ><strong>{{ $data['ks']['ks_speaker_desn'] }}</strong></span><br>
                <span style="font-style: italic;">{{ $data['ks']['ks_speaker_company'] }}</span>
              
              <p>{{ $data['ks']['ks_speaker_bio'] }}</p>
              <ul style="margin-left: -40px;" class="speaker-social">
                <li><a href="{{ $data['ks']['ks_speaker_linkedin'] }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="{{ $data['ks']['ks_speaker_twitter'] }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
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
          <?php foreach ($data['metas']['awards'] as $key => $value) {
?>
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>{{ $value['meta_data'] }}</p>
           </li>
          <?php } ?>
      </ul>
    </div>
    <div class="col-md-6 t2">
      <div class="col-head text-center">
        
        <h3 style="padding-top: 5px;font-size: 20px">Recognitions</h3>
      </div>
      <ul class="list-unstyled">
        <?php foreach ($data['metas']['recognitions'] as $key => $value) {
?>
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>{{ $value['meta_data'] }}</p>
           </li>
       <?php } ?>
      </ul>
    </div>
  
</div>
</div>


    </section>
    </div>


<section>

<div style="padding-top: 18px; 
            
            padding-right: 15px;
            padding-left: 15px;" class="col-md-3">
            
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

<?php foreach ($data['similar'] as $key => $value) {
?>

<div style="margin-bottom: 15px;margin-top: 15px;" class="col-md-3 pull-right">

 <div class="event">
  <div class="table">
  <div class="row">
     <div class="col date-short" <?php echo (strtotime($value['ks_date'])>strtotime('now'))?'style="background-color:#8ec33f"':'style="background-color:#000"' ?> >
       <div class="month">{{ strtoupper(substr(date('F', strtotime($value['ks_date'])),0,3))  }}</div> 
       <div class="day">{{ date('d', strtotime($value['ks_date'])) }}</div> 
     </div>
     <div class="col event-details">
       <div class="event-name">{{ $value['ks_title'] }}</div>
       <div class="date-long">{{ date('l', strtotime($value['ks_date'])) }}, {{ date('F d', strtotime($value['ks_date'])) }}, {{ $value['ks_time'] }}</div>
       <div class="location">{{ $value['ks_city'] }}</div>
       <a href="#"><div class="registration paid_rsvp_link" data-type="ks" data-id="{{ $value['ks_id'] }}" data-cost="{{ $value['ks_cost'] }}">RSVP</div></a> 
     </div>
    <div class="col right-col"></div>
  </div>
  </div>
</div>

</div>   

 <?php } ?>


</div>   
</section>



   
</div>

<section>





<!-- popup -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registration Form</h4>
        </div>
        <div class="modal-body">
          <div>
 
<!-- <h1>JOIN US!! </h1> -->
<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Seats</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price"></label>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="<?php echo URL::asset('/image/ks/header.jpg') ?>">
    </div>
    <div class="product-details">
      <div class="product-title">Swapping Customers for Productive Growth – BLR</div>
      <p class="product-description"></p>
    </div>
    <div class="product-price">{{ $data['ks']['ks_cost'] }}</div>
    <div class="product-quantity">
      <input type="number" id="ticket_count" value="1" min="1">
    </div>
   
    <div class="product-line-price">{{ $data['ks']['ks_cost'] }}</div>
  </div>



<div  class="i container">  
  <form id="contact" action="" method="post">
    <fieldset>
      <input placeholder="Name" id="attendees_name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Email Address" id="attendees_email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Phone Number" id="attendees_mobile" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="City" type="text" id="attendees_city" tabindex="4" required>
    </fieldset>
    <fieldset>
<div class="form-group">
       
            <select class="form-control" id="attendees_status">
  <option selected>Current status</option>
  <option>Aspiring entrepreneur</option>
  <option>Budding entrepreneur</option>
  <option>Established  entrepreneur</option>

</select>
            
             
            </div> 
 </fieldset>
        
  <div class="totals">
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">{{ $data['ks']['ks_cost'] }}</div>
    </div>
  </div>      


<fieldset>
     <button style="color: #fff" name="submit" type="button" id="register_paid_rsvp" data-submit="...Sending">Register</button>
    </fieldset>
  </form>
</div>


</div>




</div>
        </div>
        
      </div>
      
    </div>
  </div>

</section>




<script type="text/javascript">


var taxRate = 0;
var shippingRate = 0; 
var fadeTime = 0;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}

function div_show() {
document.getElementById('abc').style.display = "block";
}

// $('body').click(function() {
//    $('#abc').hide();
// });
</script>
<script type="text/javascript" src="https://checkout.razorpay.com/v1/checkout.js?ver=1.1"></script><div class="razorpay-container" style="z-index: 1000000000; position: fixed; top: 0px; display: none; left: 0px; height: 100%; width: 100%; backface-visibility: hidden; overflow-y: visible;"><style>@keyframes rzp-rot{to{transform: rotate(360deg);}}@-webkit-keyframes rzp-rot{to{-webkit-transform: rotate(360deg);}}</style><div class="razorpay-backdrop" style="min-height: 100%; transition: 0.3s ease-out; position: fixed; top: 0px; left: 0px; width: 100%; height: 100%;"><span style="text-decoration: none; background: rgb(214, 68, 68); border: 1px dashed white; padding: 3px; opacity: 0; transform: rotate(45deg); transition: opacity 0.3s ease-in; font-family: lato, ubuntu, helvetica, sans-serif; color: white; position: absolute; width: 200px; text-align: center; right: -50px; top: 50px;">Test Mode</span></div><iframe class="razorpay-checkout-frame" style="height: 100%; position: relative; background: none; display: block; border: 0 none transparent; margin: 0px; padding: 0px;" allowtransparency="true" width="100%" height="100%" src="https://api.razorpay.com/v1/checkout/public"></iframe></div>

@stop