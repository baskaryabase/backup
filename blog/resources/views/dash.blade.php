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
	<section>
        <div class="col-md-3">

        	<a href="#"><h3>Add Knowledge Session</h3></a>
        </div>

<div class="col-md-9">

<h3>Upcoming Events</h3>
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
   
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      <td>
      <a href="#"><i class="fa fa-pencil color-black" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-trash pull-right red" aria-hidden="true"></i></a>
      </td>
     
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      <td>
      <a href="#"><i class="fa fa-pencil color-black" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-trash pull-right red" aria-hidden="true"></i></a>
      </td>
      
    </tr>
  </table>
</div>


<h3>Past Events</h3>
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
      <td>50</td>
   
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      <td>94</td>
     
      
    </tr>
    <tr>
      <td>Swapping Customers for Productive Growth – BLR</td>
      <td>23 Mar 2017</td>
      <td>9.00 AM</td>
      <td>94</td>
      
    </tr>
  </table>
</div>


</div>
	</section>
</div>

 @stop  