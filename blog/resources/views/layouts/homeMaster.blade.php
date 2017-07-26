   
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
     <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
     
     <link href="<?php echo URL::asset('/css/cover.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/forms.css') ?>" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="<?php echo URL::asset('/css/homepage_similar_events.css') ?>">
     <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/toastr.min.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/liveurl.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/owl.carousel/css/owl.carousel.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/owl.carousel/css/owl.theme.default.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">

          <script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/toastr.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/jquery.liveurl.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/parsley.min.js') ?>"></script>
          <script src="<?php echo URL::asset('/owl.carousel/js/owl.carousel.min.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>





  <body class="animated fadeIn">

      @section('header')
        @show
<?php
/*echo '<pre>';
print_r($details);
echo '</pre>';*/
 ?>

 <section>
    <div>
    <img class="header-img img-responsive" src="<?php echo URL::asset('/image/header2.jpg') ?>">
    <div align="center" class="header-content">
      <h1>Startups Club</h1>
      <h4>We are an Open, Collaborative and Inclusive platform for startups from Napkin Stage to Growth Stage. We work along with startups to help them with Knowledge, Growth and Investment. Come be a part of this dynamic community of more than 13,000 entrepreneurs present across more than 20 cities in India</h4>
      <br>
                      <?php if(empty(session()->get('SessionID'))){ ?>

      <a href="/edit-membership" style="color:inherit"><button class=" btn-lg hvr-bounce-to-right hvr-buzz-out">Become a Pioneer</button></a> 
    <?php } ?>
    </div>
    </div>
 </section>
  <!-- <div>
    <h2>Learn About Our Events</h2>
  </div> -->
<div style="position: relative; margin-top: 30px;width: 100%">
<div style="position: absolute;
            background: #fff;
            width: 100%;
            height: 315px;
            
            margin-top: -44px;"></div>
<div style="margin-right: 15px;
            margin-left: 15px;" class="owl-carousel row container">
  <?php foreach ($details['events'] as $key => $value) { 
$random_img=URL::asset('/image/events-default/'.rand(1,21).'.jpg');
?>
            <a class="eventCard--hasGroup" href="/single-events/{{ str_slug($value['event_title']) }}">
  <div class="eventCard-group inverted" style="background-image: url(<?php echo $random_img; ?>);">
    <h4 class="text--heavy text--big">{{ $value['event_title'] }}</h4>
  </div>

  <div class="eventCard-event chunk">
    <h5 class="text--small text--heavy">  
    <span style="height: 20px;"><i class="fa fa-map-marker">
      
    </i> {{ $value['event_venue'] }}</span>
    </h5>

    
  
  
                  
                   <span style="height: 40px;"><span><i class="fa fa-clock-o"></i> {{ date('jS F Y',strtotime($value['event_date'])) }}</span>
                    <span><i class="fa fa-globe" aria-hidden="true"></i> {{ $value['event_city'] }}</span></span>
                
               

  </div>
</a>
  
<?php } ?>

</div>
<div style="position: absolute;width: 100%; top: 110px;">
<button class="arrow left flickity-prev-next-button previous  customPrevBtn float-left" type="button" aria-label="previous">
  <svg viewBox="0 0 100 100" xml:space="preserve">
    <polyline fill="none" stroke="#000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="
  45.63,75.8 0.375,38.087 45.63,0.375 "/>
  </svg>  
</button>
<button class="arrow right flickity-prev-next-button next float-right customNextBtn" type="button" aria-label="next">
  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" xml:space="preserve">
    <polyline fill="none" stroke="#000" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" points="
  0.375,0.375 45.63,38.087 0.375,75.8 "/>
  </svg>
</button>
<!-- <button class="flickity-prev-next-button previous  customPrevBtn float-left" type="button" aria-label="previous">
<svg viewBox="0 0 100 100">
<path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow fill"></path></svg></button>

<button class="flickity-prev-next-button next float-right customNextBtn" type="button" aria-label="next"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow fill" transform="translate(100, 100) rotate(180) "></path></svg></button> -->
</div>
</div>


    <!-- Begin page content -->
