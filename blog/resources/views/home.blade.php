       @extends('layouts.homeMaster')
         @section('title')
    <title>Home | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop
@include('layouts.footer')
  @section('footer')
  @stop
   @section('content')
   <!-- Begin page content -->
    <?php 
 /* echo '<pre>';
    print_r($details); 
    echo '</pre>'; 
    die;*/  
    ?>


     
    <div class="col-md-6" ng-app="Home" ng-controller="homeCtrl">
      <input type="hidden" id="url_flag" value="">
          <div class="row">
            <!-- left posts-->
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-12">
                <?php if(!empty(session()->get('SessionID'))){ ?>
                  <div class="box profile-info n-border-top">
                    <form>
                        <textarea id="status_area" ng-model="post" class="form-control role_monitization input-lg p-text-area post_field" rows="2" placeholder="Share your startup experiences."></textarea>
                    </form>
<div class="liveurl-loader"></div>
        
        <div class="get_url">
        <div class="liveurl">
            <div class="close" title="Entfernen"></div>
            <div class="inner">
                <div class="image col-md-5">
                  <img src="https://members.startupsclub.org/image/1494399354.jpg">
                </div>
                <div class="details col-md-7">
                    <div class="info">
                        <div class="title"><h5 class="font-size-16">A Video About how to survive inside whales stomach</h5></div>
                        <div class="description"><p class="description-p">
                          amazing video it will be usefull for u when u got struck inside whale
                        </p> </div> 
                        <div class="url">youtube.com </div>
                    </div>

                   
                    <div class="video"></div>
                </div>

            </div>
        </div>
        </div>

                    <div class="box-footer box-form">
                        <button type="button" class="btn btn-azure pull-right"  ng-disabled="!post" ng-click="putPostHome()">Post</button>
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
                      <a data-post="<?php echo $value['post']['post_id'] ?>" onclick="view_all_comments_home(this)" >view all {{ count($value['comments']) }} comments</a>
                      <?php } ?>
                      <?php 
                    
  foreach (array_slice($value['comments'], -3, 3, true) as $ckey => $cvalue) { 


if(!empty($cvalue)){
                       
                        ?>
                      <div class="box-comment">
                        <img class="img-circle img-sm" src="{{ $cvalue['sc_profile_pic'] }}" alt="User Image">
                        <div class="comment-text">
                          <span class="username"><a href="<?php echo '/profile/'.$cvalue['sc_unique_name'] ?>">
                          {{ $cvalue['sc_fullname'] }}</a>
                          <span class="text-muted pull-right">{{ time_elapsed_string($cvalue['commented_date']) }} </span>
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
                                  <?php if(!empty(session()->get('SessionID'))){ ?>

                    <div class="box-footer" style="display: block;">
                  
                        <img class="img-responsive img-circle img-sm" src="<?php echo isset($details['sc_profile_pic'])?$details['sc_profile_pic']:'' ?>" alt="Alt Text">
                        <div class="img-push  addcomment">

                         <textarea type="text" data-post="{{ $value['post']['post_id'] }}" data-member="{{ $value['post']['post_author'] }}" class="comment_field" rows="1" placeholder="Enter your comment"></textarea>

                       <button type="button" data-post="{{ $value['post']['post_id'] }}" data-member="{{ $value['post']['post_author'] }}" onclick="comment_post(this)"  class="btn btn-default btn-xs sendbtn">  send </button>

                       </div>
                    
                    </div>
                    <?php } ?>
                  </div><!--  end posts-->

<?php  } ?>
                 
                </div>
                </div>
              </div>
            </div><!-- end left posts-->
          </div>
        </div><!-- end  center posts -->
<script> 

$(document).ready(function(){
var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1.25,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:true
        }
    }
});

$('.customNextBtn').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.customPrevBtn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
$('.owl-stage-outer').css('position','initial');
$('.owl-carousel').css('position','initial');
$('.owl-carousel').css('width','auto');

});



                var curImages = new Array();
                
                $("#status_area").liveUrl({
                
                    
                    loadStart : function(){
                        $('.liveurl-loader').show();
                    },
                    loadEnd : function(){
                        $('.liveurl-loader').hide();
                    },
                    success : function(data) 
                    { 
                    //    $('#url_flag').val('set');

                    //     var output = $('.liveurl');
                    //     if(data.description != '')
                    //     output.find('.title').text(data.title);
                    //     output.find('.description').text(data.description);
                        
                    //     output.find('.url').text(data.url);
                    //     output.find('.image').empty();
                        
                    //     output.find('.close').one('click', function() 
                    //     {
                    //         var liveUrl     = $(this).parent();
                    //         liveUrl.hide('fast');
                    //         liveUrl.find('.video').html('').hide();
                    //         liveUrl.find('.image').html('');
                    //         liveUrl.find('.controls .prev').addClass('inactive');
                    //         liveUrl.find('.controls .next').addClass('inactive');
                    //         liveUrl.find('.thumbnail').hide();
                    //         liveUrl.find('.image').hide();

                    //         $('textarea').trigger('clear'); 
                    //         curImages = new Array();
                    //     });
                        
                    //     output.show('fast');
                        
                    //     if (data.video != null) {                       
                    //         var ratioW        = data.video.width  /350;
                    //         data.video.width  = 350;
                    //         data.video.height = data.video.height / ratioW;
        
                    //         var video = 
                    //         '<object width="' + data.video.width  + '" height="' + data.video.height  + '">' +
                    //             '<param name="movie"' +
                    //                   'value="' + data.video.file  + '"></param>' +
                    //             '<param name="allowScriptAccess" value="always"></param>' +
                    //             '<embed src="' + data.video.file  + '"' +
                    //                   'type="application/x-shockwave-flash"' +
                    //                   'allowscriptaccess="always"' +
                    //                   'width="' + data.video.width  + '" height="' + data.video.height  + '"></embed>' +
                    //         '</object>';
                    //         output.find('.video').html(video).show();
                            
                         
                    //     }
                       
                    // },
                    // addImage : function(image)
                    // {   
                      
                     

                    //     var output  = $('.liveurl');
                    //     var jqImage = $(image);
                    //     jqImage.attr('alt', 'Preview');
                        
                    //     if ((image.width / image.height)  > 7 
                    //     ||  (image.height / image.width)  > 4 ) {
                    //         // we dont want extra large images...
                    //         return false;
                    //     } 

                    //     curImages.push(jqImage.attr('src'));
                    //     output.find('.image').append(jqImage);
                        
                        
                    //     if (curImages.length == 1) {
                    //         // first image...
                            
                    //         output.find('.thumbnail .current').text('1');
                    //         output.find('.thumbnail').show();
                    //         output.find('.image').show();
                    //         jqImage.addClass('active');
                            
                    //     }
                        
                    //     if (curImages.length == 2) {
                    //         output.find('.controls .next').removeClass('inactive');
                    //     }
                        
                    //     output.find('.thumbnail .max').text(curImages.length);
                //    
          </script>

    @stop

<!-- <div class="custom_url">
  <div class="inner">
    <div class="customimage">
      <img class="active" src="http://southradios.com//images/arr-lite-radio.jpg?random=1492429508232"></div>
      <div class="details">
        <div class="info">
          <div class="customtitle">ARR lite radio - A.R.Rahman lite melodies</div>
          <div class="customdescription">Listen to the Melody Collection of A.R.Rahman. since Roja to up to date.</div>
          <div class="customurl">http://southradios.com/arr-lite-radio.html</div>
        </div>
        <div class="video"></div>
      </div>
    </div>
</div> -->