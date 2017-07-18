    

function get_followup(elm){ 

var parent_user=$(elm).attr('data-id');
$('#send_followup').attr('data-parent',parent_user);



var hidden_token=$('#hidden_token').val();
  
var sam = { 
	parent_user : parent_user ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/getFollowup',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
$('#followup_modal').modal({ show: true });
                   $('#follow_up_append_data').html(data); 
                   $('#followup_text').val('');   
                    }
                });




}
function get_sold(elm){

var parent_user=$(elm).attr('data-id');
$('#update_sold').attr('data-parent',parent_user)



var hidden_token=$('#hidden_token').val();
  
var sam = { 
  parent_user : parent_user ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/getSoldProduct',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
$('#sold_modal').modal({ show: true });
                   $('#sold_append_data').html(data.data); 
                    
                    }
                });





}

function send_followup(elm){

var parent_user=$(elm).attr('data-parent');
var followup_text=$('#followup_text').val();
var hidden_token=$('#hidden_token').val();
  if(followup_text == ''){
  	return false;
  }
var sam = { 
	parent_user : parent_user ,
	followup_text : followup_text ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/putFollowup',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                    $('#follow_up_append_data').html(data); 
                   $('#followup_text').val('');   
                    }
                });

}

$(document).ready(function(){

  $('#example1').DataTable({
      "searching": false,
  });
 $('#admin_city').multiselect(); 


$('#date_range').daterangepicker({
      autoUpdateInput: false,
      format: 'YYYY-MM-DD',
      locale: {
         format: 'YYYY-MM-DD',
          cancelLabel: 'Clear'
      }
  });

  $('#date_range').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('DD-MM-YYYY') + ' to ' + picker.endDate.format('DD-MM-YYYY'));
  getFilteredText();
  });

  $('#date_range').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });






$('.search_text').on('change',function(){

getFilteredText();

})
function getFilteredText(){



var admin_city = []; 
$('#admin_city :selected').each(function(i, selected){ 
  admin_city[i] = $(selected).text(); 
});
var admin_role=$('#admin_role').val();
var admin_name=$('#admin_name').val();
var date_range=$('#date_range').val();
var hidden_token=$('#hidden_token').val();

var sam = { 
  admin_city : admin_city ,
  admin_name : admin_name ,
  admin_role : admin_role ,
  date_range : date_range ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/getFilterUser',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                    $('#filtered_append').html(data.data); 
                $('#example1').DataTable({
                    "searching": false,
                }); 

                    }
                });



}

$('#admin_name').on('keyup',function(){
getFilteredText();
})

})

function export_csv(){

var admin_city = []; 
$('#admin_city :selected').each(function(i, selected){ 
  admin_city += $(selected).text()+'@'; 
});
var admin_role=$('#admin_role').val();
var admin_name=$('#admin_name').val();
var date_range=$('#date_range').val();
var hidden_token=$('#hidden_token').val();

if(admin_role==null)
  admin_role='';
var win = window.open('http://members.startupsclub.org/admin/getCsvAdmin/'+admin_role+'~'+admin_name+'~'+date_range+'~'+admin_city);

}



$('#update_sold').click(function(){
 
var id=$(this).attr('data-parent');
   var pioneer_radio=$("input[name='pioneer_radio']:checked").val();
   var valuekit_radio=$("input[name='valuekit_radio']:checked").val();
   var mp_radio=$("input[name='mp_radio']:checked").val();
   var sponser_radio=$("input[name='sponser_radio']:checked").val();
var hidden_token=$('#hidden_token').val();

var p_comment=$('#p_comment').val();
var p_comment_head=$('#p_comment_head').val();
var p_closed_by=$('#p_closed_by').val();
var v_comment=$('#v_comment').val();
var v_comment_head=$('#v_comment_head').val();
var v_closed_by=$('#v_closed_by').val();
var m_comment=$('#m_comment').val();
var m_comment_head=$('#m_comment_head').val();
var m_closed_by=$('#m_closed_by').val();
var s_comment=$('#s_comment').val();
var s_comment_head=$('#s_comment_head').val();
var s_closed_by=$('#s_closed_by').val();


var sam = { 
  id : id ,
  pioneer_radio : pioneer_radio ,
  valuekit_radio : valuekit_radio ,
  mp_radio : mp_radio ,
  sponser_radio : sponser_radio ,
  p_comment : p_comment ,
  p_comment_head : p_comment_head ,
  p_closed_by : p_closed_by ,
  v_comment : v_comment ,
  v_comment_head : v_comment_head ,
  v_closed_by : v_closed_by ,
  m_comment : m_comment ,
  m_comment_head : m_comment_head ,
  m_closed_by : m_closed_by ,
  s_comment : s_comment ,
  s_comment_head : s_comment_head ,
  s_closed_by : s_closed_by ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/updateSoldAdmin',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   window.location.reload();  
                    }
                });


})


 