<div style="margin-top: 80px;" class="container page-content ">
      <div class="row">
        <!-- left links -->
        <div class="col-md-3">
          <div class="profile-nav">
            <div class="widget">
              <div class="widget-body">
                <?php if(!empty(session()->get('SessionID'))){ ?>
                <div class="user-heading round" style="cursor:pointer;" onclick="myprofilehref('<?php echo '/profile/'.$details['sc_unique_name'] ?>');">
                  <a href="<?php echo '/profile/'.$details['sc_unique_name'] ?>">
                      <img src="<?php echo $details['sc_profile_pic'] ?>" alt="">
                  </a>
                  <h1>{{ $details['sc_fullname'] }}</h1>
                  <p>@<?php echo $details['sc_unique_name'] ?></p>
                </div>
                <?php } ?>
                <input type="hidden" id="role"  value="{{ session()->get('role') }}">
  <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#"> <i class="fa fa-user"></i> News feed</a></li>
                                  <?php if(!empty(session()->get('SessionID'))){ ?>
                  <li>
                    <a href="/messages">
                      <i class="fa fa-envelope"></i> Messages
                      <!-- <span class="label label-info pull-right r-activity">9</span> -->
                    </a>
                  </li>
                  <?php } ?>
                  <li><a href="http://startupsclub.org/monthly-meetings/"> <i class="fa fa-calendar"></i> Events</a></li>
                  <li><a href="/find"> <i class="fa fa-share"></i> Find</a></li>
                  <li><a href="#"> <i class="fa fa-image"></i> Ask</a></li>

                 <!--  <li><a href="#"> <i class="fa fa-floppy-o"></i> Saved</a></li> -->
                </ul>
              </div>
            </div>

       <div class="widget">
        <h4>Knowledge</h4>
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="http://startupsclub.org/knowledgesessions/" target="_blank"> <i class="fa fa-globe"></i> Knowledge Sessions</a></li>
                  <li><a href="http://startupsclub.org/black-box/"> <i class="fa fa-gamepad"></i> Mentoring</a></li>
                  <li><a href="http://startupsclub.org/demoday/" target="_blank"> <i class="fa fa-puzzle-piece"></i> Master Class</a></li>
                  <!-- <li><a href="#"> <i class="fa fa-home"></i> Markerplace</a></li>
                  <li><a href="#"> <i class="fa fa-users"></i> Groups</a></li> -->
                </ul>
              </div>
            </div>

            <div class="widget">
              <h4>Practice</h4>
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="http://startupsclub.org/monthly-meetings/" target="_blank"> <i class="fa fa-globe"></i> Monthly Meetups</a></li>
                  <li><a href="/edit-membership/"> <i class="fa fa-gamepad"></i> Pioneer Membership</a></li>
                  <li><a href="http://startupsclub.org/demoday/" target="_blank"> <i class="fa fa-puzzle-piece"></i> Demo Day</a></li>
                  <!-- <li><a href="#"> <i class="fa fa-home"></i> Markerplace</a></li>
                  <li><a href="#"> <i class="fa fa-users"></i> Groups</a></li> -->
                </ul>
              </div>
            </div>
             <div class="widget">
                <h4>Growth</h4>
              <div class="widget-body">
                <ul class="nav nav-pills nav-stacked">
                  <li><a href="http://startupsclub.org/virtual-footprints/" target="_blank"> <i class="fa fa-globe"></i> Digital Marketing</a></li>
                  <li><a href="http://startupsclub.org/member-partner/" target="_blank"> <i class="fa fa-gamepad"></i> Member Partner</a></li>
                  <li><a href="http://startupsclubpost.com/" target="_blank"> <i class="fa fa-puzzle-piece"></i> Startups Club Post</a></li>
                  <!-- <li><a href="#"> <i class="fa fa-home"></i> Markerplace</a></li>
                  <li><a href="#"> <i class="fa fa-users"></i> Groups</a></li> -->
                </ul>
              </div>
            </div>

          </div>
        </div><!-- end left links -->


   @yield('content')




        <!-- right posts -->
        <div class="col-md-3">
         <?php foreach ($details['ks'] as $key => $value) {
/*echo '<pre>';
print_r($value);
echo '</pre>';*/
  $speaker_img=URL::asset('/image/speakers/'.$value['ks_speaker_img']);
        ?>
         <div class="wrapper">
        
        <div class="card radius shadowDepth1">
          

          <div class="card__content card__padding">
                    
            <div class="card__meta">
                <span class="font-size-12">{{ date('jS F Y',strtotime($value['ks_date'])) }}</span><span class="pull-right font-size-12">{{ $value['ks_time'] }}</span>     
            </div>

            <article class="card__article">
              <h3 class="h2"><a href="#">{{ $value['ks_title'] }}</a></h3>

              <p>{{ substr(strip_tags($value['ks_event_details']),0,60) }}</p>
            </article>
          </div>

          <div class="card__action">
            
            <div class="card__author">
              <img style="height: 30px; width: 30px; " src="{{ $speaker_img }}" alt="user">
              <div class="card__author-content">
                By <a href="#">{{ $value['ks_speaker_name'] }}</a>
              </div>
            </div>
          </div>
        </div>

           
      </div>

      <?php } ?>
      




          <!-- People You May Know -->
          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption">Announcements</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">
              <div class="card">
                  <div class="content">
                      <ul class="list-unstyled team-members">
                           <?php foreach ($details['announce_array'] as $key => $value) {
                        ?>
                          <li>
                              <div class="row">
                                  <h5> {{ $value['announcement'] }} </h5>
                              </div>
                          </li>
                            <?php } ?>
                      </ul>
                  </div>
              </div>
            </div>
          </div><!-- End people yout may know -->


          
        </div><!-- end right posts -->
      </div>
    </div>

   @section('footer')
        @show
        <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/custom.js') ?>"></script>
   <script src="<?php echo URL::asset('/js/home.js') ?>"></script>

  </body>
</html>
