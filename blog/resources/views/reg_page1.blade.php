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
  <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/reg_page1.css') ?>">
  <link href="css/jquery.multiselect.css" rel="stylesheet" type="text/css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



<div class="container container-width">  
  <form id="contact" action="" method="post">
    <center><h4>Personal Details</h4></center>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Location" type="text" tabindex="2" required>
    </fieldset>

<fieldset>
    <select id="area-of-expertise" name="country" multiple class="form-control">
<option value="">Business Development</option>
<option value="AF">Marketing</option>
<option value="AL">Technical</option>
<option value="DZ">Product Management</option>
<option value="AS">Design</option>
<option value="AD">Operations</option>
<option value="AG">Programming</option>
<option value="AI">Sales</option>
<option value="AG">Growth</option>
<option value="AR">Fundraising</option>
<option value="AA">Finance</option>
<option value="AW">Strategy</option>
<option value="AU">User Experience</option>
<option value="AT">Public Relations</option>
<option value="AZ">Legal</option>
</select>
</fieldset>

<fieldset>
  <select id="personal-domain" name="country" multiple class="form-control" >
<option value="">Business Development</option>
<option value="AF">Marketing</option>
<option value="AL">Technical</option>
<option value="DZ">Product Management</option>
<option value="AS">Design</option>
<option value="AD">Operations</option>
<option value="AG">Programming</option>
<option value="AI">Sales</option>
<option value="AG">Growth</option>
<option value="AR">Fundraising</option>
<option value="AA">Finance</option>
<option value="AW">Strategy</option>
<option value="AU">User Experience</option>
<option value="AT">Public Relations</option>
<option value="AZ">Legal</option>
</select>
</fieldset>

    <fieldset>
       <center><div class="img-div">
         <img class="img-responsive img-size" src="<?php echo URL::asset('/image/default.png') ?>">
       </div>  </center>    

       <center>
       <button class="file-upload">              
        <input type="file" class="file-input">Choose File
       </button>
      </center> 
  

    </fieldset>
 
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>
<script src="js/jquery.multiselect.js"></script>
<script>
$('#area-of-expertise').multiselect({
    columns: 1,
    placeholder: 'Area Of Expertise'
});
$('#personal-domain').multiselect({
    columns: 1,
    placeholder: 'Persnal Domain'
});
</script>

@stop