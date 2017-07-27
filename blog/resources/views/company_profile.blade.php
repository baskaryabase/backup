@extends('layouts.PlainHeaderFooter')
  @section('title')
  <title>Events | Member Platform | Startups Club</title> 
  @stop
  @section('header')
@include('layouts.header')
@stop
  @section('footer') 
@include('layouts.footer')
@stop
   @section('content')

      <?php
/*echo '<pre>';
print_r($company);
echo '</pre>';*/

$logo_img=URL::asset('/image/company/'.$company['data']['startup_logo']);
    ?>
   <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/common.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/company_profile.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/js_composer.min.css') ?>" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <body>
    <section class="container full-body">
      <button data-toggle="modal" onClick="modal()">modal 4</button>
<div class="border-first-container container-fluid">
      <div class="main-div">
        <div class="max-card">


          <div class="row">
          

            <div  class="mar-top col-sm-10 col-xs-10">

              <img style="height:100px; width:100px" src="{{ $logo_img }}" class="img-responsive">
              
            </div>
            <a class="try col-xs-2 col-sm-2" data-toggle="modal" onclick="get_heading_modal({{$company['data']['company_id']}})"><i class="fa fa-pencil-square-o color-orange pull-right" aria-hidden="true"></i></a>

            <div class="col-sm-12 col-xs-12">
              <div class="promotion-header">
                {{$company['data']['startup_name']}} 
                <!-- <a data-toggle="modal" href="#myModal" class="try"><i class="fa fa-pencil-square-o color-orange" aria-hidden="true"></i></a> -->
              </div>
            </div>
            
          </div>
        </div>
      </div>
          
      <div class="container-fluid">
        <div class="row add" style="color: #000;">

          <div class="col-sm-4" style="padding-left: 10%;">
            <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 3px;"></i>
            <a class="tag" style="color: #000;">{{$company['data']['sc_location']}}</a>
            <br>
            <i class="fa fa-users" aria-hidden="true" style="margin-right: 3px;"></i>
            <span>{{$company['data']['startup_employee']}}</span>    
          </div>
          <div class="col-sm-4" style="padding-left: 10%;">
            <i class="fa fa-industry" aria-hidden="true" style="margin-right: 3px;"></i>
            <span>{{$company['data']['startup_industry']}}</span>  
            <br>
            <i class="fa fa-building-o" aria-hidden="true" style="margin-right: 3px;"></i>
            <span>{{$company['data']['startup_stage']}}</span> 
          </div>
          <div class="col-sm-4">
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="{{$company['data']['fb_link']}}"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/548c1294e4b03603dc2c67f0.jpg" style="height: 30px; width: 30px;"></a></li>
              <li><a class="faicon-twitter" href="{{$company['data']['google_url']}}"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/voqzx01cvgk5reqqgcz8.jpg" style="height: 30px; width: 30px;"></a></li>
              <li><a class="faicon-linkedin" href="{{$company['data']['twitter_link']}}"><img src="http://tintation.com/wp-content/uploads/iphone-apps/iphone-apps-icon-5.jpg" style="height: 30px; width: 30px;"></a></li>
              
            </ul>
            <a href="http://startupsclub.org/"><span style="margin-left: 39px;">{{$company['data']['startup_website']}}</span></a>
          </div>
        </div>
      </div>
</div>

      <div class="container details_descript">
        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_orange vc_separator-has-text">
          <span class="vc_sep_holder vc_sep_holder_l">
            <span class="vc_sep_line"></span>
          </span>
          <h4></h4>
          <h2>Elevator Pitch</h2>
          <p></p><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
        </div>
        <div class="wpb_text_column wpb_content_element ">
          <a class="try pull-right" onclick="get_elevator({{$company['data']['company_id']}})" data-toggle="modal" href="#myModal3"><i class="fa fa-pencil-square-o color-orange" aria-hidden="true"></i></a>

          <div class="wpb_wrapper">
            <p id="elevator_text">{{$company['data']['elevator_pitch']}}</p>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_orange vc_separator-has-text">
          <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
          <h4></h4>
          <h2>What We Offer</h2>
          <p></p><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
          

        </div>


