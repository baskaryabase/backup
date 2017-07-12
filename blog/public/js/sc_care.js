

$('.rsvp_link').click(function(){

  $('#total_amount').css('display','none');
$('#register_rsvp').attr('data-id',$(this).attr('data-id'));
$('#register_rsvp').attr('data-type',$(this).attr('data-type'));

$('#register_rsvp').text('Register');
$('.member_partner_display').css('display','none');

    

$('#rsvp_modal').modal({ show: true });


})
$('.attend_link').click(function(){
if($(this).attr('data-price')){
$('#total_amount').css('display','block');
$('#change_total_amount_new').text($(this).attr('data-price'));
}else{
  $('#total_amount').css('display','none');
}
  
$('#register_demoday').attr('data-city',$(this).attr('data-city'));
$('#register_demoday').attr('data-type',$(this).attr('data-type'));
$('#register_demoday').attr('data-date',$(this).attr('data-date'));
$('#register_demoday').attr('data-price',$(this).attr('data-price'));

$('#register_rsvp').text('Register');
$('.member_partner_display').css('display','none');

    

$('#rsvp_modal_attende').modal({ show: true });


})

$('#register_demoday').click(function(){

 $('#register_demoday').prop('disabled', true);


var data_city =$(this).attr('data-city');
var demo_type=$(this).attr('data-type');
var demo_date=$(this).attr('data-date');
var demo_price=$(this).attr('data-price');


   var attendees_name=$('#attendees_name').val();
   var attendees_email=$('#attendees_email').val();
   var attendees_mobile=$('#attendees_mobile').val();
   var attendees_city=$('#attendees_city').val();
   var attendees_status=$('#attendees_status').val();
   var hidden_token=$('#hidden_token').val();

   var sam={
    attendees_name:attendees_name,
    attendees_email:attendees_email,
    attendees_mobile:attendees_mobile,
    attendees_city:attendees_city,
    attendees_status:attendees_status,
    data_city:data_city,
    demo_date:demo_date,
    demo_type:demo_type,
    demo_price:demo_price,
    _token:hidden_token,



   };

  jQuery.ajax({

                    url: '/CheckAttendees',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {
                
                      $('#register_rsvp').prop('disabled', false);  
if(jQuery.trim(data.errors) != 'success'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}else{
if(demo_price){
  var options = {
    "key": "rzp_test_WyUJ6wuelsKUQw",
    "amount": demo_price*100, // 2000 paise = INR 20
    "name": "Startups Club Networks LLP",
    "description": "Events payment",
    "image": "http://startupsclub.org/wp-content/uploads/2015/06/use.png",
    "handler": function (response){
      
  jQuery.ajax({

                    url: '/InsertAttendees',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {
                 window.location.reload();
                   }
})
      

     
   
                  
    },
   
    "theme": {
        "color": "#F37254"
    }
};

var rzp1 = new Razorpay(options);
     rzp1.open(); 

}else{

    jQuery.ajax({

                    url: '/InsertAttendees',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {
                 window.location.reload();
                   }
})

}


}
                    }

})


})
$('#register_rsvp').click(function(){

 $('#register_rsvp').prop('disabled', true);


var data_id =$(this).attr('data-id');
var demo_type=$(this).attr('data-type');


   var attendees_name=$('#attendees_name').val();
   var attendees_email=$('#attendees_email').val();
   var attendees_mobile=$('#attendees_mobile').val();
   var attendees_city=$('#attendees_city').val();
   var attendees_status=$('#attendees_status').val();
   var hidden_token=$('#hidden_token').val();

   var sam={
   	attendees_name:attendees_name,
   	attendees_email:attendees_email,
   	attendees_mobile:attendees_mobile,
   	attendees_city:attendees_city,
   	attendees_status:attendees_status,
   	data_id:data_id,
   	demo_type:demo_type,
   	_token:hidden_token,



   };

  jQuery.ajax({

                    url: '/CheckRsvp ',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {
                
                      $('#register_rsvp').prop('disabled', false);  
if(jQuery.trim(data.errors) != 'success'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}else{
window.location.reload();
}
                    }

})


})

$('.pitch_link').click(function(){
 
$('.wpcf7-not-valid-tip').html('');
    $('#participant_modal').find("input,textarea,select").val('').end();

$('#register_participants').attr('data-city',$(this).attr('data-city'));
$('#register_participants').attr('data-type',$(this).attr('data-type'));
$('#register_participants').attr('data-date',$(this).attr('data-date'));
$('#participant_modal').modal({ show: true });

})


$('#register_participants').click(function(){

$('#register_participants').prop('disabled', true);  

var demo_city=$(this).attr('data-city');
var demo_type=$(this).attr('data-type');
var demo_date=$(this).attr('data-date');

var participant_name=$('#participant_name').val();
   var participant_email=$('#participant_email').val();
   var participant_mobile=$('#participant_mobile').val();
   var participant_startup=$('#participant_startup').val();
   var participant_desb=$('#participant_desb').val();
   var participant_website=$('#participant_website').val();
   var participant_start=$('#participant_start').val();
   var participant_team=$('#participant_team').val();
   var participant_head=$('#participant_head').val();
var hidden_token=$('#hidden_token').val();

 var file_data = $('#participant_file').prop('files')[0];  
  var participant_file = $('#participant_file').val();  
var sam={
         participant_name  : participant_name,
                    participant_email  : participant_email,
                    participant_mobile  : participant_mobile,
                    participant_startup  : participant_startup,     
                    participant_desb  : participant_desb,
                    participant_website  : participant_website,
                    participant_start  : participant_start,
                    participant_team  : participant_team,
                    participant_head  : participant_head,
                    participant_file  : participant_file,
                    demo_city  : demo_city,
                    demo_type  : demo_type,
                    demo_date  : demo_date,
                    _token  : hidden_token,

};


  jQuery.ajax({
                    url: '/CheckParticipants',
                    type: 'POST',
                    data: sam, 
                    cache: false,                
                    success: function(data) {
                                 $('#register_participants').prop('disabled', false);  
if(jQuery.trim(data.errors) != 'success'){

$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}else{

   window.location.reload();



}
}



})

   
})




