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
     <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">

<div class="container margin">
<div class="row color">
<h3 class="heading"><span class="style-h1">Knowledge Session Dashboard</span></h3>
  <section>
        <div class="col-md-2" style="border-left: 1px solid #f57f20">

          <a href="/add-knowledge-session"><h4 class="color color-black"><center>Add</center> </h4></a>
        </div>

<div class="col-md-10" style="border-left: 1px solid #f57f20">

<h4>Upcoming Sessions</h4>
<div style="overflow-x:auto;">
    <?php if(isset($ks['up'])){ ?>
  <table class="color">
    <tr>
      <th>Title</th>
      <th>Date </th>
      <th>Time</th>
      <th>Venue</th>
      <th>Action</th>
      
      
    </tr>
    <?php foreach ($ks['up'] as $key => $value) {
  ?>
    <tr>
      <td>{{ $value['ks_title'] }}</td>
        <td>{{ date('jS F Y',strtotime($value['ks_date'])) }}</td>
      <td>{{ $value['ks_time'] }}</td>
      <td>{{ $value['ks_venue'] }}</td>
      <td>
      <a href="/edit-ks/{{ $value['ks_title_slug'] }}"><i class="fa fa-pencil color-black" aria-hidden="true"></i></a>
      <a href="#" data-ks="{{ $value['ks_id'] }}" onclick="delete_ks(this)"><i class="fa fa-trash pull-right red" aria-hidden="true"></i></a>
      </td>
      <td><a href="/ks-details/{{ $value['ks_id'] }}" class="color-black">Details</a></td>
      
    </tr>
    <?php } ?>

  </table>
  <?php }else{ ?>

<h4>No Events</h4>
<?php  } ?>
</div>


<h4>Past Sessions</h4>
<div style="overflow-x:auto;">
      <?php if(isset($ks['past'])){ ?>

  <table class="color">
    <tr>
      <th>Title</th>
      <th>Date </th>
      <th>Time</th>
      <th>Venue</th>
      
      
      
    </tr>
        <?php foreach ($ks['past'] as $key => $value) {
  ?>
    <tr>
      <td>{{ $value['ks_title'] }}</td>
        <td>{{ date('jS F Y',strtotime($value['ks_date'])) }}</td>
      <td>{{ $value['ks_time'] }}</td>
      <td>{{ $value['ks_venue'] }}</td>
 
      
    </tr>
    <?php } ?>
  </table>
  <?php }else{ ?>

<h4>No Events</h4>
<?php  } ?>
</div>


</div>
  </section>
</div>
</div>
     <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/ks.js') ?>"></script>
           @stop  