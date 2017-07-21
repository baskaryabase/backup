 @extends('layouts.PlainHeaderFooter')
      @section('title')
    <title>Profile | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
@section('footer')
@include('layouts.footer')
@stop
   @section('content')

   <?php /*echo '<pre>';
print_r($details);
echo '</pre>'*/
    ?>
       <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

   <link href="<?php echo URL::asset('/css/profile2.css') ?>" rel="stylesheet" type="text/css"> 
   <link href="<?php echo URL::asset('/css/liveurl.css') ?>" rel="stylesheet" type="text/css"> 
   <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css"> 
   <link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css"> 
   <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css"> 

    <div class="container page-content">
      <div class="row" id="user-profile">
        <div class="col-md-4 col-xs-12">
          <div class="row-xs">
            <div class="main-box clearfix">
              <h2>{{ $details['sc_fullname'] }}</h2>
              <div class="profile-status">
                <i class="fa fa-check-circle"></i> Online
              </div>
              <img src="<?php echo $details['sc_profile_pic']; ?>" alt="" class="profile-img img-responsive center-block show-in-modal">
              
              <div class="profile-details">
               <div class="profile-message-btn center-block text-center">
                <a href="/company/{{ $details['startups_slug'] }}" class="btn btn-azure">
                  <i class="fa fa-edit"></i>
                  Company Profile
                </a>
              </div>
              </div>
              <?php  if($details['user_id'] == session()->get('userid')){ ?>
              <div class="profile-message-btn center-block text-center">
                <a href="/edit-profile" class="btn btn-azure">
                  <i class="fa fa-edit"></i>
                  Edit Profile
                </a>
              </div>
              <?php }else{ ?>
 <div class="profile-message-btn center-block text-center">
                <a href="#" onclick="sendMessage(this)" data-user="{{ $details['user_id'] }}" class="btn btn-azure">
                  <i class="fa fa-envelope"></i>
                  Send message
                </a>
              </div>

              <?php } ?>
            </div>
          </div>
        </div>
        
        <div class="col-md-8 col-xs-12">
          <div class="row-xs">
            <div class="main-box clearfix">
              <div class="row profile-user-info">
                <div class="col-sm-8">
                  <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                      Full Name
                    </div>
                    <div class="profile-user-details-value">
                      {{ $details['sc_fullname'] }}
                    </div>
                  </div>
                  <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                    Location
                    </div>
                    <div class="profile-user-details-value">
                      {{ $details['sc_location'] }}
                    </div>
                  </div>
                  <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                      Expertise
                    </div>
                    <div class="profile-user-details-value">
                    {{ $details['sc_expertise'] }}
                    </div>
                  </div>
                  <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                      Email
                    </div>
                    <div class="profile-user-details-value">
                      {{ $details['sc_email'] }}
                    </div>
                  </div>
                  <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                      Phone number
                    </div>
                    <div class="profile-user-details-value">
                      {{ $details['sc_phone'] }}
                    </div>
                  </div>
                   <div class="profile-user-details clearfix">
                    <div class="profile-user-details-label">
                      Personal Domain
                    </div>
                    <div class="profile-user-details-value">
                     {{ $details['personal_domain'] }}
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 profile-social">
                  <ul class="fa-ul">
                    <li><i class="fa-li fa fa-twitter-square"></i><a href="#">@johnbrewk</a></li>
                    <li><i class="fa-li fa fa-linkedin-square"></i><a href="#">John Breakgrow jr.</a></li>
                    <li><i class="fa-li fa fa-facebook-square"></i><a href="#">John Breakgrow jr.</a></li>
                 <!--    <li><i class="fa-li fa fa-skype"></i><a href="#">john_smart</a></li>
                    <li><i class="fa-li fa fa-instagram"></i><a href="#">john_smart</a></li> -->
                  </ul>
                </div>
              </div>
              
              <div class="tabs-wrapper profile-tabs">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab-timeline" data-toggle="tab">Timeline</a></li>
                  
                </ul>
                
                <div class="tab-content">
                  <div class="tab-pane fade in active" id="tab-timeline">
                    <div class="row">
                     <div class="col-md-12" id="app1" ng-app="Profile" ng-controller="postCtrl">
          <div class="row">
            <!-- left posts-->
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                 <input type="hidden" id="user_id"  value="{{ session()->get('userid') }}"> 
                 <input type="hidden" id="role"  value="{{ session()->get('role') }}"> 
                  <input type="hidden" id="display_user" value="{{ $details['id'] }}">
                  <?php  if($details['user_id'] == session()->get('userid')){ ?>
                <!-- post state form -->
                  <div class="box profile-info n-border-top">
                    <form>
                        <textarea ng-model="post" class="form-control input-lg p-text-area post_field role_monitization" rows="2" placeholder="Share your startup experiences."></textarea>
                    </form>
                    <div class="box-footer box-form">
                        <button type="button" class="btn btn-azure pull-right" ng-click="putPost()" ng-disabled="!post" >Post</button>
                        <ul class="nav nav-pills">
                          
                        </ul>
                    </div>
                  </div><!-- end post state form -->
                  <?php } ?>
                  <div id="posts_append_data">
