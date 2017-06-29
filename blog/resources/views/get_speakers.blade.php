  @extends('layouts.adminMaster')
   @section('content')
<?php
/*  echo '<pre>';
      print_r($users);
echo '</pre>';
      die;*/
?>
     <link href="<?php echo URL::asset('/css/jquery-confirm.css') ?>" rel="stylesheet" type="text/css">
          <script src="<?php echo URL::asset('/js/jquery-confirm.js') ?>"></script>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Speakers
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">All Speakers</li>
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
              <button onclick="window.location='/admin/add_speaker';"  class="btn btn-block btn-primary btn-lg" type="button">Add</button>
            </div>
         
        
            <!-- /.box-header -->
            <div class="box-body">
              <div id="filtered_append">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Speaker Name</th>
              
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
<?php  $i=1; foreach ($speakers as $key => $value) {


 ?>
 <tr>
<td>{{ $i }}</td>
<td>{{ $value['speaker_name'] }}</td>

<td>
  <a href="edit_speaker/{{ $value['speaker_id'] }}" >Edit</a>
  <a data-id="{{ $value['speaker_id'] }}"  onclick="delete_speaker(this)">Delete</a>
</td>
</tr>
 <?php $i++; } ?>
                </tbody>
                <tfoot>
                <tr>
             <th>S.no</th>
                  <th>Speaker Name</th>       
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