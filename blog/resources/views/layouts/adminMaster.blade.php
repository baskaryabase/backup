<!DOCTYPE html>
<html> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width --> 
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
   <link href="<?php echo URL::asset('/font-awesome.4.6.1/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/skins/_all-skins.min.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/dataTables.bootstrap.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/css/jquery.multiselect.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/css/daterangepicker.css') ?>" rel="stylesheet" type="text/css">
 <link rel="icon" href="<?php echo URL::asset('/image/use.png') ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <script src="<?php echo URL::asset('/admin/js/jquery-2.2.3.min.js') ?>"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="<?php echo URL::asset('/js/loader.js') ?>"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="<?php echo URL::asset('/image/logo_head.png') ?>"></img></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="<?php echo URL::asset('/image/logo_head.png') ?>"></img></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

        
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{ session()->get('profile_pic') }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{ session()->get('full_name') }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="{{ session()->get('profile_pic') }}" class="img-circle" alt="User Image">

                <p>
                  {{ session()->get('full_name') }}
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile/{{ session()->get('unique_name') }}" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ session()->get('profile_pic') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ session()->get('full_name') }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="/admin/allmembers">
            <i class="fa fa-dashboard"></i> <span>Members</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/admin/allmembers"><i class="fa fa-circle-o"></i> View members</a></li>
            <li><a href="/admin/admin_create"><i class="fa fa-circle-o"></i> Create Members</a></li>
          </ul>
        </li>

        <li class="active treeview">
          <a href="/admin/announcements">
            <i class="fa fa-dashboard"></i> <span>Announcements</span>
         
          </a>
        
        </li>
          <li class="active treeview">
          <a href="/admin/member-partner-logo">
            <i class="fa fa-dashboard"></i> <span>Member Partner Logo</span>
         
          </a>
        
        </li>
          <li class="active treeview">
          <a href="/admin/events">
            <i class="fa fa-dashboard"></i> <span>Events</span>
         
          </a>
         <ul class="treeview-menu">
            <li class="active"><a href="/admin/add_event"><i class="fa fa-circle-o"></i> Add Events</a></li>
            <li><a href="/admin/events"><i class="fa fa-circle-o"></i> View Events</a></li>
          </ul>
        </li>
           <li class="active treeview">
          <a href="/admin/speakers">
            <i class="fa fa-dashboard"></i> <span>Knowledge Sessions</span>
         
          </a>
        <ul class="treeview-menu">
            <li class="active"><a href="/admin/add_speaker"><i class="fa fa-circle-o"></i> Add Knowledge Sessions</a></li>
            <li><a href="/admin/speakers"><i class="fa fa-circle-o"></i> View Knowledge Sessions</a></li>
          </ul>
        </li>
                <li class="active treeview">
          <a href="/admin/speakers">
            <i class="fa fa-dashboard"></i> <span>Speakers</span>
         
          </a>
        <ul class="treeview-menu">
            <li class="active"><a href="/admin/add_speaker"><i class="fa fa-circle-o"></i> Add Speaker</a></li>
            <li><a href="/admin/speakers"><i class="fa fa-circle-o"></i> View speakers</a></li>
          </ul>
        </li>
        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
   @yield('content')   
 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.12
    </div>
    <strong>Copyright 2017 Startups Club Services Pvt Ltd.</strong> All rights
    reserved.
  </footer>


</div>




<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>


<!-- Bootstrap 3.3.7 -->
  <script src="<?php echo URL::asset('/bootstrap.3.3.6/js/bootstrap.min.js') ?>"></script>
 
   <script src="<?php echo URL::asset('/admin/js/dataTables.bootstrap.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/jquery.dataTables.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/jquery.dataTables.min.js') ?>"></script>

 <script src="<?php echo URL::asset('/js/jquery.multiselect.js') ?>"></script>
  <script src="<?php echo URL::asset('/js/moment.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/js/daterangepicker.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/custom_admin.js') ?>"></script>


</body>
</html>
