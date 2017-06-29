$(function () {

  $('#pioneer_register_form').parsley().on('field:validated', function() {

    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(event) {

  //return false;
   
  });
});

$('#become_pioneer').click(function(){
	$.loader.open();
$('.wpcf7-not-valid-tip').html('');
  var fullname=$('#fullname').val();
  var emailaddress=$('#emailaddress').val();
  var phonenumber=$('#phonenumber').val();
  var hidden_token=$('#hidden_token').val();
  var sam={
  fullname : fullname,
  emailaddress : emailaddress,
  phonenumber : phonenumber,
  _token: hidden_token,

}

jQuery.ajax({
                    url: '/check_become_pioneer',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {


if(jQuery.trim(data.errors) != 'success'){
$.loader.close();
$('.wpcf7-not-valid-tip').html('');
                 $.each(data.errors, function(key,val) {

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');

                            });


}else{ 
$.loader.close();
var options = {
    "key": "rzp_live_suqyYzqhV4bJKq",
    "amount": 400000, // 2000 paise = INR 20
    "name": "Startups Club Services Pvt Ltd",
    "description": "Become a Pioneer member",
    "image": "http://startupsclub.org/wp-content/uploads/2015/06/use.png",
    "handler": function (response){
      var transaction_id= response.razorpay_payment_id;
        var sam={
  fullname : fullname,
  emailaddress : emailaddress,
  phonenumber : phonenumber,
  _token: hidden_token,
  transaction_id:transaction_id

}
      $.loader.open();
      jQuery.ajax({
                    url: '/pioneerregisteruser',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                   
                   
                      window.location=data.errors;
                     
                    }
                });

      

     
   
                  
    },
   
    "theme": {
        "color": "#F37254"
    }
};

var rzp1 = new Razorpay(options);
     rzp1.open();             




}
}
})

})


