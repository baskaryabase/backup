
      <?php 
     
      if(!empty($details['inbox']->toArray())){
      foreach ($details['inbox'] as $key => $value) {
    /*   echo '<pre>';
        print_r($details['display_chat']);
        print_r($value->thread->toArray()['conversation_id']);
                echo '</pre>';*/
               
 ?>
          <li class="custom_noti_li_padd">
            <a href="/messages/{{ $value->thread->toArray()['conversation_id'] }}"  class="clearfix">
               <input type="hidden" id="user_token_{{ $value->thread->toArray()['conversation_id'] }}" value="{{ $value->withUser->toArray()['id'] }}">
              <img src="{{ $value->withUser->toArray()['sc_profile_pic'] }}" alt="" class="img-circle">
              <div class="custom_msg_align">
              <div class="friend-name">
                <strong>{{ $value->withUser->toArray()['sc_fullname'] }}</strong>
              </div>
              <div class="last-message text-muted">{{ '"'.substr($value->thread->toArray()['message'],0,25).'..."' }}</div>
              <small class="time text-muted">{{ time_elapsed_string($value->thread->toArray()['created_at']) }}</small>
            <?php  if($value->thread->toArray()['user_id'] == session()->get('userid')){ ?>

<small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
              <?php }else{ ?>
             <?php if(!empty($details['count_array'][$value->thread->toArray()['conversation_id']])){ ?>
                    <small class="chat-alert label label-danger">{{ $details['count_array'][$value->thread->toArray()['conversation_id']] }}</small>
                    <?php }else{ ?>
                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                    <?php } } ?>
                  </div>
            </a>
          </li>
          <li role="presentation" class="divider"></li>
     <?php } }else{ ?>
<li class="custom_no_notification">No Messages</li>
<?php   }


     ?>