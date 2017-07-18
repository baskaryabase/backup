
 if($('#user_id').val() == $('#display_user').val())
   $('.cropControlUpload').css('display','block');
  else
 $('.cropControlUpload').css('display','none');
 var role=$('#role').val();

$('.role_monitization').on("focus", function(){
toastr.remove()
if(role=='regular'){
$('.role_monitization').blur();
 Command: toastr["success"]("<p>Only pioneer can post</p><a href='http://members.startupsclub.org/edit-membership'>Become a pioneer member</a>")
 
toastr.options = {
  "closeButton": false,
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
  
});
	
$(document).ready(function(){

  $('#basic_profile').change(function(){
$.loader.open();

    var file_data = $('#basic_profile').prop('files')[0];   
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
                    url: '/change_avatar',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                var value1 = $.parseJSON( data );
    
               $.loader.close();

var url="http://members.startupsclub.org/image/"+value1;
                $('#display_pic').attr('src',url);
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

})






})
  $('#change_cover').change(function(){
$.loader.open();

		var file_data = $('#change_cover').prop('files')[0];   
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
                    url: '/change_cover',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                var value1 = $.parseJSON( data );
    
               $.loader.close();

var url="http://members.startupsclub.org/image/"+value1;
                $('#display_cover').attr('src',url);
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

})


$('#become_pioneer').click(function(){

	var options = {
    "key": "rzp_test_WyUJ6wuelsKUQw",
    "amount": 400000, // 2000 paise = INR 20
    "name": "Startups Club Networks LLP",
    "description": "Events payment",
    "image": "http://startupsclub.org/wp-content/uploads/2015/06/use.png",
    "handler": function (response){
      
      jQuery.ajax({
                    url: '/register_user',
                    type: 'POST',
                    data: sam,     			
                    cache: false,                
                    success: function(data) {
                     var value1 = $.parseJSON( data );
                     if(value1 == 'success'){
                     	window.location="http://members.startupsclub.org/home";
                     }
                    }
                });

      

     
   
                  
    },
   
    "theme": {
        "color": "#F37254"
    }
};

var rzp1 = new Razorpay(options);
     rzp1.open();             
})

var app = angular.module('Profile', []);

app.controller('postCtrl', function($scope, $http) {
var is_onload = true;
var load_sequence = 1;

    $scope.putPost = function() {

       
       var username = { post : $scope.post }

     $http.post("/putPost",username).success(function(response) {

      //var value=  JSON.parse(response);
          
      $('#posts_append_data').html(response);
      $('[data-toggle="tooltip"]').tooltip(); 
             //location.reload();
             $('.post_field').val('');    

              load_sequence = 1;
        }).error(function(){
            
        });


    };



  var app2=angular.module('coverModule', ['ngImgCrop']);
      app2.controller('coverCntl', function($scope) {
alert('fgsted');
        $scope.myImage='';
        $scope.myCroppedImage='';

        var handleFileSelect=function(evt) {

          var file=evt.currentTarget.files[0];
          var reader = new FileReader();
          reader.onload = function (evt) {
            $scope.$apply(function($scope){
              $scope.myImage=evt.target.result;
            });
          };
          reader.readAsDataURL(file);
        };
        angular.element(document.querySelector('#fileInput')).on('change',handleFileSelect);
      });



angular.element(document).ready(function() {
angular.bootstrap(document.getElementById("App2"), ['coverModule']);

});

$(document).ready(function() {
  var win = $(window);

  // Each time the user scrolls
  win.scroll(function() {
    // End of the document reached?
    if ($(document).height() - win.height() == win.scrollTop()) {
     load_post()
    }
  });
});



function load_post(){

 if(!is_onload){
      return false;
    }
    var display_user=$('#display_user').val();
    //alert(load_sequence);
     var load_search = {     
      load_sequence : load_sequence,
      display_user : display_user
    };

 $http.post("/loadmorepost",load_search).success(function(response) {

      //var value=  JSON.parse(response);
          
      $('.box-widget').last().after(response);
      $('[data-toggle="tooltip"]').tooltip(); 
       load_sequence ++ ;
             //location.reload();
             $('.post_field').val('');       
        }).error(function(){
            
        });

}
 


   


});
 
function comment_post(e,elm) {
 var key = e.which;

 if(key == 13)  // the enter key code
  {
    
var data_member=$(elm).attr('data-member');
    var post_id=$(elm).attr('data-post');
    var comment=$(elm).val();
    var hidden_token=$('#hidden_token').val();
    //$('input[name = butAssignProd]').click();
if(comment == ''){
  return false;
}
var sam = { comment : comment, post_id : post_id , _token:hidden_token,data_member:data_member };
     jQuery.ajax({
                    url: '/putComment',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   $('.comments_append_data'+post_id).html(data.data.view_data); 
                   $('#display_count').html(data.data.count);
                   $('.comment_field').val('');   
                    }
                });



  }
}


function delete_post(elm){



$.confirm({
    title: 'Post',
    content: 'Are you sure you want to delete this post?',
    buttons: {
        confirm: function () {
              var post_id=$(elm).attr('data-post');
 var hidden_token=$('#hidden_token').val();
  var sam = { post_id : post_id , _token:hidden_token };
     jQuery.ajax({
                    url: '/deletePost',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
$(elm).closest("div .box").remove();
                   //$('.comments_append_data'+post_id).html(data); 
                    }
                });
        },
        cancel: function () {
        
        },
      
    }
});




}

