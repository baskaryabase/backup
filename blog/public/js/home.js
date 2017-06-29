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

 

var app = angular.module('Home', []);

app.controller('homeCtrl', function($scope, $http) {
var is_onload = true;
var load_sequence = 1;


    $scope.putPostHome = function() {

var url_fetch='';
var image_html='';
           if($('#url_flag').val()=='set'){

 var output = $('.liveurl');

                       var title= output.find('.title').text();
                        var description=output.find('.description').text();
                        var url=output.find('.url').text();
                        var image=output.find('img').attr('src');
                        if(image)
image_html='<div class="customimage"><img class="active" src="'+image+'"></div>';
            var url_fetch='<a target="_blank" href="'+url+'"><div class="custom_url"><div class="inner">'+image_html+'<div class="details"><div class="info"><div class="customtitle">'+title+'</div><div class="customdescription">'+description+'</div><div class="customurl">'+url+'</div></div><div class="video"></div></div></div></div></a>';

           }
       var username = { post : $scope.post, url_fetch:url_fetch }

     $http.post("/putPostHome",username).success(function(response) {
if(url_fetch){
window.location.reload();
}else{

//var value=  JSON.parse(response);
           $('#url_flag').val('');
          // $('.liveurl').remove();


      $('#posts_append_data').html(response);
      $('[data-toggle="tooltip"]').tooltip(); 
             //location.reload();
             $('.post_field').val('');    

              load_sequence = 1;

}
      
        }).error(function(){
            
        });


    };

/*$(document).ready(function() {

  var win = $(window);

  // Each time the user scrolls
  win.scroll(function() {
    // End of the document reached?

    if (($(document).height() - win.height() == win.scrollTop())) {
alert($(document).height() - win.height());
alert(win.scrollTop());
     load_post1()
    }
  });
});*/

$(window).scroll(function() {

   if($(window).scrollTop() + $(window).height() == $(document).height()) {
     console.log($(window).scrollTop());
  console.log($(window).height());
  console.log($(document).height());
 load_post1();
   }
});



function load_post1(){

 if(!is_onload){
      return false;
    }
    //alert(load_sequence);
     var load_search = {     
      load_sequence : load_sequence,
    };

 $http.post("/loadmorepostHome",load_search).success(function(response) {

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
/*function comment_post_home(e,elm) {
 var key = e.which;

 if(key == 13)  // the enter key code
  {
     
    var post_id=$(elm).attr('data-post');
    var comment=$(elm).val();
    var hidden_token=$('#hidden_token').val();
    var data_member=$(elm).attr('data-member');
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
}*/
function comment_post(elm) {



    
     var post_id=$(elm).attr('data-post');
    var comment=$(elm).prevAll('textarea').val();
    var hidden_token=$('#hidden_token').val();
    //$('input[name = butAssignProd]').click();
var data_member=$(elm).attr('data-member');
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
    content: 'Are you sure you want to delete this comment?',
    buttons: {
        confirm: function () {
              var post_id=$(elm).attr('data-post');
              var parent=$(elm).attr('data-parent');
 var hidden_token=$('#hidden_token').val();
  var sam = { post_id : post_id , _token:hidden_token , parent:parent };
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

  
 function myprofilehref(web){

      window.location.href = web;
    }

function view_all_comments_home(elm){

    var post_id=$(elm).attr('data-post');

    var hidden_token=$('#hidden_token').val();
    //$('input[name = butAssignProd]').click();

var sam = { post_id : post_id , _token:hidden_token };
     jQuery.ajax({
                    url: '/view_all_comments_home',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   $('.comments_append_data'+post_id).html(data); 
                   $('.comment_field').val('');   
                    }
                });

}
function view_all_comments(elm){

    var post_id=$(elm).attr('data-post');
    

    var hidden_token=$('#hidden_token').val();
    //$('input[name = butAssignProd]').click();

var sam = { post_id : post_id , _token:hidden_token };
     jQuery.ajax({
                    url: '/view_all_comments_home',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {

                   $('.comments_append_data'+post_id).html(data); 
                   $('.comment_field').val('');   
                    }
                });

}


function like_button(elm){



var post_id=$(elm).attr('data-post');
var count=$(elm).attr('data-count');
var data_member=$(elm).attr('data-member');

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

$('[data-toggle="tooltip"]').tooltip(); 