@extends('layouts.PlainHeaderFooter')
  @section('title')
  <title>Events | Member Platform | Startups Club</title> 
  @stop
  @section('header')
@include('layouts.header')
@stop
  @section('footer')
@include('layouts.footer')
@stop
   @section('content')
   <link href="<?php echo URL::asset('/bootstrap.3.3.6/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/common.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/company_profile.css') ?>" rel="stylesheet" type="text/css">
   <link href="<?php echo URL::asset('/css/js_composer.min.css') ?>" rel="stylesheet" type="text/css">
  <body>
    <section class="container full-body">
      <div class="main-div">
        <div class="max-card">
          <div class="row">
            <div class="col-sm-8 col-xs-8">
              <div class="promotion-header" style="display: flex;">
                <input type="text" name="email" id="email" class="form-control input-md" placeholder="Company name"> <a href="#" class="icon"><i class="fa fa-pencil" aria-hidden="true"></i>
              </div>
            </div>
            <div class="col-sm-4 col-xs-4">
              <img src="https://www.csufablab.org/wp-content/uploads/2017/05/vistaprint-free-logo-design-company-logo-designer-free-download-download-free-logo-design-logo-fonts-100x100.jpg">
              <a href="#" class="icon"><i class="fa fa-pencil" aria-hidden="true"></i>
              
            </div>
          </div>
        </div>
      </div>
         <style>
            input#email{
                width: 71%;
    border: none;
    border-bottom: 1px solid #ccc;
    border-radius: 0;
    box-shadow: 0 0;
            }
         </style> 
      <div class="container-fluid">
        <div class="row add" style="color: #000;">
          <div class="col-sm-4" style="padding-left: 10%;">
            <!-- <label for="email">Location:</label> -->
                <input type="text" name="email" id="locate" class="form-control input-md" placeholder="Location">
  
            <br>
            <!-- <label for="denger">no. of employees:</label> -->
                <select name="gender" id="gender" class="form-control input-md"><option value="male">51-200</option><option value="female">200-400</option></select>
   
          </div>
          <div class="col-sm-4" style="padding-left: 10%;">
            <!-- <label for="name">Industry:</label> -->
                <input type="text" name="name" id="name" class="form-control input-md" placeholder="Industry">
                     
            <br>
            <!-- <label for="denger">stage</label> -->
                    <select name="gender" id="gender" class="form-control input-md"><option value="male">meet</option><option value="female">Growth</option></select>
          </div>
          <div class="col-sm-4">
            <ul class="faico clear">
              <li><a class="faicon-facebook" href="#"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/548c1294e4b03603dc2c67f0.jpg" style="height: 40px; width: 40px;"></a></li>
              <li><a class="faicon-twitter" href="#"><img src="https://res.cloudinary.com/thalmic-labs/image/upload/t_v2appCardIcon/market/apps/voqzx01cvgk5reqqgcz8.jpg" style="height: 40px; width: 40px;"></a></li>
              <li><a class="faicon-linkedin" href="#"><img src="http://tintation.com/wp-content/uploads/iphone-apps/iphone-apps-icon-5.jpg" style="height: 40px; width: 40px;"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container details_descript">
        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_orange vc_separator-has-text">
          <span class="vc_sep_holder vc_sep_holder_l">
            <span class="vc_sep_line"></span>
          </span>
          <h4></h4>
          <h2>Elevator Pitch</h2>
          <p></p><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
        </div>
        <div style="margin-left: 8%; margin-right: 8%;">
            <textarea rows="5" name="about" id="about" class="form-control input-lg"></textarea>
        </div>
      </div>
      <div class="container">
        <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_orange vc_separator-has-text">
          <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
          <h4></h4>
          <h2>What We Offer</h2>
          <p></p><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
        </div>
        <div class="sheet4">
          <div id="big-image">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Jewelry-sets-2.jpg" style="width: 937px;">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/earrings.png" style="width: 937px;">
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Ring-2.jpg" style="width: 937px;">
            <iframe width="937" height="336" src="https://www.youtube.com/embed/WDjd1piOMZQ" frameborder="0" allowfullscreen></iframe>
            <img src="http://aftertargets.com/jewellery/assets/images/banner/collections/Jewelry-sets-2.jpg" style="width: 937px;">
          </div>
          <div class="small-images" style="text-align: center; background: #f2f2f2; margin-right: 113px; height: 131px;">
            <img src="http://lorempixel.com/100/50/sports/1/" id="img" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/fashion/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/city/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/city/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
            <img src="http://lorempixel.com/100/50/city/1/" style="width: 157px; height: 111px; margin-right: 5px; margin-left: 5px; margin-top: 10px;">
          </div>
        </div>
      </div>
      <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Add Files</button>
      <!--/main slider carousel-->
      <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_sep_color_orange vc_separator-has-text">
        <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
        <h4></h4>
        <h2>founders</h2>
        <p></p><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
      </div>
      
      <div class="founders section">
        <div class="section with_filler with_editable_regions dsss17 startups-show-sections ffs70 founders _a _jm" data-id="594897" data-_tn="startups/show/sections/founders">
          <div class="row">
            <div class="fast">
              <div class="col-sm-2 col-xs-4">
                <a href="#"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Vivek-150x150.jpg">
              </div>
              <div class="col-sm-4 col-xs-8" style="border-right: 1px solid #d2d2d2;">
                <a class="profile-link" href="#">Vivek Srinivasan</a>
                <p class="role_title">Founder</p> 
                <p class="bio">Founder of Startups club.</p> 
              </div>
            </div>
            <div class="second">
              <div class="col-sm-2 col-xs-4">
                <a href="#"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg">
              </div>
              <div class="col-sm-4 col-xs-8">
                <a class="profile-link" href="#">Salma Moosa</a>
                <p class="role_title">Founder</p> 
                <p class="bio">Founder of Startups club.</p> 
              </div>
            </div>
          </div>
        </div>
      </div>  
    </section>

              <!-- <div class="photo">
                <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="3" aria-describedby="qtip-3"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg"></a>
              </div>
            </div>
            <div class="col-sm-4 col-xs-8">
              <div class="text">
      <div class="name">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="6">Salma Moosa</a>
      </div>
      <div class="role_title">Founder</div>
      <div class="bio"><p>Founder of Startups club.</p></div>
      </div>
            </div>
          </div>
        </div>  
      </div>    
