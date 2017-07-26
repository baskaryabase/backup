function get_heading_modal(company_id){

  var hidden_token=$('#hidden_token').val();
  var sam={

    company_id:company_id,
    _token:hidden_token,
  };

jQuery.ajax({
                    url: '/getEditModalData',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {
             
 /*   $.loader.close();*/

 $('#edit_append_data').html(data.data.view_data); 
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

$('#edit_company_modal').modal({ show: true });
}

function get_elevator(company_id){

  var get_elevator=$('#elevator_text').text();
 $('#elevator_pitch').val(get_elevator);
 $('#update_elevator').attr('data-id',company_id)
}

$('#update_elevator').click(function(){
var company_id=$(this).attr('data-id');
var elevator_pitch=$('#elevator_pitch').val();
  var hidden_token=$('#hidden_token').val();

  var sam={

    company_id:company_id,
    elevator_pitch:elevator_pitch,
    _token:hidden_token,
  };

jQuery.ajax({
                    url: '/updateElevator',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {
             
 /*   $.loader.close();*/


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


$(document).ready(function() {
    $('input[type=radio][name=optradio]').change(function() {

      if($(this).val()=='yes'){
$('#image_tab').css('display','block');
$('#url_tab').css('display','none');
      }else{
$('#url_tab').css('display','block');
$('#image_tab').css('display','none');
      }

})
})



function startup_watwedo(){
/*$.loader.open();*/

    var file_data = $('#watwedo_pic').prop('files')[0];   
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
                    url: '/upload_company_watwedo',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                var value1 = $.parseJSON( data );
 /*   $.loader.close();*/
                $('#hidden_image').val(value1);
var url="http://dev.startupsclub.org/image/company/"+value1;
                $('#display_pic').attr('src',url);
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

}


$('#update_watwedo').click(function(){
var flag=$('input[type=radio][name=optradio]:checked').val();
var youtube_url=$('#youtube_url').val();
var hidden_image=$('#hidden_image').val();
if(flag == 'no'){
  if(youtube_url == ''){
    alert('Please Enter the url');
    return false;
  }
  var p = /^(?:https?:\/\/)?(?:www\.)?youtube\.com\/watch\?(?=.*v=((\w|-){11}))(?:\S+)?$/;
   var fgt= (youtube_url.match(p)) ? true : false;

   if(fgt == false){
    alert('Please enter valid youtube url');
    return false;
   }

}else{

  if(hidden_image == ''){
    alert('Please Select the image');
    return false;
  }

}

if(flag == 'yes'){
  var wattodo=hidden_image;
}else if(flag == 'no'){
var wattodo=youtube_url;
}else{
  return false;
}
  var company_id=$(this).attr('data-company');
  var member_id=$(this).attr('data-member');

var elevator_pitch=$('#elevator_pitch').val();
  var hidden_token=$('#hidden_token').val();

  var sam={

    flag:flag,
    wattodo:wattodo,
    member_id:member_id,
    company_id:company_id,
    _token:hidden_token,
  };

jQuery.ajax({
                    url: '/updateWatwedo',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {
             
 /*   $.loader.close();*/


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



