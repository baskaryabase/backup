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

<link href="<?php echo URL::asset('/css/allknowledge_session.css') ?>" rel="stylesheet" type="text/css"> 

<div class="container margin">
<div class="">
		

<?php foreach ($ks as $key => $value) {

	$speaker_img=URL::asset('/image/speakers/'.$value['ks_speaker_img']);
 $random_img=URL::asset('/image/events-default/'.rand(1,21).'.jpg');
 ?>
		<div class="col-md-4 padd">
		<a href="/knowledge-session/{{ $value['ks_title_slug'] }}">
		<div class="thumbnail">
			
		     <div class="ks-div">
		     <img class="img-responsive ks-image" 
				 src="<?php echo $random_img; ?>" alt="">


	         <div class="opacity"></div>
			   
			   <div class="ks-title-div">
			 <h5 style="color: #fff" class="caption">{{ $value['ks_title'] }}</h5>
	         </div>
			 
				 <div>
				 <img 
				 src="{{ $speaker_img }}" 
				 class="ks-speaker">
				 </div>

				 </div>
				
             <div>
	           <h5 class="ks-date">{{ date('jS F Y',strtotime($value['ks_date'])) }}<span class="pull-right">{{ $value['ks_time'] }} Onwards</span>	</h5>
	         </div>
		      </div>
             </a>

		   </div>

<?php } ?>


	
 </div>
</div>



@stop