<?php foreach ($details['posts'] as $key => $value) {

  # code...
 ?>
                  <!--   posts -->
                  <div class="box box-widget">
                    <div class="box-header with-border">
                      <div class="user-block">
                        <img class="img-circle" src="<?php echo $value['post']['sc_profile_pic']; ?>" alt="User Image">
                        <span class="username"><a href="<?php echo '/profile/'.$value['post']['sc_unique_name'] ?>">{{ $value['post']['sc_fullname'] }}</a> <?php if($value['post']['role'] != 'regular'){ ?><img data-toggle="tooltip" title="{{ get_title($value['post']['role']) }}" class="badge_logo" src="{{ get_logo($value['post']['role']) }}" alt="User Image"><?php } ?><?php if($value['post']['post_author'] == session()->get('userid')){ ?>
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
                     
                    <p>{!! html_entity_decode($value['post']['post']) !!} {{ ($value['post']['post_category'] == 'url')?get_url_content($value['post']):'' }}</p>
                  
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
                      <span class="pull-right text-muted"><span id="display_count"><?php echo (!empty($value['comments']))?count($value['comments']):'0';   ?></span> comments</span>
                    </div>
                    <div class="comments_append_data<?php echo $value['post']['post_id'] ?>">
       
                    <div class="box-footer box-comments" style="display: block;">
                   <?php   if(count($value['comments']) > 3){ ?>
                      <a data-post="<?php echo $value['post']['post_id'] ?>" onclick="view_all_comments_home(this)" >view all {{ count($value['comments']) }} comments</a>
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
                          <span class="text-muted pull-right">{{ time_elapsed_string($cvalue['commented_date']) }} </span>
                          </span>
                          {!! html_entity_decode($cvalue['sc_comments']) !!}
                        <?php  if($cvalue['sc_user'] == session()->get('userid')){ ?>
                         <a><br><div class=" icon-remove-sign" data-post="{{ $cvalue['comment_id'] }}" data-parent="<?php echo $value['post']['post_id'] ?>" onclick="delete_comment(this)"  style="font-size: 10px;cursor: pointer" >Delete</div></a> 
                        <?php } ?>
                        </div>
                      </div>

                 
                    <?php }  } ?>
                       </div>
                  </div>
                    <div class="box-footer" style="display: block;">
                  
                        <img class="img-responsive img-circle img-sm" src="<?php echo $details['sc_profile_pic']; ?>" alt="Alt Text">
                         <div class="img-push  addcomment">

                         <textarea type="text" data-post="{{ $value['post']['post_id'] }}" class="comment_field" onkeypress="comment_post_home(event,this)" placeholder="Press enter to post comment" rows="1" cols="55"></textarea>

                       <button type="button" data-post="{{ $value['post']['post_id'] }}" onclick="comment_post(this)" data-member="{{ $value['post']['post_author'] }}"  class="btn btn-default btn-xs sendbtn">  send </button>

                       </div>
                    
                    </div>
                  </div><!--  end posts-->

<?php  } ?>