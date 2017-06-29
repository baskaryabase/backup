   @extends('layouts.adminMaster')
   @section('content')
<?php
/*  echo '<pre>';
      print_r($users);
echo '</pre>';
      die;*/
?>
      <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Events
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">All Events</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
<div class="col-xs-3" style="float:right">
              <button onclick="window.location='/admin/add_event';"  class="btn btn-block btn-primary btn-lg" type="button">Add</button>
            </div>
         
        
            <!-- /.box-header -->
            <div class="box-body">
              <div id="filtered_append">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Event Title</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
<?php  $i=1; foreach ($events as $key => $value) {

 
 ?>
 <tr>
<td>{{ $i }}</td>
<td>{{ $value['event_title'] }}</td>
<td>              <div class="form-group">
                <label>
                  <input type="radio" name="{{ $key }}" class="flat-red event_status" value="1" data-id="{{ $value['event_id'] }}" <?php echo ($value['event_status']==1)?'checked':''; ?>>
                  show
                </label>
                <label>
                  <input type="radio" name="{{ $key }}" class="flat-red event_status" value="0" data-id="{{ $value['event_id'] }}" <?php echo ($value['event_status']==0)?'checked':''; ?>>
                  hide
                </label>
              </div> 
</td>
<td>
  <a href="/admin/edit_event/{{ $value['event_id'] }}">Edit</a>
  <a href="#" onclick="delete_event({{ $value['event_id'] }})">Delete</a>
</td>
</tr>
 <?php $i++; } ?>
                </tbody>
                <tfoot>
                <tr>
             <th>S.no</th>
                  <th>Event Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>



          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>

  @stop