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
                  <input type="text" id="speaker_name" value="{{ $speakers['details']['speaker_name'] }}" class="form-control" placeholder="Enter ...">
                </div>
                     <div class="form-group">
                  <label>Designation:</label>
                  <input type="text" id="speaker_desn" value="{{ $speakers['details']['speaker_desn'] }}" class="form-control" placeholder="Enter ...">
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                  <label>Bio:</label>
                  <input type="text" id="speaker_bio" value="{{ $speakers['details']['speaker_bio'] }}" class="form-control" placeholder="Enter ...">
                </div>
           <div class="form-group">
                  <label>Company name:</label>
                  <input type="text" id="speaker_cname" value="{{ $speakers['details']['speaker_cname'] }}" class="form-control" placeholder="Enter ...">
                </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
<div class="col-md-6">
              <div class="form-group">
                  <label>Linkedin profile link:</label>
                  <input type="text" class="form-control" value="{{ $speakers['details']['speaker_llink'] }}" id="speaker_llink" placeholder="Enter ...">
                </div>
                     <div class="form-group">
                  <label>Awards:</label>
                  <?php $i=0;
                  foreach ($speakers['metas']['awards'] as $key => $value) {
                  
                ?>
                    <div class="input_fields_wrap">
                    <div class="col-md-11">
                           
          <input type="text" name="awards[]"  id="awards" value="{{ $value['meta_data'] }}" placeholder="Enter Awards"  class="form-control">      </div>
      
     <?php if($i == 0){ ?>
      <div class="col-md-1">
    <button class="btn-link  add_field_button pull-right"><i class="fa fa-plus-circle" title="Add Contact Number"></i></button>
  </div>
  <?php }else{ ?>
  <a class="remove_field1 btn-link" href="#" ><i class="fa fa-minus-circle" title="Remove Mobile Number"></i></a>
  <?php } ?>
  </div>
  <div class="clearfix"></div>
         <?php $i++; } ?>       
                </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">
             <div class="form-group">
                  <label>Twitter profile Link:</label>
                  <input type="text" class="form-control" id="speaker_tlink" value="{{ $speakers['details']['speaker_tlink'] }}" placeholder="Enter ...">
                
                </div>

                    <div class="form-group">
                  <label>Recognition:</label>
                   <?php $i=0;
                  foreach ($speakers['metas']['recognition'] as $key => $value) {
                  
                ?>
                    <div class="input_fields_wrap1">
                    <div class="col-md-11">
                           
          <input type="text" name="recognition[]" value="{{ $value['meta_data'] }}" id="awards" placeholder="Enter Recognition"  class="form-control">      </div>
      
        <?php if($i == 0){ ?>
      <div class="col-md-1">
    <button class="btn-link  add_field_button1 pull-right"><i class="fa fa-plus-circle" title="Add Contact Number"></i></button>
  </div>
    <?php }else{ ?>
  <a class="remove_field btn-link" href="#" ><i class="fa fa-minus-circle" title="Remove Mobile Number"></i></a>

    <?php  } ?>
  </div>

  <?php $i++; } ?>
  <div class="clearfix"></div>
                
                </div>
                 
                 
            </div>

<div class="col-md-6">
         
                   <div class="form-group">
                  <label for="exampleInputFile">Speaker Photo</label>
                  <input type="file" id="speaker_profile">
<input type="hidden" id="hidden_speaker_image"  value="{{ $speakers['details']['speaker_image'] }}" >
                </div>
              <!-- /.form-group -->
            </div>

<div class="col-md-12" style="text-align: center">
            <img id="display_speaker_pic"  src="http://dev.startupsclub.org/image/speakers/{{ $speakers['details']['speaker_image'] }}" height="100" width="100">


          </div>
          </div
>          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        
     
       
 <div class="box-footer">
<div class="col-xs-3">
              <button id="update_speaker" data-id="{{ $speakers['details']['speaker_id'] }}"  class="btn btn-block btn-primary btn-lg" type="button">update Speaker</button>
            </div>            
          </div>

          </div>

 </section>
  </div>









  @stop