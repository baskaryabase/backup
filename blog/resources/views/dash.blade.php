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

   <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/dash.css') ?>">

<div class="container">
<div class="container" style="background: #fff">
<h3 class="heading"><span class="style-h1">Knowledge Session Dashboard</span></h3>
	<section>
        <div class="col-md-2" style="border-left: 1px solid #f57f20">

        	<a href="#"><h4 class="color color-black"><center>Add</center> </h4></a>
        </div>

<div class="col-md-10" style="border-left: 1px solid #f57f20">

<h4>Upcoming Sessions</h4>
<div style="overflow-x:auto;">
  <table class="color">
    <tr>
      <th>Title</th>
      <th>Date </th>
      <th>Time</th>
      <th>Action</th>
      
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Sep 2017</td>
      <td>10.00 AM</td>
      <td>
      <a href="#"><i class="fa fa-pencil color-black" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-trash pull-right red" aria-hidden="true"></i></a>
      </td>
      <td><a href="/dash-ksdetails" class="color-black">Details</a></td>
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      <td>
      <a href="#"><i class="fa fa-pencil color-black" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-trash pull-right red" aria-hidden="true"></i></a>
      </td>
      <td><a href="/dash-ksdetails" class="color-black">Details</a></td>
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      <td>
      <a href="#"><i class="fa fa-pencil color-black" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-trash pull-right red" aria-hidden="true"></i></a>
      </td>
      <td><a href="/dash-ksdetails" class="color-black">Details</a></td>
    </tr>
  </table>
</div>


<h4>Past Sessions</h4>
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
</div>

 @stop  