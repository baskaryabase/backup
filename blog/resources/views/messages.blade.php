   @extends('layouts.messagesMaster')
       @section('title')
    <title>Messages | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
@include('layouts.footer')
  @section('footer')
  @stop
   @section('content')
<?php

if($details['mesg']){
 
 ?> 

  <div class="col-md-8 bg-white ">
       <input type="hidden" id="role"  value="{{ session()->get('role') }}"> 
          <div class="chat-message" style="max-height: 600px;overflow-y:auto ">
            <div id="message_append">
          <ul class="chat">
            <input type="hidden" id="display_user" ng-model="display_user" value="{{ $details['display_user'] }}">
           
            <?php 
if(!empty($details['mesg'])){
            foreach ($details['mesg']->messages->toArray() as $key => $value) {

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
                
                <?php } } ?>
                          
            </ul>
          </div>
          </div>
          <div class="chat-box_ bg-white">
            <div class="input-group">
              <input class="form-control border no-shadow no-rounded role_monitization" id="send_msg" ng-model="mesg_value" placeholder="Type your message here">
              <span class="input-group-btn">
                <button class="btn btn-success no-rounded" ng-click="sendMessages()" type="button">Send</button>
              </span>
            </div><!-- /input-group --> 
          </div>            
        </div>  

<?php }else{ ?>

<h3>No messages to display</h3>

<?php
} ?>

    @stop