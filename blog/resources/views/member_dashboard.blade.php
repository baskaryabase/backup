       @extends('layouts.MemberAdminMaster')
         @section('title')
    <title>Home | Member Platform | Startups Club</title> 
   @stop
  @section('header')
@include('layouts.header')
@stop

   @section('content')

  <div class="row">
        <div class="col-xs-12">
          
          <div class="box" style="top:30px;">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>

      
            <div class="box-header with-border">
              <h3 class="box-title">Upcoming Events</h3>
               
            </div>
            
            <!-- /.box-body -->
    
          
            <!-- /.box-header -->
            <div class="box-body">
              <div id="filtered_append">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Location</th>
                  <th>Rsvp</th>
                  <th>Action</th>
                
                  
                </tr>
                </thead>
      
                <tfoot>
                <tr>
            
                 <th>S.no</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Location</th>
                  <th>Rsvp</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
              <div class="box-header with-border">
              <h3 class="box-title">Past</h3>
               
            </div>
            
            <!-- /.box-body -->
    
          
            <!-- /.box-header -->
            <div class="box-body">
              <div id="filtered_append">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Location</th>
                  <th>Rsvp</th>
                  <th>Action</th>
                
                  
                </tr>
                </thead>
      
                <tfoot>
                <tr>
            
                 <th>S.no</th>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Location</th>
                  <th>Rsvp</th>
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

@stop