</div> -->
        <!-- <div class=" dsr31 startup_roles fsp87 startup_profile_group _a _jm" data-size="larger" data-startup_id="594897" data-role="founder" data-_tn="startup_roles/startup_profile_group"><ul class="larger roles"><li class="role" data-token="fP73"><div data-startup_role="{&quot;id&quot;:2885026,&quot;tagged_type&quot;:&quot;User&quot;,&quot;tagged_id&quot;:158128,&quot;startup_id&quot;:594897,&quot;role&quot;:&quot;founder&quot;,&quot;token&quot;:&quot;fP73&quot;,&quot;past?&quot;:false}" data-size="larger" class="dsr31 startup_roles fse35 startup_profile _a _jm loading" data-_tn="startup_roles/startup_profile"><div class="g-lockup top larger">
      <div class="photo">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="3" aria-describedby="qtip-3"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Vivek-150x150.jpg"></a>
      </div>
      <div class="text">
      <div class="name">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="6">Vivek Srinivasan</a>
      </div>
      <div class="role_title">Founder</div>
      <div class="bio"><p>Founder of Startups club.</p></div>
      </div>
      </div></div></li>
      <li class="role" data-token="fP73"><div data-startup_role="{&quot;id&quot;:2885026,&quot;tagged_type&quot;:&quot;User&quot;,&quot;tagged_id&quot;:158128,&quot;startup_id&quot;:594897,&quot;role&quot;:&quot;founder&quot;,&quot;token&quot;:&quot;fP73&quot;,&quot;past?&quot;:false}" data-size="larger" class="dsr31 startup_roles fse35 startup_profile _a _jm loading" data-_tn="startup_roles/startup_profile"><div class="g-lockup top larger">
      <div class="photo">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="3" aria-describedby="qtip-3"><img class="angel_image" alt="Kyle Vogt" src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg"></a>
      </div>
      <div class="text">
      <div class="name">
      <a class="profile-link" data-type="User" data-id="158128" href="#" data-hasqtip="6">Salma Moosa</a>
      </div>
      <div class="role_title">Founder</div>
      <div class="bio"><p>Founder of Startups club.</p></div>
      </div> -->
      <!-- </div></div></li>
    </ul>
      </div>
