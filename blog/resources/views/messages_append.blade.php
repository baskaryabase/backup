<ul class="chat">
            <input type="hidden" id="display_user" ng-model="display_user" value="{{ $details['display_user'] }}">
           
            <?php foreach ($details['mesg']->messages->toArray() as $key => $value) {

             ?>
                <li class=" {{ ($value['user_id'] == session()->get('userid'))?'right':'left' }}  clearfix chat_msg">
                  <span class="chat-img {{ ($value['user_id'] == session()->get('userid'))?'pull-right':'pull-left' }}">
                    <img src="{{ $value['sender']['sc_profile_pic'] }}" alt="User Avatar">
                  </span>
          
                  <div class="chat-body clearfix">
                    <div class="header">
                      <strong class="primary-font">{{ $value['sender']['sc_fullname'] }}</strong>
                      <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> {{ time_elapsed_string($value['created_at']) }}</small>
                    </div>
                    <p>
                      {{ $value['message'] }}
                    </p>
                  </div>
                </li>
                
                <?php } ?>
                          
            </ul>