function pioneer_radio(elm){

       if($(elm).val()=='yes'){
$('#pioneer_yes').css('display','block');

      }else{

$('#pioneer_yes').css('display','none');
      }

}
function valuekit_radio(elm){

      if($(elm).val()=='yes'){
$('#valuekit_yes').css('display','block');

      }else{

$('#valuekit_yes').css('display','none');
      }

}
function mp_radio(elm){

          if($(elm).val()=='yes'){
$('#mp_yes').css('display','block');

      }else{

$('#mp_yes').css('display','none');
      }

}
function sponser_radio(elm){
   if($(elm).val()=='yes'){
$('#sponser_yes').css('display','block');

      }else{

$('#sponser_yes').css('display','none');
      }

}


$('#save_announcements').click(function(){

 var announce_value= $('#announce_value').val();
 var edit_flag= $(this).attr('data-id');
var hidden_token=$('#hidden_token').val();
if(announce_value == ''){
  return false;
}

var sam = { 
  announce_value : announce_value ,
  edit_flag : edit_flag ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/updateAnnouncement',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   window.location.reload();  
                    }
                });

})

$('.announce_status').change(function(){


 var edit_flag= $(this).attr('data-id');
 var value= $(this).attr('value');
var hidden_token=$('#hidden_token').val();

var sam = { 
  value : value ,
  edit_flag : edit_flag ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/updateAnnouncementStatus',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   window.location.reload();  
                    }
                });

})

$('.event_status').change(function(){


 var edit_flag= $(this).attr('data-id');
 var value= $(this).attr('value');
var hidden_token=$('#hidden_token').val();

var sam = { 
  value : value ,
  edit_flag : edit_flag ,
 _token:hidden_token 
};
     jQuery.ajax({
                    url: '/admin/updateeventStatus',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   window.location.reload();  
                    }
                });

})

function edit_announcements(elm){

$('#save_announcements').attr('data-id',$(elm).attr('data-id'));
$('#announcement_modal').modal({ show: true });
$('#announce_value').val($(elm).attr('data-value'));
}
function add_announcements(){

$('#save_announcements').attr('data-id','');
$('#announcement_modal').modal({ show: true });
$('#announce_value').val('');
}
  
  $('#mp_logo_value').change(function(){


    var file_data = $('#mp_logo_value').prop('files')[0];   
      var hidden_token=$('#hidden_token').val();
        var form_data = new FormData(); 
        var img=file_data.size;
        var imgsize=img/1024; 

        if(imgsize > 2000){
  alert('The profile pic size should be less than 2 Mb');
   
  return false;

}

        form_data.append('file', file_data); 
        form_data.append('_token', hidden_token); 
     
  jQuery.ajax({
                    url: '/admin/addMpLogo',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                
    
window.location.reload(); 
                    }
                });

})
  $('#change_mp_logo_value').change(function(){


    var file_data = $('#change_mp_logo_value').prop('files')[0];  

      var edit_id=$(this).attr('data-id');
      var hidden_token=$('#hidden_token').val();
        var form_data = new FormData(); 
        var img=file_data.size;
        var imgsize=img/1024; 

        if(imgsize > 2000){
  alert('The profile pic size should be less than 2 Mb');
   
  return false;

}

        form_data.append('file', file_data); 
        form_data.append('_token', hidden_token); 
        form_data.append('edit_id', edit_id); 
     
  jQuery.ajax({
                    url: '/admin/changeMpLogo',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                
    
window.location.reload(); 
                    }
                });

})

  function delete_logos(elm){



$.confirm({
    title: 'Post',
    content: 'Are you sure you want to delete this logo?',
    buttons: {
        confirm: function () {
              var id=$(elm).attr('data-id');
               var hidden_token=$('#hidden_token').val();
 var hidden_token=$('#hidden_token').val();
  var sam = { id : id , _token:hidden_token };
     jQuery.ajax({
                    url: '/admin/deleteLogo',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
window.location.reload(); 
                   //$('.comments_append_data'+post_id).html(data); 
                    }
                });
        },
        cancel: function () {
        
        },
      
    }
});




}

