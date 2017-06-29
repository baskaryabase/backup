 <?php if(!empty($follow_ups)){ ?>
 <div class="box-body chat" id="chat-box">
           <?php foreach ($follow_ups    as $key => $value) {
       ?>   
              <div class="item">
                <img src="{{ $value['sc_profile_pic'] }}" alt="user image" class="online">

                <p class="message">
                  <a href="#" class="name">
                    <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> {{ time_elapsed_string($value['followed_date']) }}</small>
                    {{ $value['sc_fullname'] }}
                  </a>
                  {{ $value['comments'] }}
                </p>
                
              </div>
            <?php } ?>
             
            </div>

            <?php } else{  ?>

            <p>No followups</p>

       <?php     } ?>