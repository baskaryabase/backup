

function sendMessage(elm){

  var role=$('#role').val();


toastr.remove();
if(role == 'regular'){

 Command: toastr["success"]("<p>Only pioneer can message</p><a href='http://members.startupsclub.org/edit-membership'>Become a pioneer member</a>")

toastr.options = {
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300", 
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
return false;
}
  



$('#sendmessageuser').attr('data-user',$(elm).attr('data-user'));
$('#sendmessageuser1').modal({ show: true });

}

$('#sendmessageuser').click(function(){

var user_id=$('#sendmessageuser').attr('data-user');
   var hidden_token=$('#hidden_token').val();
   var send_message_value=$('#send_message_value').val();
if(send_message_value== ''){
  return false;
}
  var sam = { user_id : user_id , _token:hidden_token , send_message_value:send_message_value };
     jQuery.ajax({
                    url: '/send-message-user',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                      window.location.href="http://members.startupsclub.org/messages";
                    }
                });

})
 
$(document).ready(function() {


  $(".find_change").change(function() {

    var find_aoe= new Array();
    var personal_domain= new Array();
    var joinsuc= new Array();
    var find_location= new Array();
 $("input[name='find_aoe[]']").each(function(){
if($(this).is(':checked'))
    find_aoe.push($(this).val());
  
}); 
 $("input[name='find_location[]']").each(function(){
if($(this).is(':checked'))
    find_location.push($(this).val());
  
}); 
 $("input[name='find_personal_domain[]']").each(function(){
   if($(this).is(':checked'))
    personal_domain.push($(this).val());
  
});
 $("input[name='joinsuc[]']").each(function(){
   if($(this).is(':checked'))
    joinsuc.push($(this).val());
  
}); 

var hidden_token=$('#hidden_token').val();
var member_find=$('#member_find').val();
 var sam = { 
  personal_domain : personal_domain ,
  _token:hidden_token,
   find_aoe:find_aoe, 
   member_find:member_find, 
   find_location:find_location, 
   joinsuc:joinsuc 
 };
     jQuery.ajax({
                    url: '/get-find-member',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
 $('#members_count').text(data.count);
                     $('#display_find_append').html(data.data);
                    }
                });






    })

$( "#member_find" ).keyup(function() {

    var find_aoe= new Array();
    var personal_domain= new Array();
    var joinsuc= new Array();
     var find_location= new Array();
 $("input[name='find_aoe[]']").each(function(){
if($(this).is(':checked'))
    find_aoe.push($(this).val());
  
}); 
 $("input[name='find_personal_domain[]']").each(function(){
   if($(this).is(':checked'))
    personal_domain.push($(this).val());
  
});
 $("input[name='joinsuc[]']").each(function(){
   if($(this).is(':checked'))
    joinsuc.push($(this).val());
  
}); 
 $("input[name='find_location[]']").each(function(){
if($(this).is(':checked'))
    find_location.push($(this).val());
  
});



var hidden_token=$('#hidden_token').val();
var member_find=$('#member_find').val();
 var sam = { 
  personal_domain : personal_domain ,
  _token:hidden_token,
   find_aoe:find_aoe, 
   member_find:member_find, 
   find_location:find_location, 
   joinsuc:joinsuc 
 };
     jQuery.ajax({
                    url: '/get-find-member',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                      
                      $('#members_count').text(data.count);
                     $('#display_find_append').html(data.data);
                    }
                });








})






    })


load_sequence = 1;

$(window).scroll(function() {

   if($(window).scrollTop() + $(window).height() == $(document).height()) {
     console.log($(window).scrollTop());
  console.log($(window).height());
  console.log($(document).height());
 load_members();
   }
});

function load_members(){
 var find_aoe= new Array();
    var personal_domain= new Array();
    var joinsuc= new Array();
    var find_location= new Array();
 $("input[name='find_aoe[]']").each(function(){
if($(this).is(':checked'))
    find_aoe.push($(this).val());
  
}); 
 $("input[name='find_location[]']").each(function(){
if($(this).is(':checked'))
    find_location.push($(this).val());
  
}); 
 $("input[name='find_personal_domain[]']").each(function(){
   if($(this).is(':checked'))
    personal_domain.push($(this).val());
  
});
 $("input[name='joinsuc[]']").each(function(){
   if($(this).is(':checked'))
    joinsuc.push($(this).val());
  
}); 

var hidden_token=$('#hidden_token').val();
var member_find=$('#member_find').val();
 var sam = { 
  personal_domain : personal_domain ,
  _token:hidden_token,
   find_aoe:find_aoe, 
   member_find:member_find, 
   find_location:find_location, 
   load_sequence:load_sequence, 
   joinsuc:joinsuc 
 };
     jQuery.ajax({
                    url: '/get-member-loadmore',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
load_sequence++;
                     $('.find-box').last().after(data.data);
                    }
                });






   
}

 
