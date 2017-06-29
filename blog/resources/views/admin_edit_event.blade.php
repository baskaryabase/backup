  @extends('layouts.adminMaster')
   @section('content')
<?php
/*  echo '<pre>';
      print_r($details);
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
        Edit Events
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Edit Events</li>
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
                  <input type="text" class="form-control" value="{{ $details['event']['event_title'] }}" id="event_title" placeholder="Enter ...">
                </div>
                    <div class="form-group">
                <label>Event Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" value="{{ date('m/d/Y',strtotime($details['event']['event_date'])) }}" class="form-control pull-right" id="event_date">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                  <label>Event cost:</label>
                  <input type="text" class="form-control" value="{{ $details['event']['event_cost'] }}" id="event_cost" placeholder="Enter ...">
                </div>
           <div class="bootstrap-timepicker">
             <div class="form-group">
                  <label>Event Time:</label>

                  <div class="input-group">
                    <input type="text" class="form-control timepicker" value="{{ $details['event']['event_time'] }}" id="event_time">

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
                  <input type="text" class="form-control" id="event_city" value="{{ $details['event']['event_city'] }}" placeholder="Enter ...">
                </div>
                    <div class="form-group">
                  <label>Event Venue:</label>
                  <input type="text" class="form-control" id="event_venue" value="{{ $details['event']['event_venue'] }}" placeholder="Enter ...">
                </div>
              <!-- /.form-group -->
            </div>
<?php $category_array=array('Speaker Session','Interactive session','Amongster'); ?>
            <div class="col-md-6">
             <div class="form-group">
                  <label>Event Category:</label>
                  <select class="form-control" id="event_category">
                    <option disabled >Select Category</option>
                    <?php foreach ($category_array as $cvalue) {
                    
                     
                   ?>
                    <option <?php echo ($cvalue==$details['event']['event_category'])?'selected':''; ?>>{{ $cvalue }}</option>
                   <?php } ?> 
                  </select>
                </div>
                    <div class="form-group">
                  <label>Event Speaker:</label>

<select id="event_speaker" class="form-control select2" multiple="multiple" data-placeholder="Select a Speaker" style="width: 100%;">
              <?php foreach ($details['speakers'] as $key=>$value) { 
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
                <textarea id="event_content" value="{{ $details['event']['event_content'] }}" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
 <div class="box-footer">
<div class="col-xs-3">
              <button id="update_events" data-id="{{ $details['event']['event_id'] }}"  class="btn btn-block btn-primary btn-lg" type="button">Update Events</button>
            </div>            
          </div>

          </div>
    <input type="hidden" id="hidden_content"  value="{{ $details['event']['event_content'] }}">
    <input type="hidden" id="hidden_date"  value="{{ $details['event']['event_date'] }}">
    <input type="hidden" id="hidden_speaker"  value="{{ $details['event']['event_speaker'] }}">

 </section>
  </div>








 <script src="<?php echo URL::asset('/admin/js/bootstrap3-wysihtml5.all.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/bootstrap-datepicker.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/bootstrap-timepicker.min.js') ?>"></script>
 <script src="<?php echo URL::asset('/admin/js/select2.full.min.js') ?>"></script>

<script>
  $(function () {
   
    $(".textarea").wysihtml5();
     $(".textarea").val($('#hidden_content').val());
  });

  $('#event_date').datepicker({
    
      autoclose: true
    });
  $('#event_date').datepicker('setDate', new Date($('#hidden_date').val()));
$('#event_date').datepicker('update');
  $(".timepicker").timepicker({
      showInputs: false
    });
var selectedValues=$('#hidden_speaker').val().split(',')
   $(".select2").select2();
  
   $(".select2").val(selectedValues).trigger('change');

</script>
  @stop