function delete_comment(elm){



$.confirm({
    title: 'Post',
    content: 'Are you sure you want to delete this post?',
    buttons: {
        confirm: function () {
              var post_id=$(elm).attr('data-post');
               var parent=$(elm).attr('data-parent');
 var hidden_token=$('#hidden_token').val();
  var sam = { post_id : post_id , _token:hidden_token, parent:parent };
     jQuery.ajax({
                    url: '/deleteComment',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
 $('.comments_append_data'+parent).html(data.data.view_data); 
$('#display_count').html(data.data.count);
                   //$('.comments_append_data'+post_id).html(data); 
                    }
                });
        },
        cancel: function () {
        
        },
      
    }
});




}

function view_all_comments(elm){

    var post_id=$(elm).attr('data-post');

    var hidden_token=$('#hidden_token').val();
    //$('input[name = butAssignProd]').click();

var sam = { post_id : post_id , _token:hidden_token };
     jQuery.ajax({
                    url: '/view_all_comments',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   $('.comments_append_data'+post_id).html(data); 
                   $('.comment_field').val('');   
                    }
                });

}


function sendMessage(elm){

  var role=$('#role').val();



if(role == 'regular'){
toastr.remove();
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
$(document).ready(function(){

$('#sendmessageuser').click(function(){
alert('ghry');
var user_id=$('#sendmessageuser').attr('data-user');
   var hidden_token=$('#hidden_token').val();
   var send_message_value=$('#send_message_value').val();
if(send_message_value == ''){
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
})



function like_button(elm){

var post_id=$(elm).attr('data-post');
var data_member=$(elm).attr('data-member');
var count=$(elm).attr('data-count');

var hidden_token=$('#hidden_token').val();
if($(elm).hasClass("liked")){
  var status='liked';
}else{
  var status='no';
}
var sam = { post_id : post_id , _token:hidden_token, status:status,data_member:data_member };
     jQuery.ajax({
                    url: '/likePost',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                  if(data.data == 'liked'){
                      $(elm).addClass("liked");
                       $(elm).find('.like_count').html(Number(count)+1);
                       $(elm).attr('data-original-title',($(elm).attr('data-original-title')+'you<br>'));
                     
                     $('[data-toggle="tooltip"]').focusout();
                      $(elm).attr('data-count',Number(count)+1);
                    }else{
                       $(elm).removeClass("liked");
                        $(elm).find('.like_count').html(count-1);
                        if($(elm).attr('data-original-title')=='you<br>'){
                        $(elm).attr('data-original-title','')
                        }else{
$(elm).attr('data-original-title',$(elm).attr('data-original-title').substring(0, ($(elm).attr('data-original-title').indexOf('>')+1)));

                        }
                        
                        $(elm).attr('data-count',count-1);
                           $('[data-toggle="tooltip"]').focusout();
                    }
                    }
                });

}


/*$('[data-toggle="tooltip"]').tooltip(); */




$('.div-check').mouseover(function(){
  $(".pop-one").show();
  
$(this).css({'box-shadow': '1px 1px 1px 1px '});
$('.popbox').show();
});
$('.div-check').mouseout(function(){
$(this).css({'-webkit-box-shadow' : 'none', '-moz-box-shadow' : 'none', 'box-shadow' : 'none'});
$('.popbox').hide();
$(".pop-one").hide();
  
});
$('.div-check2').mouseover(function(){
  $(".pop-two").show();
  
$(this).css({'box-shadow': '1px 1px 1px 1px '});
$('.popbox').show();
});
$('.div-check2').mouseout(function(){
$(this).css({'-webkit-box-shadow' : 'none', '-moz-box-shadow' : 'none', 'box-shadow' : 'none'});
$('.popbox').hide();
$(".pop-two").hide();
  
});

function comment_post_enter(elm) {



     var data_member=$(elm).attr('data-member');
    var post_id=$(elm).attr('data-post');
    var comment=$(elm).prevAll('textarea').val();
    var hidden_token=$('#hidden_token').val();
    //$('input[name = butAssignProd]').click();

if(comment == ''){
  return false;
}
var sam = { comment : comment, post_id : post_id , _token:hidden_token,data_member:data_member };
     jQuery.ajax({
                    url: '/putCommentHome',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   $('.comments_append_data'+post_id).html(data.data.view_data); 
                   $('.comment_field').val(''); 
                   $('#display_count').html(data.data.count);  
                    }
                });



  
}