<div class="container margin-center">
<div class="container ">             
  <!-- Slider -->
  <div class="row">
    <div class="col-md-12" id="slider">
      <!-- Top part of the slider -->
      <div class="row">
        <div class="col-md-12" id="carousel-bounding-box">
          <div id="myCarousel" class="carousel slide">
            <!-- Carousel items -->
            <div class="carousel-inner">
              <div class="active item" data-slide-number="0">
              <img class="big-image"  src="https://static.pexels.com/photos/248797/pexels-photo-248797.jpeg"></div>
              
              <div class="item" data-slide-number="1">
              <iframe class="iframe" src="https://www.youtube.com/embed/FBEGuOPlDUE" allowfullscreen></iframe></div>
              
              <div class="item" data-slide-number="2"><img class="big-image" src="http://placehold.it/770x300&amp;text=video three"></div>
              
              <div class="item" data-slide-number="3"><img class="big-image" src="http://placehold.it/770x300&amp;text=video four"></div>
              
              <div class="item" data-slide-number="4"><img class="big-image" src="http://placehold.it/770x300&amp;text=video five"></div>
              
            </div>
            <!-- Carousel nav -->
           </div>
        </div>
       
        
    </div>
  </div> <!--/Slider-->
  
  <div class="row-fluid hidden-phone" id="slider-thumbs">
    <div align="center" class="col-xs-12">
      <!-- Bottom switcher of slider -->
      <ul class="ul thumbnails">
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-0">
            <img class="small-image" src="https://static.pexels.com/photos/248797/pexels-photo-248797.jpeg">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-1">
            <img class="small-image" src="http://placehold.it/170x100&amp;text=two">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-2">
            <img class="small-image" src="http://placehold.it/170x100&amp;text=three">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-3">
            <img class="small-image" src="http://placehold.it/170x100&amp;text=four">
          </a>
        </li>
        <li class="col-xs-2">
          <a class="thumbnail" id="carousel-selector-4">
            <img class="small-image" src="http://placehold.it/170x100&amp;text=five">
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

</div>
</div>
      <!--/main slider carousel-->
      <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_orange vc_separator-has-text">
        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
        <h4></h4>
        <h2>founders</h2>
        <p></p><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
      </div>
      
      <div class="founders section">
        <div class="section with_filler with_editable_regions dsss17 startups-show-sections ffs70 founders _a _jm" data-id="594897" data-_tn="startups/show/sections/founders">
          <div class="row">
            <div class="fast">
              <div class="col-sm-2 col-xs-4">
                <img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Vivek-150x150.jpg">
              </div>
              <div class="col-sm-4 col-xs-8">
                <a class="profile-link" href="#">{{$company['data']['sc_fullname']}}</a>
                <p class="role_title">Founder</p> 
                <p class="bio">{{$company['data']['startup_name']}}</p> 
              </div>
            
            </div>
            <!-- <div class="second">
              
            </div> -->
          </div>
        </div>
      </div>  
    </section>
              <!-- <div class="photo">
                <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="3" aria-describedby="qtip-3"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-xs-8">
              <div class="text">
      <div class="name">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="6">Salma Moosa</a>
      </div>
      <div class="role_title">Founder</div>
      <div class="bio"><p>Founder of Startups club.</p></div>
      </div>
            </div>
          </div>
        </div>  
      </div>    
</div> -->






        <!-- <div class=" dsr31 startup_roles fsp87 startup_profile_group _a _jm" data-size="larger" data-startup_id="594897" data-role="founder" data-_tn="startup_roles/startup_profile_group"><ul class="larger roles"><li class="role" data-token="fP73"><div data-startup_role="{&quot;id&quot;:2885026,&quot;tagged_type&quot;:&quot;User&quot;,&quot;tagged_id&quot;:158128,&quot;startup_id&quot;:594897,&quot;role&quot;:&quot;founder&quot;,&quot;token&quot;:&quot;fP73&quot;,&quot;past?&quot;:false}" data-size="larger" class="dsr31 startup_roles fse35 startup_profile _a _jm loading" data-_tn="startup_roles/startup_profile"><div class="g-lockup top larger">
      <div class="photo">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="3" aria-describedby="qtip-3"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Vivek-150x150.jpg"></a>
      </div>
      <div class="text">
      <div class="name">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="6">Vivek Srinivasan</a>
      </div>
      <div class="role_title">Founder</div>
      <div class="bio"><p>Founder of Startups club.</p></div>
      </div>
      </div></div></li>
      <li class="role" data-token="fP73"><div data-startup_role="{&quot;id&quot;:2885026,&quot;tagged_type&quot;:&quot;User&quot;,&quot;tagged_id&quot;:158128,&quot;startup_id&quot;:594897,&quot;role&quot;:&quot;founder&quot;,&quot;token&quot;:&quot;fP73&quot;,&quot;past?&quot;:false}" data-size="larger" class="dsr31 startup_roles fse35 startup_profile _a _jm loading" data-_tn="startup_roles/startup_profile"><div class="g-lockup top larger">
      <div class="photo">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="3" aria-describedby="qtip-3"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg"></a>
      </div>
      <div class="text">
      <div class="name">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="6">Salma Moosa</a>
      </div>
      <div class="role_title">Founder</div>
      <div class="bio"><p>Founder of Startups club.</p></div>
      </div> -->
      <!-- </div></div></li>
    </ul>
      </div>