function delete_speaker(elm){



$.confirm({
    title: 'Post',
    content: 'Are you sure you want to delete this speaker?',
    buttons: {
        confirm: function () {
              var id=$(elm).attr('data-id');
             
 var hidden_token=$('#hidden_token').val();
  var sam = { id : id , _token:hidden_token };
     jQuery.ajax({
                    url: '/admin/deleteSpeaker',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
window.location.reload(); 
                   //$('.comments_append_data'+post_id).html(data); 
                    }
                });
        },
        cancel: function () {
        
        },
      
    }
});




}
function delete_event(elm){



$.confirm({
    title: 'Post',
    content: 'Are you sure you want to delete this speaker?',
    buttons: {
        confirm: function () {
             
             
 var hidden_token=$('#hidden_token').val();
  var sam = { id : elm , _token:hidden_token };
     jQuery.ajax({
                    url: '/admin/deleteEvent',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
window.location.reload(); 
                   //$('.comments_append_data'+post_id).html(data); 
                    }
                });
        },
        cancel: function () {
        
        },
      
    }
});




}


$('#speaker_profile').change(function(){
$.loader.open();

    var file_data = $('#speaker_profile').prop('files')[0];   
      var hidden_token=$('#hidden_token').val();
        var form_data = new FormData(); 
        var img=file_data.size;
        var imgsize=img/1024; 

if(imgsize > 2000){
  alert('The profile pic size should be less than 2 Mb');
   $.loader.close();
  return false;

}
        form_data.append('file', file_data); 
        form_data.append('_token', hidden_token); 
     
  jQuery.ajax({
                    url: '/admin/upload_speaker',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                var value1 = $.parseJSON( data );
    $.loader.close();
                $('#hidden_speaker_image').val(value1);
var url="http://dev.startupsclub.org/image/speakers/"+value1;

                $('#display_speaker_pic').attr('src',url);
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

})
$(document).ready(function(){
$('#add_speaker').click(function(){

var speaker_name=$('#speaker_name').val();
var speaker_desn=$('#speaker_desn').val();
var speaker_bio=$('#speaker_bio').val();
var speaker_cname=$('#speaker_cname').val();

var speaker_llink=$('#speaker_llink').val();
var speaker_tlink=$('#speaker_tlink').val();
var hidden_speaker_image=$('#hidden_speaker_image').val();

 var hidden_token=$('#hidden_token').val();
var awards_speaker   = new Array();
 $("input[name='awards[]']").each(function(){
  if($(this).val())
    awards_speaker.push($(this).val());
        }); 
 var recognition_speaker   = new Array();
 $("input[name='recognition[]']").each(function(){
   if($(this).val())
    recognition_speaker.push($(this).val());
        }); 

  var sam = { 
    awards_speaker : awards_speaker,
    recognition_speaker : recognition_speaker,
    speaker_name : speaker_name,
    speaker_desn : speaker_desn,
    speaker_bio : speaker_bio,
    speaker_cname : speaker_cname,
    speaker_llink : speaker_llink,
    speaker_tlink : speaker_tlink,
    hidden_speaker_image : hidden_speaker_image,

   _token:hidden_token 
 };
     jQuery.ajax({
                    url: '/admin/SaveSpeaker',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

if(jQuery.trim(data.errors) != 'success'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

if(key == 'awards_speaker'){
   $('.input_fields_wrap').last().after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');
 }else if(key == 'recognition_speaker'){
   $('.input_fields_wrap1').last().after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

 }else{

           $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');
                  
                 
}
                            });


}else{
window.location.reload();
}
                    }
                });

})

$('#update_speaker').click(function(){
var edit_id=$(this).attr('data-id');
var speaker_name=$('#speaker_name').val();
var speaker_desn=$('#speaker_desn').val();
var speaker_bio=$('#speaker_bio').val();
var speaker_cname=$('#speaker_cname').val();

var speaker_llink=$('#speaker_llink').val();
var speaker_tlink=$('#speaker_tlink').val();
var hidden_speaker_image=$('#hidden_speaker_image').val();

var awards_speaker   = new Array();
 $("input[name='awards[]']").each(function(){
    if($(this).val())
    awards_speaker.push($(this).val());
        }); 
 var recognition_speaker   = new Array();
 $("input[name='recognition[]']").each(function(){
    if($(this).val())
    recognition_speaker.push($(this).val());
        }); 

 var hidden_token=$('#hidden_token').val();
  var sam = { 
    awards_speaker : awards_speaker,
    recognition_speaker : recognition_speaker,
    edit_id : edit_id,
    speaker_name : speaker_name,
    speaker_desn : speaker_desn,
    speaker_bio : speaker_bio,
    speaker_cname : speaker_cname,
    speaker_llink : speaker_llink,
    speaker_tlink : speaker_tlink,
    hidden_speaker_image : hidden_speaker_image,

   _token:hidden_token 
 };
     jQuery.ajax({
                    url: '/admin/UpdateSpeaker',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

if(jQuery.trim(data.errors) != 'success'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                  if(key == 'awards_speaker'){
   $('.input_fields_wrap').last().after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');
 }else if(key == 'recognition_speaker'){
   $('.input_fields_wrap1').last().after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

 }else{

                  $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');
}
                            });


}else{
window.location.reload();
}
                    }
                });

})


 $('#save_events').click(function(){

var event_title=$('#event_title').val();
var event_date=$('#event_date').val();
var event_cost=$('#event_cost').val();
var event_time=$('#event_time').val();
var event_city=$('#event_city').val();
var event_venue=$('#event_venue').val();
var event_category=$('#event_category').val();
var event_speaker=$('#event_speaker').val();
var event_content=$('#event_content').val();
var hidden_token=$('#hidden_token').val();
  var sam = { 
    event_title : event_title,
    event_date : event_date,
    event_cost : event_cost,
    event_time : event_time,
    event_city : event_city,
    event_venue : event_venue,
    event_category : event_category,
    event_speaker : event_speaker,
    event_content : event_content,
   _token:hidden_token 
 };
     jQuery.ajax({
                    url: '/admin/SaveEvents',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

if(jQuery.trim(data.errors) != 'success'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}else{
window.location.reload();
}
                    }
                });

})

 $('#update_events').click(function(){

var edit_id=$(this).attr('data-id');
var event_title=$('#event_title').val();
var event_date=$('#event_date').val();
var event_cost=$('#event_cost').val();
var event_time=$('#event_time').val();
var event_city=$('#event_city').val();
var event_venue=$('#event_venue').val();
var event_category=$('#event_category').val();
var event_speaker=$('#event_speaker').val();
var event_content=$('#event_content').val();
var hidden_token=$('#hidden_token').val();
  var sam = { 
    edit_id : edit_id,
    event_title : event_title,
    event_date : event_date,
    event_cost : event_cost,
    event_time : event_time,
    event_city : event_city,
    event_venue : event_venue,
    event_category : event_category,
    event_speaker : event_speaker,
    event_content : event_content,
   _token:hidden_token 
 };
     jQuery.ajax({
                    url: '/admin/UpdateEventsAdmin',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

if(jQuery.trim(data.errors) != 'success'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}else{
window.location.reload();
}
                    }
                });

})





})




