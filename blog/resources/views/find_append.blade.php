               <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">

    <?php foreach ($details as $key => $value) {

     ?>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 find-box">
              <div class="contact-box center-version">
                <a href="/profile/{{ $value['details']->sc_unique_name }}">
                  <img alt="image" class="img-circle" src="{{ !empty($value['details']->sc_profile_pic)?$value['details']->sc_profile_pic:URL::asset('/image/user-default.png') }}">
                  <h3 class="m-b-xs"><strong>{{ $value['details']->sc_fullname }}</strong> <?php if($value['details']->role != 'regular'){ ?><img data-toggle="tooltip" title="{{ get_title($value['details']->role) }}" class="badge_logo" src="{{ get_logo($value['details']->role) }}" alt="User Image"><?php } ?></h3>
    
                  <div class="font-bold">{{ empty($value['details']->startup_name)?$value['details']->company_name:$value['details']->startup_name }}<br>{{ $value['details']->sc_location }}</div>
                 
                </a>
                <div class="contact-box-footer"
>                

                   <div class="m-t-xs btn-group">

                           <a onclick="sendMessage(this)" data-user="{{ $value['details']->id }}" class="btn-white"><i class="fa fa-envelope"></i>&nbsp Send Messages</a>

                       </div>
                </div>
              </div>
          </div>
<?php } ?>
      