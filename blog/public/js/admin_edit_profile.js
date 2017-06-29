$(document).ready(function() {

    $('input[type=radio][name=form-field-radio]').change(function() {

      if($(this).val()=='yes'){
$('#display_startup').css('display','block');
$('#not_display_startup').css('display','none');
      }else{
$('#not_display_startup').css('display','block');
$('#display_startup').css('display','none');
      }

})


$('#update_basic').click(function(){
$('.wpcf7-not-valid-tip').html('');
  var user_id=$('#user_id').val();
  var personal_domain=$('#personal_domain').val();
  var fullname=$('#fullname').val();
  var emailid=$('#emailid').val();
  var phonenumber=$('#phonenumber').val();
  var location=$('#location').val();
  var aoe=$('#aoe').val();
  var hidden_token=$('#hidden_token').val();
  var sam={
  fullname : fullname,
  emailid : emailid,
  phonenumber : phonenumber,
  location : location,
  aoe : aoe,
  personal_domain : personal_domain,
  user_id : user_id,
  _token: hidden_token,

}

jQuery.ajax({
                    url: '/admin/admin_update_basicprofile',
                    type: 'POST',
                    data: sam,
                    cache: false,
                    success: function(data) {


if(jQuery.trim(data) != 'success'){
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



$('#update_company').click(function(){
$('.wpcf7-not-valid-tip').html('');
var user_id=$('#user_id').val();
  var rusc=$("input[name='form-field-radio']:checked").val();
  var current_engg=$("input[name='form-field-radio1']:checked").val();
  var startup_name=$('#startup_name').val();
  var startup_age=$('#startup_age :checked').val();
  var startup_website=$('#startup_website').val();
  var startup_type=$('#startup_type').val();
  var startup_industry=$('#startup_industry').val();
  var elevator_pitch=$('#elevator_pitch').val();
  var joinsuc=$('.joinsuc').val();
  var company_name=$('#company_name').val();
  var user_desn=$('#user_desn').val();
  var hidden_token=$('#hidden_token').val();
  var sam={
  rusc : rusc,
  user_id : user_id,
  current_engg : current_engg,
  startup_name : startup_name,
  startup_age : startup_age,
  startup_website : startup_website,
  startup_type : startup_type,
  startup_industry : startup_industry,
  elevator_pitch : elevator_pitch,
  company_name : company_name,
  user_desn : user_desn,
  joinsuc : joinsuc,
  _token: hidden_token,

}




jQuery.ajax({
                    url: '/admin/update_companyprofile',
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
})

})


$('.joinsuc').multiselect({
    columns: 1,
    placeholder: 'Purpose to join Startups Club ?'
});
$('.areaofexp').multiselect({
    columns: 1,
    placeholder: 'Area of Expertise',
});
var sc_aoe=$('#sc_aoe').val().split(',');
var join_suc_hidden=$('#join_suc_hidden').val().split(',');

$('#aoe').val(sc_aoe).prop("selected", true);
$('#personal_domain').val($('#personal_domain_hidden').val()).prop("selected", true);
$('.joinsuc').val(join_suc_hidden).prop("selected", true);


})