$(document).ready(function(){ 

var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
      $('.input_fields_wrap').last().after('<div class="input_fields_wrap" ><div class="form-group"><div class="col-md-11"><input type="text" name="awards[]" value="" id="awards" placeholder="Enter Awards"  class="form-control"></div><a class="remove_field1 btn-link" href="#" ><i class="fa fa-minus-circle" title="Remove Mobile Number"></i></a></div><div class="clearfix"></div></div>'); //add input box
        }
    });
 /*   $(close_disaster).click(function(e){
      x=1;

    });*/
    
    $(this).on("click",".remove_field1", function(e){ //user click on remove text
     
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

})

   $(document).ready(function(){ 

var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap1"); //Fields wrapper
    var add_button      = $(".add_field_button1"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
      $('.input_fields_wrap1').last().after('<div class="input_fields_wrap1" ><div class="form-group"><div class="col-md-11"><input type="text" name="recognition[]" value="" id="awards" placeholder="Enter Recognition"  class="form-control"></div><a class="remove_field btn-link" href="#" ><i class="fa fa-minus-circle" title="Remove Mobile Number"></i></a></div><div class="clearfix"></div></div>'); //add input box
        }
    });
 /*   $(close_disaster).click(function(e){
      x=1;

    });*/
    
    $(this).on("click",".remove_field", function(e){ //user click on remove text
     
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })

})