</div></div> -->
      <!-- <div class="container profile-details">
        <div class="row-page">
          <div class="box-header with-border">
            <h4>founders</h4>
          </div>
          <div class="col-sm-4">
            <div class="image-container">
              <img src="http://startupsclub.org/wp-content/uploads/2017/02/Vivek-150x150.jpg" class="image-container-zoom"  title="founder" />
            </div>
            <div class="image-container">
              <img src="http://startupsclub.org/wp-content/uploads/2017/02/Salma-150x150.jpg" class="image-container-zoom"  title="founder" />
            </div>
          </div>
          <div class="col-sm-8">
            <div class="about">
            <h4>Vivek Srinivasan</h4>
            <h4>founder</h4>
          </div>
        </div>
      </div>
    </div> -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Images Or Videos</h4>
        </div>
        <div class="modal-body">
          <div class="SciSecPic">
  <i class="fa fa-fw fa-picture-o"></i>
  <label>
    <span>Add Image or Video</span>
    <input type="file" title='Click to add Files' style="display:none;">
  </label>
  
  <div class="progress" style=" display:none;">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
      0%
    </div>
  </div>
</div>

<div><center><h3>or</h3></center></div>
<div>
  <center><input class="form-control" type="url" name="url" placeholder="enter image or video url"></center>
</div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
<script>
  $(function(){
      $("#big-image img:eq(0)").nextAll().hide();
      $(".small-images img").click(function(e){
          var index = $(this).index();
          $("#big-image img").eq(index).show().siblings().hide();
      });
  });
</script>
<script>
  $(function(){
      $("#big-image iframe:eq(0)").nextAll().hide();
      $(".small-images #img").click(function(e){
          var index = $(this).index();
          $("#big-image iframe").eq(index).show().siblings().hide();
      });
  });





/*
 * dmuploader.js - Jquery File Uploader - 0.1
 * http://www.daniel.com.uy/projects/jquery-file-uploader/
 * 
 * Copyright (c) 2013 Daniel Morales
 * Dual licensed under the MIT and GPL licenses.
 * http://www.daniel.com.uy/doc/license/
 */

