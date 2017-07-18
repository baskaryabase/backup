
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
        <title>Home-Startupsclub</title>
    <!-- Bootstrap core CSS -->
     <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"><link href="<?php echo URL::asset('/css/animate.min.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/cover.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/forms.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/buttons.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">
     <link href="<?php echo URL::asset('/css/toastr.min.css') ?>" rel="stylesheet" type="text/css">

          <script src="<?php echo URL::asset('/js/jquery.1.11.1.min.js') ?>"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>
          <script src="<?php echo URL::asset('/js/toastr.min.js') ?>"></script>
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
    <!-- Begin page content -->
    <div class="container page-content ">
      <div class="row">
        <!-- left links -->
        <div class="col-md-3">
          <div class="profile-nav">
            <div class="widget">
              <div class="widget-body">
                <div class="user-heading round" style="cursor:pointer;" onclick="myprofilehref('<?php echo '/profile/'.$details['sc_unique_name'] ?>');">
                  <a href="<?php echo '/profile/'.$details['sc_unique_name'] ?>">
                      <img src="<?php echo $details['sc_profile_pic'] ?>" alt="">
                  </a>
                  <h1>{{ $details['sc_fullname'] }}</h1>
                  <p>@<?php echo $details['sc_unique_name'] ?></p>
                </div>
                <input type="hidden" id="role"  value="{{ session()->get('role') }}"> 
  <input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
                <ul class="nav nav-pills nav-stacked">
                  <li class="active"><a href="#"> <i class="fa fa-user"></i> News feed</a></li>
                  <li>
                    <a href="/messages"> 
                      <i class="fa fa-envelope"></i> Messages 
                      <!-- <span class="label label-info pull-right r-activity">9</span> -->
                    </a>
                  </li>
                  <li><a href="http://startupsclub.org/monthly-meetings/"> <i class="fa fa-calendar"></i> Events</a></li>
                  <li><a href="/find"> <i class="fa fa-share"></i> Find</a></li>
                  <li><a href="#"> <i class="fa fa-image"></i> Ask</a></li>
                  
                 <!--  <li><a href="#"> <i class="fa fa-floppy-o"></i> Saved</a></li> -->
                </ul>
              </div>
            </div>

            <div class="widget">
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
          <!-- Friends activity -->
          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption">Friends activity</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">
              <div class="card">
                <div class="content">
                   <ul class="list-unstyled team-members">
                    <li>
                      <div class="row">
                        <div class="col-xs-3">
                          <div class="avatar">
                              <img src="img/Friends/woman-2.jpg" alt="img" class="img-circle img-no-padding img-responsive">
                          </div>
                        </div>
                        <div class="col-xs-9">
                          <b><a href="#">Hillary Markston</a></b> shared a 
                          <b><a href="#">publication</a></b>. 
                          <span class="timeago" >5 min ago</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="row">
                        <div class="col-xs-3">
                          <div class="avatar">
                              <img src="img/Friends/woman-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                          </div>
                        </div>
                        <div class="col-xs-9">
                          <b><a href="#">Leidy marshel</a></b> shared a 
                          <b><a href="#">publication</a></b>. 
                          <span class="timeago" >5 min ago</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="row">
                        <div class="col-xs-3">
                          <div class="avatar">
                              <img src="img/Friends/woman-4.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                          </div>
                        </div>
                        <div class="col-xs-9">
                          <b><a href="#">Presilla bo</a></b> shared a 
                          <b><a href="#">publication</a></b>. 
                          <span class="timeago" >5 min ago</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="row">
                        <div class="col-xs-3">
                            <div class="avatar">
                                <img src="img/Friends/woman-4.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                            </div>
                        </div>
                        <div class="col-xs-9">
                          <b><a href="#">Martha markguy</a></b> shared a 
                          <b><a href="#">publication</a></b>. 
                          <span class="timeago" >5 min ago</span>
                        </div>
                      </div>
                    </li>
                  </ul>         
                </div>
              </div>
            </div>
          </div><!-- End Friends activity -->

          <!-- People You May Know -->
          <div class="widget">
            <div class="widget-header">
              <h3 class="widget-caption">People You May Know</h3>
            </div>
            <div class="widget-body bordered-top bordered-sky">
              <div class="card">
                  <div class="content">
                      <ul class="list-unstyled team-members">
                          <li>
                              <div class="row">
                                  <div class="col-xs-3">
                                      <div class="avatar">
                                          <img src="img/Friends/guy-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                      </div>
                                  </div>
                                  <div class="col-xs-6">
                                     Carlos marthur
                                  </div>
                      
                                  <div class="col-xs-3 text-right">
                                      <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user-plus"></i></btn>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-xs-3">
                                      <div class="avatar">
                                          <img src="img/Friends/woman-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                      </div>
                                  </div>
                                  <div class="col-xs-6">
                                      Maria gustami
                                  </div>
                      
                                  <div class="col-xs-3 text-right">
                                      <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user-plus"></i></btn>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="row">
                                  <div class="col-xs-3">
                                      <div class="avatar">
                                          <img src="img/Friends/woman-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                      </div>
                                  </div>
                                  <div class="col-xs-6">
                                      Angellina mcblown
                                  </div>
                      
                                  <div class="col-xs-3 text-right">
                                      <btn class="btn btn-sm btn-azure btn-icon"><i class="fa fa-user-plus"></i></btn>
                                  </div>
                              </div>
                          </li>
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
