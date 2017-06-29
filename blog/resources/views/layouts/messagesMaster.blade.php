
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo URL::asset('/image/use.png') ?>">
      @section('title')
        @show
    <!-- Bootstrap core CSS -->



  <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/cover.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/forms.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/messages1.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">
  <link href="<?php echo URL::asset('/css/toastr.min.css') ?>" rel="stylesheet" type="text/css">
         <script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/typeahead.js') ?>"></script>
            <script src="<?php echo URL::asset('/js/toastr.min.js') ?>"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Fixed navbar -->
 @section('header')
        @show

         <div class="container page-content" ng-app="messages" ng-controller="chat_panel">
<?php

if(!empty($details['inbox']->toArray())){ ?>
    <!-- Begin page content -->

      <div class="row">
        <div class="col-md-4 bg-white">
          <div class=" row border-bottom padding-sm" style="height: 40px;">

          <h4 class="messages_subtitle"> Recent Messages </h4>
          </div>
<!--  <input class="form-control input-sm" id="search_member" placeholder="Search Member" type="text"> -->
   <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
          <!-- member list -->
          <ul class="friend-list">
      <?php foreach ($details['inbox'] as $key => $value) {
    /*   echo '<pre>';
        print_r($details['display_chat']);
        print_r($value->thread->toArray()['conversation_id']);
                echo '</pre>';*/
               
 ?>
          <li class=" <?php if($key==0){ echo 'animated bounceInDown '; } if($details['display_chat'] == $value->thread->toArray()['conversation_id']){ echo 'active'; }  ?>">
            <a href="/messages/{{ $value->thread->toArray()['conversation_id'] }}"  class="clearfix">
               <input type="hidden" id="user_token_{{ $value->thread->toArray()['conversation_id'] }}" value="{{ $value->withUser->toArray()['id'] }}">
              <img src="{{ $value->withUser->toArray()['sc_profile_pic'] }}" alt="" class="img-circle">
              <div class="friend-name">
                <strong>{{ $value->withUser->toArray()['sc_fullname'] }}</strong>
              </div>
              <div class="last-message text-muted">{{ $value->thread->toArray()['message'] }}</div>
              <small class="time text-muted">{{ time_elapsed_string($value->thread->toArray()['created_at']) }}</small>
            <?php  if($value->thread->toArray()['user_id'] == session()->get('userid')){ ?>

<small class="chat-alert text-muted"><i class="fa fa-check"></i></small>
              <?php }else{ ?>
             <?php if(!empty($details['count_array'][$value->thread->toArray()['conversation_id']])){ ?>
                    <small class="chat-alert label label-danger">{{ $details['count_array'][$value->thread->toArray()['conversation_id']] }}</small>
                    <?php }else{ ?>
                    <small class="chat-alert text-muted"><i class="fa fa-reply"></i></small>
                    <?php } } ?>
            </a>
          </li>
     <?php } ?>
          </ul>
        </div>

        <!--=========================================================-->
        <!-- selected chat -->
         @yield('content')
      </div>

<?php }else{  ?>

<h3 style="text-align:center" >No message to display</h3>

<?php
} ?>
  </div>
  @section('footer')
        @show
           <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/custom.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/messages.js') ?>"></script>
  </body>
</html>
