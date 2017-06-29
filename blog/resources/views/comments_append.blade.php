<?php if(!empty($details['values'])){

 ?>
                    <div class="box-footer box-comments" style="display: block;">
<?php   if(count($details['values']) > 3){ ?>
                      <a data-post="<?php echo $details['post_id'] ?>" onclick="view_all_comments(this)">view all {{ count($details['values']) }} comments</a>
                      <?php } ?>

                      <?php 

                      
                      foreach (array_slice($details['values'], -3, 3, true) as $ckey => $cvalue) { 
                         ?>
                      <div class="box-comment">
                        <img class="img-circle img-sm" src="<?php echo $cvalue['sc_profile_pic']; ?>" alt="User Image">
                        <div class="comment-text">
                          <span class="username">
                          <a href="<?php echo '/profile/'.$cvalue['sc_unique_name'] ?>">
                          {{ $cvalue['sc_fullname'] }}</a>
                          <span class="text-muted pull-right">{{ time_elapsed_string($cvalue['commented_date']) }}</span>
                          </span>
                          {!! html_entity_decode($cvalue['sc_comments']) !!}
                          <?php  if($cvalue['sc_user'] == session()->get('userid')){ ?>
                          <a><br><div class=" icon-remove-sign" style="font-size: 10px;cursor: pointer"   data-post="{{ $cvalue['comment_id'] }}" data-parent="<?php echo $details['post_id'] ?>" onclick="delete_comment(this)" >Delete</div></a> 
                        <?php } ?>
                        </div>
                      </div>

                   <?php }  ?>
                    </div>
                    <?php } ?>