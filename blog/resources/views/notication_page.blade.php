@extends('layouts.notificationMaster')
    @section('title')
    <title>Notification | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
@include('layouts.footer')
  @section('footer')
  @stop
   @section('content')
<?php
/*echo '<pre>';
print_r($details);
echo '</pre>';
die;*/
 ?>
<input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">

    <!-- Begin page content -->
      <div class="container page-content custom_popup_content ">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-inside-lg decor-default activities animated fadeInUp" id="activities">
                <h6>Notification</h6>
  <?php 
  if(!empty($details)){
    foreach ($details as $key => $value) {
  

foreach ($value as $ckey => $cvalue) {  


  if(count(array_column($cvalue,'sc_fullname'))>1){
    $liked=array_column($cvalue,'sc_fullname')[0].' and '.(count(array_column($cvalue,'sc_fullname'))-1).' others';
}else{
    $liked=implode(',', array_column($cvalue,'sc_fullname'));
}

if($ckey=='likes'){
  $flag_key='liked your Post';
}elseif($ckey=='comment'){
$flag_key='commented your Post';
}
elseif($ckey=='also_comment'){
$flag_key='also commented on the post';
}

  ?>

<a href="/post/{{ $key }}">
  <div class="unit <?php if(array_column($cvalue,'is_seen')[0]=='0'){ echo 'custom_back'; } ?>">
                    <a class="avatar" href="#"><img src="{{ array_column($cvalue,'sc_profile_pic')[0] }}" class="img-responsive" alt="profile"></a>
                    <a href="/post/{{ $key }}"><div class="field title">
                        {{ $liked }} {{ $flag_key }} {{ '"'.substr(array_column($cvalue,'post')[0],0,70).'..."' }}
                    </div>
                    <div class="field date">
                       
                        <span class="f-r">{{ time_elapsed_string(array_column($cvalue,'notified_date')[0]) }}</span>
                    </div></a>
                </div>
</a>
  <?php }
  ?>







            <?php } }else{ ?>
              <div>No Notification</div>
         <?php   } ?>
            </div>
        </div>
      </div>
    </div>

     @stop