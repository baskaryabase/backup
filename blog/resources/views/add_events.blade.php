   @extends('layouts.adminMaster')
   @section('content')
<?php
/*  echo '<pre>';
      print_r($users);
echo '</pre>';
      die;*/ 
?> 
 
      <link href="<?php echo URL::asset('/admin/css/bootstrap3-wysihtml5.min.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/datepicker3.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/bootstrap-timepicker.min.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/datepicker3.css') ?>" rel="stylesheet" type="text/css">
      <link href="<?php echo URL::asset('/admin/css/select2.min.css') ?>" rel="stylesheet" type="text/css">

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Events
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Add Events</li>
      </ol>
    </section>
   <section class="content">
   <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Event Details</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Event Title:</label>
                  <input type="text" class="form-control" id="event_title" placeholder="Enter ...">
                </div>
                    <div class="form-group">
                <label>Event Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="event_date">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                  <label>Event cost:</label>
                  <input type="text" class="form-control" id="event_cost" placeholder="Enter ...">
                </div>
           <div class="bootstrap-timepicker">
             <div class="form-group">
                  <label>Event Time:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" id="event_time">

                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
<div class="col-md-6">
              <div class="form-group">
                  <label>Event City:</label>
                  <input type="text" class="form-control" id="event_city" placeholder="Enter ...">
                </div>
                    <div class="form-group">
                  <label>Event Venue:</label>
                  <input type="text" class="form-control" id="event_venue" placeholder="Enter ...">
                </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">
             <div class="form-group">
                  <label>Event Category:</label>
                  <select class="form-control" id="event_category">
                    <option selected disabled >Select Category</option>
                    <option>Finance</option>
                    <option>Technology</option>
                    <option>Business Development</option>
                  </select>
                </div>
                    <div class="form-group">
                  <label>Event Speaker:</label>

<select id="event_speaker" class="form-control select2" multiple="multiple" data-placeholder="Select a Speaker" style="width: 100%;">
              <?php foreach ($speakers as $key=>$value) { 
 ?>
<option type="checkbox" value="{{ $value['speaker_name'] }}">{{ $value['speaker_name'] }}</option>
<?php } ?>
                </select>
            </div>
              <!-- /.form-group -->
            </div>

          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
     
            <div class="box-header">
              <h3 class="box-title">Event content
                <!-- <small>Simple and fast</small> -->
              </h3>
         
            </div>
            <div class="box-body pad">
              <form>
                <textarea id="event_content" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
 <div class="box-footer">
<div class="col-xs-3">
              <button id="save_events"  class="btn btn-block btn-primary btn-lg" type="button">Save Events</button>
            </div>            
          </div>

          </div>

 </section>
  </div>








 <script src="<?php echo URL::asset('/admin/js/bootstrap3-wysihtml5.all.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/bootstrap-datepicker.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/bootstrap-timepicker.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/select2.full.min.js') ?>"></script>

<script>
  $(function () {
   
    $(".textarea").wysihtml5();
  });

  $('#event_date').datepicker({
      autoclose: true
    });
  $(".timepicker").timepicker({
      showInputs: false
    });

   $(".select2").select2();
</script>
  @stop