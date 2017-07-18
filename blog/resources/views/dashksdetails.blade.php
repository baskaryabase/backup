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

   <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/dashksdetails.css') ?>">

<div class="container">
<h3 class="heading"><span class="style-h1">Knowledge Session Dashboard</span></h3>
	<section>
        <div class="col-md-2" style="border-left: 1px solid #f57f20">

        	<a href="/dash"><h4 class="color color-black"><center>Back</center> </h4></a>
        </div>

<div class="col-md-10" style="border-left: 1px solid #f57f20">

<h4>No. of people regitered for session</h4>
<div style="overflow-x:auto;">
  <table class="color">
    <tr>
      <th>SNO</th>
      <th>Name</th>
      <th>Email </th>
      <th>Phone Number</th>
      
      
      
    </tr>
    <tr>
    <td>1</td>
      <td>Baskar</td>
      <td>baymax1298@gmail.com</td>
      <td>7708538106</td>
      
    </tr>
    <tr>
    <td>2</td>
      <td>Baskar</td>
      <td>baymax1298@gmail.com</td>
      <td>7708538106</td>
      
    </tr>
  </table>
</div>


	</section>
</div>

 @stop  