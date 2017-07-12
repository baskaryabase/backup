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
     <link href="<?php echo URL::asset('/css/timeline.css') ?>" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <script src="<?php echo URL::asset('/admin/js/jquery-2.2.3.min.js') ?>"></script>
<script src="<?php echo URL::asset('/js/loader.js') ?>"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header>
    @section('header')
        @show
  </header>

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ session()->get('profile_pic') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ session()->get('full_name') }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
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
            <li class="active"><a><i class="fa fa-circle-o"></i> View members</a></li>
            <li><a><i class="fa fa-circle-o"></i> Create Members</a></li>
          </ul>
        </li>


        </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<input type="hidden" id="hidden_token" name="_token" value="{{ csrf_token() }}">
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Members
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Members</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       @yield('content')
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<div id="followup_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Follow up</h4>
      </div>
      
        <!-- Chat box -->
          <div class="box box-success">
               <div class="box-header">
              

              <h3 class="box-title"></h3>
            </div>
            
           <div id="follow_up_append_data">
          </div>
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" id="followup_text" placeholder="Type followup comment...">

                <div class="input-group-btn">
                  <button type="button" data-parent="" id="send_followup" onclick="send_followup(this)" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
        
          <!-- /.box (chat box) -->
    
    </div>

  </div>
</div>
</div>



<div id="sold_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sold</h4>
      </div>
      <div class="modal-body">
 <div id="sold_append_data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" data-parent="" class="btn btn-default" id="update_sold">Update</button>
      </div>
    </div>

  </div>
</div>

 
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
