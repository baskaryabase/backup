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

   <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/dashevents.css') ?>">

<div class="container">
<h3 class="heading"><span class="style-h1">Premium Pioneer Member Events Dashboard</span></h3>
	<section>
        <div class="col-md-2" style="border-left: 1px solid #f57f20">

        	<a href="#"><h4 class="color-black color"><center>Events</center> </h4></a>
          <a href="#"><h4 class="color-black color"><center>Knowledge Sessions</center> </h4></a>
        </div>

<div class="col-md-10" style="border-left: 1px solid #f57f20">

<h4>Upcoming RSVP</h4>
<div style="overflow-x:auto;">
  <table class="color">
    <tr>
      <th>Title</th>
      <th>Date </th>
      <th>Time</th>
      
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Sep 2017</td>
      <td>10.00 AM</td>
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      
   </tr>
  </table>
</div>


<h4>Past RSVP</h4>
<div style="overflow-x:auto;">
  <table class="color">
    <tr>
      <th>Title</th>
      <th>Date </th>
      <th>Time</th>
      
      
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Sep 2017</td>
      <td>10.00 AM</td>
      
   
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      
     
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      
      
    </tr>
  </table>
</div>


</div>
	</section>
</div>

 @stop  