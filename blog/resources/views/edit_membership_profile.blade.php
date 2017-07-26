
 @extends('layouts.PlainHeaderFooter')
          @section('title')
    <title>Edit Profile | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
@include('layouts.footer')
  @section('footer')
  @stop
   @section('content')
   @foreach ($errors->all() as $error)
                 <div class='bg-danger alert'>{{ $error }}</div>
             @endforeach
             <fieldset class="form-section">

<!-- <h3 class="fs-subtitle">We will never sell it</h3> -->
<div class="row row-eq-height" >

 <label class="col-md-4 col-md-offset-2" style="padding-left:15px" align="center" style="margin: 2% 0% 1% 0%">

      <div class="pio" style="border:2px solid green;background-color: white">
         <div  class=" cus_rdcont" style=" height : 280px ">
         <div style="border-bottom: 2px solid black;margin:0px ">
            <h5 class="fs-title align-center " style="box-shadow: 1px;text-align: center;"><b>PIONEER MEMBER</b></h5>
         </div>
        <ul style="margin-left: 4.5%;text-align: left;font-size: 1.2em ;padding:2% ;margin: 5% ">
        <li>Access to All members.</li>
        <li>Access to Honorary Pioneer members.</li>
        <li>Access to Pioneer members.</li>
        <li>Direct Messaging to all members.</li>
        <li>Filtered Search of all members.</li>
        <li>Full platform access.</li>
        <li>Access to Pioneer Whatsapp group.</li>
        <li>Access to Exclusive Pioneer Meets.</li>
        </ul>
</div>

       <div style="margin-top: 5px;background-color:orange;padding:2%;font-size: 20px;color:white; text-align: center"><i style="font-size:25px" class="fa fa-inr" aria-hidden="true"> <b> 4000 </b></i></div>

      </div>
    </label>
     <label class="col-md-4"  >

      <div class="pio" style="border:2px solid orange;background-color: white">
         <div  class=" cus_rdcont" >
         <div style="border-bottom: 2px solid black;margin:0px ">
            <h5 class="fs-title align-center " style="box-shadow: 1px;text-align: center;"><b>PREMIUM PIONEER</b></h5>
         </div>
        <ul style="margin-left: 4.5%;text-align: left;font-size: 1.2em ;padding:2% ;margin: 5% ">
        <li>Access to All members.</li>
        <li>Access to Honorary Pioneer members.</li>
        <li>Access to Pioneer members.</li>
        <li>Direct Messaging to all members.</li>
        <li>Filtered Search of all members.</li>
        <li>Full platform access.</li>
        <li>Access to Pioneer Whatsapp group.</li>
        <li>Access to Exclusive Pioneer Meets.</li>
        <li>Organize Knowledge Sessions.</li>
        </ul>
</div>

       <div style="margin-top: 5px;background-color:orange;padding:2%;font-size: 20px;color:white; text-align: center"><i style="font-size:25px" class="fa fa-inr" aria-hidden="true"> <b> 25000 </b></i></div>

      </div>
    </label>

</div>
<!-- <input type="button" name="submit" id="become_pioneer" class="btn btn-lg align-center " style="background-color:#ff7d0f;color:white;padding: 1%;font-size: 18px;clear:both;margin:2% 9% 0% 8%;font-style:bold;border: 2px solid white;border-radius:5px  " value="Become a pioneer member"  />
 -->
</fieldset>






    @stop