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

   <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/member_dashboard.css') ?>">

<div class="container margin">
<div class="row color">
<h3 class="heading"><span class="style-h1">Premium Pioneer Member Events Dashboard</span></h3>
  <section>
        <div class="col-md-2" style="border-left: 1px solid #f57f2row 0">

          <a href="/member-dashboard"><h4 class="color-black color"><center>Events</center> </h4></a>
          <a href="#"><h4 class="color-black color"><center>Knowledge Sessions</center> </h4></a>
          <a href="/ks-dashboard"><h4 class="color-black color"><center>Organize Knowledge Sessions</center> </h4></a>
        </div>

<div class="col-md-10" style="border-left: 1px solid #f57f20">

<h4>Upcoming RSVP</h4>
<div style="overflow-x:auto;">
  <?php if(isset($events['up'])){ ?>
  <table class="color">
    <tr>
      <th>Title</th>
      <th>Date </th>
      <th>Time</th>
      <th>Location</th>
      
    </tr>
    <?php
    foreach ($events['up'] as $key => $value) {

     ?>
    <tr>
      <td>{{ $value['event_title'] }}</td>
      <td>{{ date('jS F Y',strtotime($value['event_date'])) }}</td>
      <td>{{ $value['event_time'] }}</td>
      <td>{{ $value['event_venue'] }}</td>
    </tr>
    <?php  } ?>

  </table>
   <?php }else{ ?>

<h4>No Events</h4>
<?php  } ?>
</div>


<h4>Past RSVP</h4>
<div style="overflow-x:auto;">
    <?php if(isset($events['past'])){ ?>
  <table class="color">
    <tr>
      <th>Title</th>
      <th>Date </th>
      <th>Time</th>
      <th>Location</th>
      
      
      
    </tr>
    <?php
    foreach ($events['past'] as $key => $value) {

     ?>
    <tr>
      <td>{{ $value['event_title'] }}</td>
      <td>{{ date('jS F Y',strtotime($value['event_date'])) }}</td>
      <td>{{ $value['event_time'] }}</td>
      <td>{{ $value['event_venue'] }}</td>
    </tr>
    <?php  } ?>


  </table>
  <?php }else{ ?>

<h3>No Events</h3>
<?php  } ?>
</div>


</div>
  </section>
</div>
</div>
 @stop  