<?php foreach ($details['posts'] as $key => $value) {

  # code... 
 ?>
                  <!--   posts -->
                  <div class="box box-widget profile-div">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="<?php echo $details['sc_profile_pic']; ?>" alt="User Image">
                        <span class="username"><a href="<?php echo '/profile/'.$value['post']['sc_unique_name'] ?>">{{ $details['sc_fullname'] }}</a> <?php if($value['post']['role'] != 'regular'){ ?><img data-toggle="tooltip" title="{{ get_title($value['post']['role']) }}" class="badge_logo" src="{{ get_logo($value['post']['role']) }}" alt="User Image"><?php } ?><?php if($value['post']['post_author'] == session()->get('userid')){ ?>
                     
  <a class="pull-right"  > 
                          <div class="dropdown">
    <div  type="button dropdown-toggle" class="btn-lg" data-toggle="dropdown">

   <span class="caret" style="cursor:pointer;"></span></div>

   <ul class="dropdown-menu dropdown-menu-right " style="text-align: center" >

     <li>
      <div data-post="{{ $value['post']['post_id'] }}" onclick="delete_post(this)" ><b style="cursor:pointer;">Delete</b></div></li>

     

   </ul> 
  </div></a>
                          <?php } ?></span>
                        <span class="description">{{ time_elapsed_string($value['post']['posted_date']) }}</span>
                        <span></span>
                       
                      </div>
                    </div>

                    <div class="box-body" style="display: block;">
                     
                    <p>{!! html_entity_decode($value['post']['post']) !!}</p>
                            <button data-html="true" data-toggle="tooltip" title="<?php foreach ($value['likes'] as $like_key => $like_value) {
                        if(session()->get('userid') != $like_value['id'] ){
                          echo $like_value['sc_fullname'].'<br>';
                        }
                        
                      }
                                 if(in_array(session()->get('userid'), array_column($value['likes'],'id'))==1){
                                  echo 'You';
                                 }

                      ?>" type="button" data-member="{{ $value['post']['post_author'] }}" data-count="{{ count($value['likes']) }}" data-post="{{ $value['post']['post_id'] }}" onclick="like_button(this)" class="btn btn-default btn-xs <?php echo !empty(in_array(session()->get('userid'), array_column($value['likes'],'id')))?'liked':'' ?>" ><i class="fa fa-thumbs-o-up"></i> Like (<span class="like_count">{{ count($value['likes']) }}</span>)
                    </button>
                      <span class="pull-right text-muted"><span id="display_count"><?php  echo (!empty($value['comments']))?count($value['comments']):'0';  ?></span> comments</span>
                    </div>
                    <div class="comments_append_data<?php echo $value['post']['post_id'] ?>">
       
                    <div class="box-footer box-comments" style="display: block;">
                   <?php   if(count($value['comments']) > 3){ ?>
                      <a data-post="<?php echo $value['post']['post_id'] ?>" onclick="view_all_comments(this)" >view all {{ count($value['comments']) }} comments</a>
                      <?php } ?>
                      <?php 
                    
  foreach (array_slice($value['comments'], -3, 3, true) as $ckey => $cvalue) { 


if(!empty($cvalue)){
                       
                        ?>
                      <div class="box-comment">
                        <img class="img-circle img-sm" src="{{ $cvalue['sc_profile_pic'] }}" alt="User Image">
                        <div class="comment-text">
                          <span class="username">
                        <a href="<?php echo '/profile/'.$cvalue['sc_unique_name'] ?>">
                          {{ $cvalue['sc_fullname'] }}</a>
                          <span class="text-muted pull-right">{{ time_elapsed_string($cvalue['commented_date']) }}</span>
                          </span>
                          {!! html_entity_decode($cvalue['sc_comments']) !!}
                        <?php  if($cvalue['sc_user'] == session()->get('userid')){ ?>
                        <a><br><div data-post="{{ $cvalue['comment_id'] }}" data-parent="<?php echo $value['post']['post_id'] ?>" onclick="delete_comment(this)" class=" icon-remove-sign" style="font-size: 10px;cursor: pointer" >Delete</div></a> 
                      
                        <?php } ?>
                        </div>
                      </div>

                 
                    <?php }  } ?>
                       </div>
                  </div>
                    <div class="box-footer" style="display: block;">
                  
                        <img class="img-responsive img-circle img-sm" src="<?php echo session()->get('profile_pic'); ?>" alt="Alt Text">
                         <div class="img-push  addcomment">

                         <textarea rows="1" cols="60" type="text" data-post="{{ $value['post']['post_id'] }}" class="comment_field" placeholder="Press enter to post comment"></textarea>

                       <button type="button" data-post="{{ $value['post']['post_id'] }}" onclick="comment_post_enter(this)" data-member="{{ $value['post']['post_author'] }}" class="btn btn-default btn-xs sendbtn">  send </button>

                       </div>
                    
                    </div>
                  </div><!--  end posts-->

<?php  } ?>
                 
                </div>
                </div>
              </div>
            </div><!-- end left posts-->
          </div>
        </div><!-- end  center posts -->
                    </div>
                  </div>
      
                  
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script src="<?php echo URL::asset('/js/profile.js') ?>"></script>

   <div class="modal fade" id="sendmessageuser1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Send Message</h4>
        </div>
        <div class="modal-body">
  <textarea class="form-control" rows="5" id="send_message_value"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" id="sendmessageuser" data-user="" class="btn btn-primary">Send Message</button>
        </div>
      </div>
    </div>
  </div>
 <input type="hidden" id="role"  value="{{ session()->get('role') }}"> 
    @stop