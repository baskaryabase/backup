 <?php  
if(!empty($details)){
 foreach ($details as $key => $value) {
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
 <li class="custom_single_notify <?php if(array_column($final_array,'is_seen')[0]=='0'){ echo 'custom_back'; } ?>" role="presentation"><a role="menuitem" tabindex="-1" href="/post/{{ $key }}">
 	<div class="custom_notify_dp">
 	<span class="chat-img">
<img src="{{ array_column($final_array,'sc_profile_pic')[0] }}" alt="User Avatar">
</span>
</div>
	<div class="custom_post_info">
<span>{{ $liked }} {{ $flag_key }}</span><br> 
<span><small>{{ '"'.substr(array_column($final_array,'post')[0],0,45).'..."' }}</small></span><br>
<span><small>{{ time_elapsed_string(array_column($final_array,'notified_date')[0]) }}</small></span><br>
	<div>
</a></li>
    <li role="presentation" class="divider"></li>
    
    <?php } } }else{ ?> 
<li class="custom_no_notification">No Notifications</li>
    <?php } ?>
    <li class="custom_seeall"><a href="/notification">See all</a></li>