</div></div> -->
      <!-- <div class="container profile-details">
        <div class="row-page">
          <div class="box-header with-border">
            <h4>founders</h4>
          </div>
          <div class="col-sm-4">
            <div class="image-container">
              <img src="http://startupsclub.org/wp-content/uploads/2017/02/Vivek-150x150.jpg" class="image-container-zoom"  title="founder" />
            </div>
            <div class="image-container">
              <img src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg" class="image-container-zoom"  title="founder" />
            </div>
          </div>
          <div class="col-sm-8">
            <div class="about">
            <h4>Vivek Srinivasan</h4>
            <h4>founder</h4>
          </div>
        </div>
      </div>
    </div> -->
  

<div id="edit_company_modal" class="modal fade" role="dialog">
  <div align="center" class="modal-dialog">

    <!-- Modal content-->
    <div class="edit-modal1-width modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div> -->
      <div class="modal-body">

<div class="">
  <section id="content">
<button type="button" class="close close-btn-class" data-dismiss="modal">&times;</button>
<div id="edit_append_data" ></div>
   
  </section><!-- content -->
</div><!-- container -->
      </div>
      
    </div>

  </div>
</div>



<!-- modal 3 div -->
<div id="myModal3" class="modal fade" role="dialog">
  <div align="center" class="modal-dialog">

    <!-- Modal content-->
    <div class="edit-modal1-width modal-content">
      <!-- <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div> -->
      <div class="modal-body">

<div class="">
  <section id="content">
<button type="button" class="close close-btn-class" data-dismiss="modal">&times;</button>
    <form action="">
      <h1>ELevator Pitch</h1>
      <div>
        <textarea id="elevator_pitch" type="text"></textarea>
      </div>
      
      <div>
    <input class="pull-right" type="button" id="update_elevator" value="Submit" />
       
      </div>
    </form><!-- form -->
   
  </section><!-- content -->
</div><!-- container -->
      </div>
      
    </div>

  </div>
</div>



<div class="modal fade" id="watwedoModal" role="dialog">
    <div align="center" class="modal-dialog">
    
      <!-- Modal content-->
      <div class="edit-modal4-width modal-content">
        <!-- <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Images Or Videos</h4>
        </div> -->
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      
  <label class="radio-inline">
      <input type="radio" value="yes" checked name="optradio">image
    </label>
    <label class="radio-inline">
      <input type="radio" value="no" name="optradio">youtube url
    </label>
   
<div id="image_tab" class="image_tab_style">
   <input type="file" id="watwedo_pic" onchange="startup_watwedo()" title='Click to add Files' >

  <img id="display_pic" style="height:100px; width:100px" src="https://media.glassdoor.com/sql/456666/great-little-box-company-squarelogo-1448432988828.png">
      <input type="hidden" name="hidden_image" id="hidden_image" name="" value="">

</div>
<div id="url_tab" class="url_tab_style" style="display:none; padding-top: 80px;">
        <input type="text" placeholder="Enter youtube url" value="" required="" id="youtube_url" />

</div>
<input type="submit" class="submit-btn submit-btn-align" value="submit" id="update_watwedo" data-member="" data-company="" class="btn btn-md pull-right">
                    
        </div>


        
      </div>
      
    </div>
  </div>



<script>


function modal(elm){

  
  $('#update_watwedo').attr('data-member',$(elm).attr('data-member'))
  $('#update_watwedo').attr('data-company',$(elm).attr('data-company'))
  
$('#watwedoModal').modal({ show: true });

}

  $('#myCarousel').carousel({
                interval: 500000
        });

        $('#carousel-text').html($('#slide-content-0').html());

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click( function(){
                var id_selector = $(this).attr("id");
                var id = id_selector.substr(id_selector.length -1);
                var id = parseInt(id);
                $('#myCarousel').carousel(id);
        });


        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid', function (e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
</script>




 <script src="<?php echo URL::asset('/js/company_profile.js') ?>"></script>

@stop