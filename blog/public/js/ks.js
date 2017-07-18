

$(document).ready(function(){


$('#ks_speaker_pic').change(function(){
/*$.loader.open();*/

    var file_data = $('#ks_speaker_pic').prop('files')[0];   
      var hidden_token=$('#hidden_token').val();
        var form_data = new FormData(); 
        var img=file_data.size;
        var imgsize=img/1024; 

if(imgsize > 2000){
  alert('The profile pic size should be less than 2 Mb');
   /*$.loader.close();*/
  return false;

}
        form_data.append('file', file_data); 
        form_data.append('_token', hidden_token); 
     
  jQuery.ajax({
                    url: '/upload_speaker_pic',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                var value1 = $.parseJSON( data );
 /*   $.loader.close();*/
                $('#hidden_image').val(value1);
var url="http://dev.startupsclub.org/image/speakers/"+value1;
                $('#display_pic').attr('src',url);
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

})





$('#publish_ks').click(function(){
	$('.display_error').css('display','none');
  var ks_title=$('#ks_title').val();
  var ks_date=$('#ks_date').val();
  var ks_time=$('#ks_time').val();
  var ks_duration=$('#ks_duration').val();
  var ks_venue=$('#ks_venue').val();
  var ks_cost=$('#ks_cost option:selected').val();
  var ks_city=$('#ks_city').val();
  var ks_event_details=$('#ks_event_details').val();
  var hidden_image=$('#hidden_image').val();
  var ks_speaker_bio=$('#ks_speaker_bio').val();
  var ks_speaker_desn=$('#ks_speaker_desn').val();
  var ks_speaker_company=$('#ks_speaker_company').val();
  var ks_speaker_linkedin=$('#ks_speaker_linkedin').val();
  var ks_speaker_twitter=$('#ks_speaker_twitter').val();
  var ks_speaker_name=$('#ks_speaker_name').val();

    var hidden_token=$('#hidden_token').val();
var ks_speaker_awards=new Array();
var ks_speaker_recognitions=new Array();
var ks_timeline_time=new Array();
var ks_timeline_content=new Array();

$(".ks_speaker_awards").each(function(){
  if($(this).val())
    ks_speaker_awards.push($(this).val());
        }); 
$(".ks_speaker_recognitions").each(function(){
  if($(this).val())
    ks_speaker_recognitions.push($(this).val());
        }); 
$(".ks_timeline").each(function(){
if($(this).find('.ks_timeline_time').val()!='' && $(this).find('.ks_timeline_content').val()!='')
    ks_timeline_time.push($(this).find('.ks_timeline_time').val()+"~"+$(this).find('.ks_timeline_content').val());
        }); 

$(".ks_timeline_content").each(function(){
  if($(this).val())
    ks_timeline_content.push($(this).val());
        }); 

  var sam={
  ks_speaker_awards : ks_speaker_awards,
  ks_speaker_recognitions : ks_speaker_recognitions,
  ks_timeline_time : ks_timeline_time,
  ks_timeline_content : ks_timeline_content,
  ks_title : ks_title,
  ks_date : ks_date,
  ks_time : ks_time,
  ks_duration : ks_duration,
  ks_venue : ks_venue,
  ks_cost : ks_cost,
  ks_city : ks_city,
  ks_event_details : ks_event_details,
  ks_speaker_bio : ks_speaker_bio,
  ks_speaker_desn : ks_speaker_desn,
  ks_speaker_company : ks_speaker_company,
  ks_speaker_linkedin : ks_speaker_linkedin,
  ks_speaker_twitter : ks_speaker_twitter,
  ks_speaker_name : ks_speaker_name,
  hidden_image : hidden_image,
  _token: hidden_token,

}

jQuery.ajax({
                    url: '/InsertKs',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {

var error='';
if(jQuery.trim(data) != 'success'){
$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {
                 error += '<li>'+val[0]+'</li>';
                 
                  $('#'+key).removeClass( "error-border" );
                  $('.'+key).removeClass( "error-border" );
                                $('#'+key).addClass( "error-border" );
                                 $('.'+key).addClass( "error-border" );

                            });

$('.display_error').css('display','block');
$('#error_append').html(error);
}else{
window.location.reload();
}
}
})
  

})




})