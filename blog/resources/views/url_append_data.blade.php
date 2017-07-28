       <?php
/*echo '<pre>';
print_r($details);
echo '</pre>';
die;
*/        ?>
       <div class="get_url">
       <a target="_blank" href="{{$details['url']}}">
       <div class="liveurl">
           <div class="close" onclick="remove_url(this)" title="Remove"></div>
           <div class="inner">
              <?php if(isset($details['alt_img'])){ ?>
               <div class="image col-md-5">
              
                 <img src="{{$details['alt_img']}}">
                 
               </div>
               <?php } ?>
               <div class="details  <?php if(isset($details['alt_img'])){ echo 'col-md-7'; }else{ echo 'col-md-12';} ?> ">
                   <div class="info">
                       <div class="title"><h5 class="font-size-16">{{isset($details['title'])?$details['title']:$details['plaintitle']}}</h5></div>
                       <div class="description"><p class="description-p">
                         {{$details['keywords']}}
                       </p> </div>
                       <div class="url">{{$details['url']}} </div>
                   </div>

                 
                   <div class="video"></div>
               </div>

           </div>
       </div>
       </a>
       

       <!-- video player div    -->
<!--        <div class="col-md-12 video-container">
       <div class="embed-responsive embed-responsive-16by9">
         <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/WDjd1piOMZQ" allowfullscreen></iframe>

       
       </div>
       </div><!-- video div end --> 
     
     </div>  