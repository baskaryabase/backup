       @extends('layouts.notificationMaster')
           @section('title')
    <title>Post | Member Platform | Startups Club</title> 
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
    <!-- Begin page content -->
    <div class="container page-content">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="row">
            <div class="profile-nav col-md-4">
              <div class="panel">
                  <div class="user-heading round">
                      <a href="/profile/<?php echo session()->get('unique_name'); ?>">
                          <img src="{{ session()->get('profile_pic') }}" alt="">
                      </a>
                      <h1>{{ session()->get('full_name') }}</h1>
                      <p>@<?php echo session()->get('unique_name') ?></p>
                  </div>

                  <ul class="nav nav-pills nav-stacked">
                      <li class="active"><a href="/profile/<?php echo session()->get('unique_name'); ?>"> <i class="fa fa-user"></i> Profile</a></li>
                  </ul>
              </div>
            </div>
            <div class="profile-info col-md-8">
              <!--   posts -->
                                   <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">

                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="<?php echo $details['post']['sc_profile_pic']; ?>" alt="User Image">
                        <span class="username"><a href="<?php echo '/profile/'.$details['post']['sc_unique_name'] ?>">{{ $details['post']['sc_fullname'] }}</a> <?php if($details['post']['role'] != 'regular'){ ?><img data-toggle="tooltip" title="{{ get_title($details['post']['role']) }}" class="badge_logo" src="{{ get_logo($details['post']['role']) }}" alt="User Image"><?php } ?><?php if($details['post']['post_author'] == session()->get('userid')){ ?>
                          <a class="pull-right"  >
                          <div class="dropdown">
    <div  type="button dropdown-toggle" class="btn-lg" data-toggle="dropdown">

   <span class="caret" style="cursor:pointer;"></span></div>

   <ul class="dropdown-menu dropdown-menu-right " style="text-align: center" >

     <li>
      <div data-post="{{ $details['post']['post_id'] }}" onclick="delete_post(this)" ><b style="cursor:pointer;">Delete</b></div></li>

     

   </ul>
  </div></a>
  <?php } ?></span>
                        <span class="description">{{ time_elapsed_string($details['post']['posted_date']) }}</span>
                        <span></span>
                       
                      </div>
                    </div>

                    <div class="box-body" style="display: block;"> 

    <p>{!! html_entity_decode($details['post']['post']) !!}</p>
                 

                      <button data-html="true" data-toggle="tooltip" title="<?php foreach ($details['likes'] as $like_key => $like_value) {
                        if(session()->get('userid') != $like_value['id'] ){
                          echo $like_value['sc_fullname'].'<br>';
                        }
                        
                      }
                                 if(in_array(session()->get('userid'), array_column($details['likes'],'id'))==1){
                                  echo 'You';
                                 }

                      ?>" type="button" data-member="{{ $details['post']['post_author'] }}" data-count="{{ count($details['likes']) }}" data-post="{{ $details['post']['post_id'] }}" onclick="like_button(this)" class="btn btn-default btn-xs <?php echo !empty(in_array(session()->get('userid'), array_column($details['likes'],'id')))?'liked':'' ?>" ><i class="fa fa-thumbs-o-up"></i> Like (<span class="like_count">{{ count($details['likes']) }}</span>)
                    </button>
                      <span class="pull-right text-muted"><span id="display_count"><?php  echo (!empty($details['comments']))?count($details['comments']):'0';  ?></span> comments</span>
                    </div>
                    <div class="comments_append_data<?php echo $details['post']['post_id'] ?>">
       
                    <div class="box-footer box-comments" style="display: block;">
                
                      <?php 
                    
  foreach ($details['comments'] as $ckey => $cvalue) { 


if(!empty($cvalue)){
                       
                        ?>
                      <div class="box-comment">
                        <img class="img-circle img-sm" src="{{ $cvalue['sc_profile_pic'] }}" alt="User Image">
                        <div class="comment-text">
                          <span class="username"><a href="<?php echo '/profile/'.$cvalue['sc_unique_name'] ?>">
                          {{ $cvalue['sc_fullname'] }}</a>
                          <span class="text-muted pull-right">{{ time_elapsed_string($cvalue['commented_date']) }} </span>
                          </span>
                         {!! html_entity_decode($cvalue['sc_comments']) !!}
                        <?php  if($cvalue['sc_user'] == session()->get('userid')){ ?>
                         <a><br><div data-post="{{ $cvalue['comment_id'] }}" data-parent="<?php echo $details['post']['post_id'] ?>" onclick="delete_comment(this)" class=" icon-remove-sign" style="font-size: 10px;cursor: pointer" >Delete</div></a> 
  <?php } ?>
                        </div>
                      </div>

                 
                    <?php }  } ?>
                       </div>
                  </div>
                    <div class="box-footer" style="display: block;">
                  
                        <img class="img-responsive img-circle img-sm" src="{{ session()->get('profile_pic') }}" alt="Alt Text">
                        <div class="img-push  addcomment">

                         <textarea type="text" data-post="{{ $details['post']['post_id'] }}" data-member="{{ $details['post']['post_author'] }}" class="comment_field" placeholder="Enter your comment"></textarea>

                       <button type="button" data-post="{{ $details['post']['post_id'] }}" data-member="{{ $details['post']['post_author'] }}" onclick="comment_post(this)"  class="btn btn-default btn-xs sendbtn">  send </button>

                       </div>
                    
                    </div>
                  </div><!--  end posts-->


            </div>
          </div>
        </div>
      </div>
    </div>

     @stop