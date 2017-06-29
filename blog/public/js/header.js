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

