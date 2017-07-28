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
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/reg_page2.css') ?>">
<link href="css/jquery.multiselect.css" rel="stylesheet" type="text/css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container container-width">



  <form id="contact" action="" method="post">
    <center><h4>Company Details</h4></center>


<center>
  <div class="margin-tp-sm"><p>Do you have a startup?</p>
<span class="radio-inline">
 <label>
    <input name="form-field-radio" type="radio" class="inverted" value="yes" checked="">
    <span class="text">Yes</span>
 </label>
</span>
<span class="radio-inline">
<label>
   <input name="form-field-radio" type="radio" class="inverted" value="no">
   <span class="text">No</span>
</label>
</span>
</div>  
</center>

<div id="startup-detail">
    <fieldset>
      <input placeholder="Startups Name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <select 
      class="form-control" type="Number" 
      tabindex="2" required>
        <option>Startups Age</option>
        <option>less than 1 year</option>
        <option>2 years</option>
        <option>more than 2 year</option>
      </select>
    </fieldset>
    
    <fieldset>
      <input placeholder="Startups Web Site" type="url" tabindex="4" required>
    </fieldset>
    
    <fieldset>
      <select 
      class="form-control" type="Number" 
      tabindex="2" required>
        <option>Startup Type</option>
        <option>idea stage</option>
        <option>budding startup</option>
        <option></option>
      </select>
    </fieldset>


    <fieldset>
      <select 
      class="form-control" type="Number" 
      tabindex="2" required>
        <option>Startup Industry</option>
        <option>Advertising</option>
        <option>Aeronautics</option>
        <option>programming</option>
      </select>
    </fieldset>

    <fieldset>
      <textarea placeholder="Elevator Pitch" tabindex="5" required></textarea>
    </fieldset>


      <center><h4>Your Role</h4></center>

    <fieldset>
      <input placeholder="Your Designation" type="text" tabindex="3" required>
    </fieldset>

    
    <fieldset>
        <select id="purpose" multiple class="form-control" >
        <option>Mentoring</option>
        <option>Networking</option>
        <option>Technical</option>
        </select>
    </fieldset>
</div>    

<div id="no-startup">
  <fieldset>
      <select 
      class="form-control" type="Number" 
      tabindex="2" required>
        <option>Current Engagement</option>
        <option>Employed</option>
        <option>Looking For Oppurtunities</option>
        <option>Self Employed</option>
      </select>
    </fieldset>

    <fieldset>
      <input placeholder="Startups Name" type="text" tabindex="1" required>
    </fieldset>
    <center><h4>Your Role</h4></center>

    <fieldset>
      <input placeholder="Your Designation" type="text" tabindex="3" required>
    </fieldset>

    
    <fieldset>
      <select id="purpose" multiple class="form-control" >
        <option>Mentoring</option>
        <option>Networking</option>
        <option>Technical</option>
        </select>
    </fieldset>
</div>


    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>

<script src="js/jquery.multiselect.js"></script>

<script>
$('#purpose').multiselect({
    columns: 2,
    placeholder: 'Purpose of joining Startups club'
});
</script>


@stop