(function($) {
  var pluginName = 'dmUploader';

  // These are the plugin defaults values
  var defaults = {
    url: document.URL,
    method: 'POST',
    extraData: {},
    maxFileSize: 0,
    maxFiles: 0,
    allowedTypes: '*',
    extFilter: null,
    dataType: null,
    fileName: 'file',
    onInit: function(){},
    onFallbackMode: function() {message},
    onNewFile: function(id, file){},
    onBeforeUpload: function(id){},
    onComplete: function(){},
    onUploadProgress: function(id, percent){},
    onUploadSuccess: function(id, data){},
    onUploadError: function(id, message){},
    onFileTypeError: function(file){},
    onFileSizeError: function(file){},
    onFileExtError: function(file){},
    onFilesMaxError: function(file){}
  };

  var DmUploader = function(element, options)
  {
    this.element = $(element);

    this.settings = $.extend({}, defaults, options);

    if(!this.checkBrowser()){
      return false;
    }

    this.init();

    return true;
  };

  DmUploader.prototype.checkBrowser = function()
  {
    if(window.FormData === undefined){
      this.settings.onFallbackMode.call(this.element, 'Browser doesn\'t support Form API');

      return false;
    }

    if(this.element.find('input[type=file]').length > 0){
      return true;
    }

    if (!this.checkEvent('drop', this.element) || !this.checkEvent('dragstart', this.element)){
      this.settings.onFallbackMode.call(this.element, 'Browser doesn\'t support Ajax Drag and Drop');

      return false;
    }

    return true;
  };

  DmUploader.prototype.checkEvent = function(eventName, element)
  {
    var element = element || document.createElement('div');
    var eventName = 'on' + eventName;

    var isSupported = eventName in element;

    if(!isSupported){
      if(!element.setAttribute){
        element = document.createElement('div');
      }
      if(element.setAttribute && element.removeAttribute){
        element.setAttribute(eventName, '');
        isSupported = typeof element[eventName] == 'function';

        if(typeof element[eventName] != 'undefined'){
          element[eventName] = undefined;
        }
        element.removeAttribute(eventName);
      }
    }

    element = null;
    return isSupported;
  };

  DmUploader.prototype.init = function()
  {
    var widget = this;

    widget.queue = new Array();
    widget.queuePos = -1;
    widget.queueRunning = false;

    // -- Drag and drop event
    widget.element.on('drop', function (evt){
      evt.preventDefault();
      var files = evt.originalEvent.dataTransfer.files;

      widget.queueFiles(files);
    });

    //-- Optional File input to make a clickable area
    widget.element.find('input[type=file]').on('change', function(evt){
      var files = evt.target.files;

      widget.queueFiles(files);

      $(this).val('');
    });
        
    this.settings.onInit.call(this.element);
  };

  DmUploader.prototype.queueFiles = function(files)
  {
    var j = this.queue.length;

    for (var i= 0; i < files.length; i++)
    {
      var file = files[i];

      // Check file size
      if((this.settings.maxFileSize > 0) &&
          (file.size > this.settings.maxFileSize)){

        this.settings.onFileSizeError.call(this.element, file);

        continue;
      }

      // Check file type
      if((this.settings.allowedTypes != '*') &&
          !file.type.match(this.settings.allowedTypes)){

        this.settings.onFileTypeError.call(this.element, file);

        continue;
      }

      // Check file extension
      if(this.settings.extFilter != null){
        var extList = this.settings.extFilter.toLowerCase().split(';');

        var ext = file.name.toLowerCase().split('.').pop();

        if($.inArray(ext, extList) < 0){
          this.settings.onFileExtError.call(this.element, file);

          continue;
        }
      }
            
      // Check max files
      if(this.settings.maxFiles > 0) {
        if(this.queue.length >= this.settings.maxFiles) {
          this.settings.onFilesMaxError.call(this.element, file);

          continue;
        }
      }

      this.queue.push(file);

      var index = this.queue.length - 1;

      this.settings.onNewFile.call(this.element, index, file);
    }

    // Only start Queue if we haven't!
    if(this.queueRunning){
      return false;
    }

    // and only if new Failes were successfully added
    if(this.queue.length == j){
      return false;
    }

    this.processQueue();

    return true;
  };

  DmUploader.prototype.processQueue = function()
  {
    var widget = this;

    widget.queuePos++;

    if(widget.queuePos >= widget.queue.length){
      // Cleanup

      widget.settings.onComplete.call(widget.element);

      // Wait until new files are droped
      widget.queuePos = (widget.queue.length - 1);

      widget.queueRunning = false;

      return;
    }

    var file = widget.queue[widget.queuePos];

    // Form Data
    var fd = new FormData();
    fd.append(widget.settings.fileName, file);

    // Return from client function (default === undefined)
    var can_continue = widget.settings.onBeforeUpload.call(widget.element, widget.queuePos);
    
    // If the client function doesn't return FALSE then continue
    if( false === can_continue ) {
      return;
    }

    // Append extra Form Data
    $.each(widget.settings.extraData, function(exKey, exVal){
      fd.append(exKey, exVal);
    });

    widget.queueRunning = true;

    // Ajax Submit
    $.ajax({
      url: widget.settings.url,
      type: widget.settings.method,
      dataType: widget.settings.dataType,
      data: fd,
      cache: false,
      contentType: false,
      processData: false,
      forceSync: false,
      xhr: function(){
        var xhrobj = $.ajaxSettings.xhr();
        if(xhrobj.upload){
          xhrobj.upload.addEventListener('progress', function(event) {
            var percent = 0;
            var position = event.loaded || event.position;
            var total = event.total || e.totalSize;
            if(event.lengthComputable){
              percent = Math.ceil(position / total * 100);
            }

            widget.settings.onUploadProgress.call(widget.element, widget.queuePos, percent);
          }, false);
        }

        return xhrobj;
      },
      success: function (data, message, xhr){
        widget.settings.onUploadSuccess.call(widget.element, widget.queuePos, data);
      },
      error: function (xhr, status, errMsg){
        widget.settings.onUploadError.call(widget.element, widget.queuePos, errMsg);
      },
      complete: function(xhr, textStatus){
        widget.processQueue();
      }
    });
  }

  $.fn.dmUploader = function(options){
    return this.each(function(){
      if(!$.data(this, pluginName)){
        $.data(this, pluginName, new DmUploader(this, options));
      }
    });
  };

  // -- Disable Document D&D events to prevent opening the file on browser when we drop them
  $(document).on('dragenter', function (e) { e.stopPropagation(); e.preventDefault(); });
  $(document).on('dragover', function (e) { e.stopPropagation(); e.preventDefault(); });
  $(document).on('drop', function (e) { e.stopPropagation(); e.preventDefault(); });
})(jQuery);











