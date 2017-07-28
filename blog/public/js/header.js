$('.getLogin').on('click',function(){
 $('#login_modal').modal('show');



  $('#login_form').parsley().on('field:validated', function() {

    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(event) {

  
  });


})
 

 

function get_notification(){
 $('#display_notify').html("<div id='wait'><img src='http://members.startupsclub.org/image/loadings.gif' width='30' height='30' /><br></div>");


var hidden_token=$('#hidden_token').val();
var sam = { _token:hidden_token };
     jQuery.ajax({
                    url: '/get_notify',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                  $('#display_notify').html(data.data);
                    }
                });

 }

 function get_notification_msg(){
 $('#display_notify_msg').html("<div id='wait'><img src='http://members.startupsclub.org/image/loadings.gif' width='30' height='30' /><br></div>");


var hidden_token=$('#hidden_token').val();
var sam = { _token:hidden_token };
     jQuery.ajax({
                    url: '/get_notify_msg',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                  $('#display_notify_msg').html(data.data);
                    }
                });

 }

$(window).on('load', function() {
var hidden_token=$('#hidden_token').val();
var sam = { _token:hidden_token };
     jQuery.ajax({
                    url: '/checkSc',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
        
              if(data.data != 0){

                       $('.notifybadge').text(data.data); 
                      }else{
                        $('.notifybadge').text('');
                      }
                  
                if(data.post_count != 0){
                  $('.homebadge').text(data.post_count);
            
                }else{
                        $('.homebadge').text('');
                }
                 if(data.msg_count != 0){

                  $('.msgbadge').text(data.msg_count);
            
                }else{
                        $('.msgbadge').text('');
                }
                    }
                });

});



window.setInterval(function(){
var hidden_token=$('#hidden_token').val();
var sam = { _token:hidden_token };
     jQuery.ajax({
                    url: '/checkSc',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                   
                      if(data.data != 0){

                       $('.notifybadge').text(data.data); 
                      }else{
                        $('.notifybadge').text('');
                      }
                  
                if(data.post_count != 0){
                  $('.homebadge').text(data.post_count);
            
                }else{
                        $('.homebadge').text('');
                }
  if(data.msg_count != 0){
                  
                  $('.msgbadge').text(data.msg_count);
            
                }else{
                        $('.msgbadge').text('');
                }
                
                  
                    }
                });
}, 2000);


$('#login-submit').click(function(){

var username=$('#username').val();
var password=$('#password').val();


var hidden_token=$('#hidden_token').val();
var sam = { 
  username:username, 
  password:password, 
  _token:hidden_token, 
};
     jQuery.ajax({
                    url: '/checkuser',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                  if(jQuery.trim(data.success) == 'success'){
window.location.reload();
}else if(jQuery.trim(data.success) == 'invalid'){
  $('.wpcf7-not-valid-tip').html('');
  $('#password').after('<span class="wpcf7-not-valid-tip">Please Enter Valid username And Password<span>');
}else if(jQuery.trim(data.success) == 'error'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });
}




                    }
                  })


})
$('#register-submit').click(function(){

var fullname=$('#fullname').val();
var emailaddress=$('#emailaddress').val();
var register_password=$('#register_password').val();
var confirmpassword=$('#confirmpassword').val();


var hidden_token=$('#hidden_token').val();
var sam = { 
  fullname:fullname, 
  emailaddress:emailaddress, 
  register_password:register_password, 
  confirmpassword:confirmpassword, 
  _token:hidden_token, 
};
     jQuery.ajax({
                    url: '/registeruser',
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
                        window.location="http://dev.startupsclub.org"+data.success;


}




                    }
                  })


})
$('#forgot-password-submit').click(function(){

var email_id=$('#email_id').val();



var hidden_token=$('#hidden_token').val();
var sam = { 
  email_id:email_id, 

  _token:hidden_token, 
};
     jQuery.ajax({
                    url: '/check-forgot',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                     
if(jQuery.trim(data.errors) == 'exists'){
  $('.wpcf7-not-valid-tip').html('');
 $('#email_id').after('<span class="wpcf7-not-valid-tip">This emailid doesnot exists<span>');
}else if(jQuery.trim(data.errors) == 'success'){
  $('#login_modal').modal("hide");
}else{
                      

                        $('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}




                    }
                  })


})

$(document).ready(function(){


$('#status_area').bind('keyup',function(){

  var status_area=$('#status_area').val();
  var hidden_token=$('#hidden_token').val();
      var res = status_area.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);

if(res == null)
        return false;
   
$('.liveurl-loader').css('display','block');
var sam = { 
  status_area:status_area, 

  _token:hidden_token, 
};
     jQuery.ajax({
                    url: '/urlFetch',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                     $('#url_flag').val('set');
                     $('#url_title').val(data.data.details.title);
                     $('#url_desb').val(data.data.details.keywords);
                     $('#url_data').val(data.data.details.url);
                     $('#url_pic').val(data.data.details.alt_img);
                  $('.liveurl-loader').css('display','none');
$('#url_append_data').html(data.data.view_data);



                    }
                  })

  
})


})