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
   <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/common.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/comp_pro.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/js_composer.min.css') ?>" rel="stylesheet" type="text/css">

  <body>
    <section class="container full-body">
      <div class="main-div">
        <div class="max-card">
          <div class="row">
            <div class="col-sm-8 col-xs-8">
              <div class="promotion-header">
                Startupsclub pvt limited 
                <a href="http://dev.startupsclub.org/try" class="try"><i class="fa fa-pencil" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="col-sm-4 col-xs-4">
              <img src="https://media.glassdoor.com/sql/456666/great-little-box-company-squarelogo-1448432988828.png" class="img-responsive">
              <a href="http://dev.startupsclub.org/try" class="try"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>
          
      <div class="container-fluid">
        <div class="row add" style="color: #000;">
          <div class="col-sm-4" style="padding-left: 10%;">
            <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 3px;"></i>
            <a class="tag" href="https://angel.co/san-francisco" style="color: #000;">Bangalore</a>
            <br>
            <i class="fa fa-users" aria-hidden="true" style="margin-right: 3px;"></i>
            <span>51-200 employees</span>    
          </div>
          <div class="col-sm-4" style="padding-left: 10%;">
            <i class="fa fa-industry" aria-hidden="true" style="margin-right: 3px;"></i>
            <span>digital marketing</span>  
            <br>
            <i class="fa fa-building-o" aria-hidden="true" style="margin-right: 3px;"></i>
            <span>stage</span> 
          </div>
          <div class="col-sm-4">
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="#"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/548c1294e4b03603dc2c67f0.jpg" style="height: 30px; width: 30px;"></a></li>
              <li><a class="faicon-twitter" href="#"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/voqzx01cvgk5reqqgcz8.jpg" style="height: 30px; width: 30px;"></a></li>
              <li><a class="faicon-linkedin" href="#"><img src="http://tintation.com/wp-content/uploads/iphone-apps/iphone-apps-icon-5.jpg" style="height: 30px; width: 30px;"></a></li>
            </ul>
            <a href="http://startupsclub.org/"><span style="margin-left: 39px;">www.startupsclub.org</span></a>
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
          <div class="wpb_wrapper">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
        <div class="sheet4">
          <div id="big-image">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Jewelry-sets-2.jpg">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/earrings.png">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Ring-2.jpg">
            <iframe width="937" height="336" src="https://www.youtube.com/embed/WDjd1piOMZQ" frameborder="0" allowfullscreen></iframe>
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Jewelry-sets-2.jpg">
          </div>
          <div class="small-images">
            <img src="http://lorempixel.com/100/50/sports/1/" id="img"> <!-- style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;"> -->
            <img src="http://lorempixel.com/100/50/fashion/1/"> <!-- style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;"> -->
            <img src="http://lorempixel.com/100/50/city/1/"> <!-- style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;"> -->
            <img src="http://lorempixel.com/100/50/city/1/"> <!-- style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;"> -->
            <img src="http://lorempixel.com/100/50/city/1/"> <!-- style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;"> -->
            <img src="http://lorempixel.com/100/50/city/1/"> <!-- style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;"> -->
            <img src="http://lorempixel.com/100/50/city/1/"> <!-- style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;"> -->
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
                <a class="profile-link" href="#">Vivek Srinivasan</a>
                <p class="role_title">Founder</p> 
                <p class="bio">Startups club.</p> 
              </div>
              <div class="col-sm-2 col-xs-4">
                <img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg">
              </div>
              <div class="col-sm-4 col-xs-8">
                <a class="profile-link" href="#">Salma Moosa</a>
                <p class="role_title">Founder</p> 
                <p class="bio">Startups club.</p> 
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
  
<script>
  $(function(){
      $("#big-image img:eq(0)").nextAll().hide();
      $(".small-images img").click(function(e){
          var index = $(this).index();
          $("#big-image img").eq(index).show().siblings().hide();
      });
  });
</script>
<script>
  $(function(){
      $("#big-image iframe:eq(0)").nextAll().hide();
      $(".small-images #img").click(function(e){
          var index = $(this).index();
          $("#big-image iframe").eq(index).show().siblings().hide();
      });
  });
</script>


</body>

@stop