  @extends('layouts.adminMaster')
   @section('content')
<?php
/*  echo '<pre>';
      print_r($speakers);
echo '</pre>';
      die;*/
?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Speaker
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Add Speaker</li>
      </ol>
    </section>
   <section class="content">
   <div class="box box-default">
       
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label>Name:</label>
                  <input type="text" id="speaker_name" value="{{ $speakers['speaker_name'] }}" class="form-control" placeholder="Enter ...">
                </div>
                     <div class="form-group">
                  <label>Designation:</label>
                  <input type="text" id="speaker_desn" value="{{ $speakers['speaker_desn'] }}" class="form-control" placeholder="Enter ...">
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                  <label>Bio:</label>
                  <input type="text" id="speaker_bio" value="{{ $speakers['speaker_bio'] }}" class="form-control" placeholder="Enter ...">
                </div>
           <div class="form-group">
                  <label>Company name:</label>
                  <input type="text" id="speaker_cname" value="{{ $speakers['speaker_cname'] }}" class="form-control" placeholder="Enter ...">
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
<div class="col-md-6">
              <div class="form-group">
                  <label>Linkedin profile link:</label>
                  <input type="text" class="form-control" value="{{ $speakers['speaker_llink'] }}" id="speaker_llink" placeholder="Enter ...">
                </div>
                   <div class="form-group">
                  <label for="exampleInputFile">Speaker Photo</label>
                  <input type="file" id="speaker_profile">
<input type="hidden" id="hidden_speaker_image"  value="{{ $speakers['speaker_image'] }}" >
                </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">
             <div class="form-group">
                  <label>Twitter profile Link:</label>
                  <input type="text" class="form-control" id="speaker_tlink" value="{{ $speakers['speaker_tlink'] }}" placeholder="Enter ...">
                
                </div>
                 
                 
            </div>
<div class="col-md-12" style="text-align: center">
            <img id="display_speaker_pic"  src="http://dev.startupsclub.org/image/speakers/{{ $speakers['speaker_image'] }}" height="100" width="100">


          </div>
          </div
>          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
     
       
 <div class="box-footer">
<div class="col-xs-3">
              <button id="update_speaker" data-id="{{ $speakers['speaker_id'] }}"  class="btn btn-block btn-primary btn-lg" type="button">update Speaker</button>
            </div>            
          </div>

          </div>

 </section>
  </div>









  @stop