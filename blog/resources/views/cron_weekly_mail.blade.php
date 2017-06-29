 <style>
li img {
    border-radius: 50em;
    height: 45px;
    width: 45px;
    margin: 0 10px;
   
}
.custom_div{
	padding: 50px 0;
	background-color: #f8f8f8;
}
.custom_div h2{
	text-align: center;
}
.custom_notify{
    height:auto!important;
   /* height: 500px !important;*/
    width: 400px !important;
    /*overflow-y:scroll; */ 
   padding: 5px 0 0 0;
   display: block;
   margin: 0 auto;
}
.custom_notify_dp{
	display: inline-block;
}
.custom_post_info{
	display: inline-block;
}
.custom_notify .divider {
    height: 1px;
    /* margin: 9px 0; */
    margin: 0;
    overflow: hidden;
    background-color: #f57f20;
}
.custom_single_notify{

background-color: #e9eaed;
padding: 25px 0;
list-style-type: none;
display: block;
margin: 0;


}
li.custom_single_notify {
    padding: 25px 0;
}
.custom_seeall a {
    display: block;
    margin: 0 auto;
    text-align: center;
    background-color: #f57f20;
    padding: 5px 0;
    color: #fff;
}



   </style>


<?php  
if(!empty($details['posts'])){ ?>
<div class="custom_div">
  <h2>This is what happened last week</h2>
   	<h2>Posts</h2>
   <ul class="custom_notify">
<?php
 foreach ($details['posts'] as $key => $value) {

 ?>
 
 <li class="custom_single_notify">
 	<div class="custom_notify_dp">
 	<span class="chat-img">
<img src="{{ $value['sc_profile_pic'] }}" alt="User Avatar">
</span>
</div>
	<div class="custom_post_info">
<span>{{ $value['sc_fullname'] }}{{ ' shared the post ' }}</span><br> 
<span><small>{{ '"'.substr($value['post'],0,45).'..."' }}</small></span><br>
<span><small>{{ time_elapsed_string($value['posted_date']) }}</small></span><br>
	</div>
</a></li>
    <li role="presentation" class="divider"></li>
    
    <?php  } ?> </ul> </div> <?php } ?>









<?php
if(!empty($details['notification'])){ ?>
   <div class="custom_div">
   	<h2>Activity</h2>
   <ul class="custom_notify">
 <?php  

 foreach ($details['notification'] as $key => $value) {
 	foreach ($value as $ckey => $final_array) {  
if($ckey=='likes'){
	$flag_key='liked your Post';
}elseif($ckey=='comment'){
$flag_key='commented your Post';
}
elseif($ckey=='also_comment'){
$flag_key='also commented on the post';
}

if(count(array_column($final_array,'sc_fullname'))>1){
	$liked=array_column($final_array,'sc_fullname')[0].' and '.(count(array_column($final_array,'sc_fullname'))-1).' others';
}else{
	$liked=implode(',', array_column($final_array,'sc_fullname'));
}

 ?>
 
 <li class="custom_single_notify <?php if(array_column($final_array,'is_seen')[0]=='0'){ echo 'custom_back'; } ?>" role="presentation"><a role="menuitem" tabindex="-1" href="https://members.startupsclub.org/post/{{ $key }}">
 	<div class="custom_notify_dp">
 	<span class="chat-img">
<img src="{{ array_column($final_array,'sc_profile_pic')[0] }}" alt="User Avatar">
</span>
</div>
	<div class="custom_post_info">
<span>{{ $liked }} {{ $flag_key }}</span><br> 
<span><small>{{ '"'.substr(array_column($final_array,'post')[0],0,45).'..."' }}</small></span><br>
<span><small>{{ time_elapsed_string(array_column($final_array,'notified_date')[0]) }}</small></span><br>
	</div>
</a></li>
    <li role="presentation" class="divider"></li>
    
    <?php } } ?> </ul> </div> <?php } ?>