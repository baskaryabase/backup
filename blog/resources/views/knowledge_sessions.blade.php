   
  @extends('layouts.HeaderFooter')
      @section('title')
    <title>Events | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
   @section('content')

 <link href="<?php echo URL::asset('/css/knowledge_session.css') ?>" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div style="margin-top: 65px;" class="container">


<div style="background: #fff;" class="margin col-md-9">  
<section id="event-details">
  
  <div class=" margin col-md-12">
    <div>
    <li style="list-style: none; padding-top: 15px;"><h5><i style="color: #f57f20; padding-right: 14px;" class="fa fa-calendar" aria-hidden="true"></i><span>12 SEP  2017</span><span><span>,  10 am onwards</span></span></h5></li>
        <h1 style="font-size: 20px">Swapping Customers for Productive Growth – BLR</h1>
    </div>
<div class="padd">
  <ul >
    <li style="list-style: none;"><h5><i style="color: #f57f20; padding-right: 18px;" class="fa fa-map-marker" aria-hidden="true"></i><span>Coimbatore</span><span><span>,  City hall</span></span></h5></li>
  </ul>
</div>
<div>
  <h2 class="font-size-15"><span>Event Details</span></h2>
  <p>We have a monthly meetup where entrepreneurs both aspiring and established come together to meet one another. These events typically have a theme, which could be a speaker, a workshop or an entrepreneur sharing his/her experience.We have a monthly meetup where entrepreneurs both aspiring and established come together to meet one another.</p>
</div>

<center>
<div>
   <button type="button" class="btn btn-md rsvp" data-toggle="modal" data-target="#myModal">Join Us / RSVP</button></div>
</center>    

</div>
</section>




<section id="Time">

<center><div class="timeline-style">
<h2 class="font-size-15"><span>Timeline</span></h2>
<h5 class="hh5"><span>Event Date<br></span><strong>12 August 2017</strong></h5>
<div class="timeline">
  <div class="timeline-item">
    <time datetime="2016-02-03T15:00+08:00">3:00 PM</time>
    <p>Task C completed</p>
  </div>
  <div class="timeline-item">
    <time datetime="2016-02-03T11:30+08:00">11:30 AM</time>
    <p>Task B completed</p>
  </div>
  <div class="timeline-item">
    <time datetime="2016-02-03T09:45+08:00">9:45 AM</time>
    <p>Task A completed</p>
  </div>
  <div class="timeline-item">
    <time datetime="2016-02-03T09:45+08:00">9:45 AM</time>
    <p>Task A completed</p>
  </div>
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
            <img  src="<?php echo URL::asset('/image/ks/header.jpg') ?>" alt="speaker image" class="img-responsive ks-speaker-size">
          </div>
        </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="speaker-content">
              <h4>John dissilva</h4>
              <span ><strong>Manager</strong></span><br>
                <span style="font-style: italic;">company name</span>
              
              <p>very good skilled person with lot of stuffs filled in and woreking as tech head in product developement in a reputed company</p>
              <ul style="margin-left: -40px;" class="speaker-social">
                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              </ul>

            </div>
          </div>
        </div>


<div class="">
  <div class="row col-list">
    <div class="col-md-6 t1">
      <div class="col-head text-center">
        
        <h3>Awards</h3>
      </div>
      <ul class="list-unstyled">
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #1 #1</p>
           </li>
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #1 #2</p>
           </li>
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #1 #3</p>
           </li>
      </ul>
    </div>
    <div class="col-md-6 t2">
      <div class="col-head text-center">
        
        <h3>Recognitions</h3>
      </div>
      <ul class="list-unstyled">
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #2 #1</p>
           </li>
           <li>
            <p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>Option #2 #2</p>
           </li>
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
   <h5 style="border-bottom: 3px solid #f57f20; font-size: 14px;">Similar Posts</h5>
</div>
<div style="margin-bottom: 15px;" class="col-md-3 pull-right">

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

<div style="margin-bottom: 25px;"  class="col-md-3 pull-right">

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

<div  class="col-md-3 pull-right">

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
</section>



   
</div>

<section>






 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">RSVP registration</h4>
        </div>
        <div class="modal-body">
          <div>
 
<h1>JOIN US!! </h1>
<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Seats</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <div class="product">
    <div class="product-image">
      <img src="<?php echo URL::asset('/image/ks/header.jpg') ?>">
    </div>
    <div class="product-details">
      <div class="product-title">Swapping Customers for Productive Growth – BLR</div>
      <p class="product-description"></p>
    </div>
    <div class="product-price">5000</div>
    <div class="product-quantity">
      <input type="number" value="1" min="1">
    </div>
   
    <div class="product-line-price">5000</div>
  </div>



<div  class="i container">  
  <form id="contact" action="" method="post">
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="City" type="text" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="company name" type="url" tabindex="4" required>
 
 </fieldset>
        
  <div class="totals">
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">5000</div>
    </div>
  </div>      


<fieldset>
     <button style="color: #fff" name="submit" type="submit" id="contact-submit" data-submit="...Sending">RSVP</button>
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

@stop