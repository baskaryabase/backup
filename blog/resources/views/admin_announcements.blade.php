  @extends('layouts.adminMaster')
   @section('content')
<?php
/*  echo '<pre>';
      print_r($users);
echo '</pre>';
      die;*/
?>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Announcements
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Announcements</li>
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
              <button onclick="add_announcements()"  class="btn btn-block btn-primary btn-lg" type="button">Add</button>
            </div>
         
        
            <!-- /.box-header -->
            <div class="box-body">
              <div id="filtered_append">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Announcements</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
<?php  $i=1; foreach ($data as $key => $value) {


 ?>
 <tr>
<td>{{ $i }}</td>
<td>{{ $value['announcement'] }}</td>
<td>              <div class="form-group">
                <label>
                  <input type="radio" name="{{ $key }}" class="flat-red announce_status" value="1" data-id="{{ $value['announce_id'] }}" <?php echo ($value['status']==1)?'checked':''; ?>>
                  show
                </label>
                <label>
                  <input type="radio" name="{{ $key }}" class="flat-red announce_status" value="0" data-id="{{ $value['announce_id'] }}" <?php echo ($value['status']==0)?'checked':''; ?>>
                  hide
                </label>
              </div> 
</td>
<td><a data-id="{{ $value['announce_id'] }}" data-value="{{ $value['announcement'] }}" onclick="edit_announcements(this)">Edit</a></td>
</tr>
 <?php $i++; } ?>
                </tbody>
                <tfoot>
                <tr>
             <th>S.no</th>
                  <th>Announcements</th>
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








<!-- Modal -->
<div id="announcement_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Announcements</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
  <label for="usr">Announcements:</label>
  <textarea class="form-control" rows="5" id="announce_value"></textarea>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" data-id=""  class="btn btn-primary" id="save_announcements">Add</button>
      </div>
    </div>

  </div>
</div>


  @stop