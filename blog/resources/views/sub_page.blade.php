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
   <link href="<?php echo URL::asset('/css/edit.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/js_composer.min.css') ?>" rel="stylesheet" type="text/css">

  <body>
    <section class="container full-body">
      <div class="main-div">
        <div class="max-card">
          <div class="row">
            <div class="col-sm-8 col-xs-8">
              <div class="promotion-header" style="display: flex;">
                <input type="text" name="email" id="email" class="form-control input-md" placeholder="Company name"> <a href="#" class="icon"><i class="fa fa-pencil" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-sm-4 col-xs-4">
              <img src="https://www.csufablab.org/wp-content/uploads/2017/05/vistaprint-free-logo-design-company-logo-designer-free-download-download-free-logo-design-logo-fonts-100x100.jpg">
              <a href="#" class="icon"><i class="fa fa-pencil" aria-hidden="true"></i>
              
            </div>
          </div>
        </div>
      </div>
         <style>
            input#email{
                width: 71%;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0;
    box-shadow: 0 0;
            }
         </style> 
      <div class="container-fluid">
        <div class="row add" style="color: #000;">
          <div class="col-sm-4" style="padding-left: 10%;">
            <!-- <label for="email">Location:</label> -->
                <input type="text" name="email" id="locate" class="form-control input-md" placeholder="Location">
  
            <br>
            <!-- <label for="denger">no. of employees:</label> -->
                <select name="gender" id="gender" class="form-control input-md"><option value="male">51-200</option><option value="female">200-400</option></select>
   
          </div>
          <div class="col-sm-4" style="padding-left: 10%;">
            <!-- <label for="name">Industry:</label> -->
                <input type="text" name="name" id="name" class="form-control input-md" placeholder="Industry">
                     
            <br>
            <!-- <label for="denger">stage</label> -->
                    <select name="gender" id="gender" class="form-control input-md"><option value="male">meet</option><option value="female">Growth</option></select>

          </div>
          <div class="col-sm-4">
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="#"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/548c1294e4b03603dc2c67f0.jpg" style="height: 40px; width: 40px;"></a></li>
              <li><a class="faicon-twitter" href="#"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/voqzx01cvgk5reqqgcz8.jpg" style="height: 40px; width: 40px;"></a></li>
              <li><a class="faicon-linkedin" href="#"><img src="http://tintation.com/wp-content/uploads/iphone-apps/iphone-apps-icon-5.jpg" style="height: 40px; width: 40px;"></a></li>
            </ul>
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
        <div style="margin-left: 8%; margin-right: 8%;">
            <textarea rows="5" name="about" id="about" class="form-control input-lg"></textarea>
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
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Jewelry-sets-2.jpg" style="width: 937px;">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/earrings.png" style="width: 937px;">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Ring-2.jpg" style="width: 937px;">
            <iframe width="937" height="336" src="https://www.youtube.com/embed/WDjd1piOMZQ" frameborder="0" allowfullscreen></iframe>
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Jewelry-sets-2.jpg" style="width: 937px;">
          </div>
          <div class="small-images" style="text-align: center; background: #f2f2f2; margin-right: 113px; height: 131px;">
            <img src="http://lorempixel.com/100/50/sports/1/" id="img" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/fashion/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/city/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/city/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/city/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
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
                <a href="#"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Vivek-150x150.jpg">
              </div>
              <div class="col-sm-4 col-xs-8" style="border-right: 1px solid #d2d2d2;">
                <a class="profile-link" href="#">Vivek Srinivasan</a>
                <p class="role_title">Founder</p> 
                <p class="bio">Founder of Startups club.</p> 
              </div>
            </div>
            <div class="second">
              <div class="col-sm-2 col-xs-4">
                <a href="#"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg">
              </div>
              <div class="col-sm-4 col-xs-8">
                <a class="profile-link" href="#">Salma Moosa</a>
                <p class="role_title">Founder</p> 
                <p class="bio">Founder of Startups club.</p> 
              </div>
            </div>
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



