$(document).ready(function() {
  var readPic;
  
  $(".SciSecPic").each(function () {
        var self = $(this);
        self.dmUploader({
            //url: "/Something/ImageSaver",
            url: "http://posttestserver.com/post.php?dir=ali",
            dataType: "json",
            allowedTypes: "image/*",
            //extraData: {
                //Name: self.data("name"),
                //Id: ~~self.data("id")
            //},
            onInit: function () {

            },
            onNewFile: function (id, file) {

                // showing progressbar
                $(this).find(".progress").show(200);

                /* preparing image for preview */
                if (typeof FileReader !== "undefined") {

                    var reader = new FileReader();
                    reader.onload = function (e) {
                        readPic = e.target.result;
                    }

                    reader.readAsDataURL(file);
                };

            },
            onUploadProgress: function (id, percent) {
                $(this).find(".progress-bar").width(percent + "%").attr("aria-valuenow", percent).text(percent + "%");
            },
            onComplete: function () {

                var thisEl = $(this);

                addPic(thisEl, readPic);

                // to fadeout and reset the progress bar at the end
                setTimeout(function () {
                    thisEl.find(".progress").hide(200, function () {
                        thisEl.find(".progress-bar").width("0%").attr("aria-valuenow", 0).text("0%");
                    })
                }, 300);
            }
        });
    });
});

// template to add new figure and caption
function addPic(thisEl, readPicture) {
  //alert(thisEl.html());
  //alert(thisEl.data("data-id"));
  var template = '' +
    '<div class="SciSecPicAdded">' +
    '   <div class="expandImg">' +
    '       <a href="images/test.jpg" target="_blank"><img alt="picture" src="' + readPicture + '"></a>' +
    '    </div>' +
    '</div>';

  $(template).insertBefore(thisEl);
};




</script>
</body>
@stop
