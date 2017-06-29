$(document).ready(function(){




//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
   $('.wpcf7-not-valid-tip').html('');
  if(animating) return false;

if($(this).hasClass('first')){

var flag='';
  var register_phone=$('#register_phone').val();
  var register_location=$('#register_location').val();

  var register_aoe=$('#register_aoe').val();
  var register_profile=$('#register_profile').val();
  var hidden_image=$('#hidden_image').val();
  var hidden_token=$('#hidden_token').val();
  var user_type=$('#user_type').val();
  var personal_domain=$('#personal_domain').val();
var phoneno = /^\d{10}$/;
   
if(user_type != 'general'){
var register_password=$('#register_password').val();
var register_cpassword=$('#register_cpassword').val();

if(register_password == ''){
  $('#register_password').after('<span class="wpcf7-not-valid-tip">This field is required</span>');  
}


if(register_cpassword == ''){
  $('#register_cpassword').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}
if((register_password != register_cpassword) && (register_password != '') && (register_cpassword != '')){
$('#register_cpassword').after('<span class="wpcf7-not-valid-tip">The Password and confirm password must be same</span>');
flag='set';



}


}
if(register_phone == ''){
  $('#register_phone').after('<span class="wpcf7-not-valid-tip">This field is required</span>'); 
}


if(register_location == ''){
  $('#register_location').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}
if(register_aoe == null){

  $('.multi_aoe').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}
if(personal_domain == null){
  $('#personal_domain').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}
if(hidden_image == ''){
  $('.register_profile_error').after('<br><span class="wpcf7-not-valid-tip">This field is required</span>');
}
if(!(register_phone.match(phoneno)) && register_phone != '' ){
       
  $('#register_phone').after('<span class="wpcf7-not-valid-tip">Please enter valid phone number</span>');
    return false;
        }
if(register_phone == '' || register_location == '' || register_aoe == null || personal_domain == null || hidden_image == ''){  

return false;
}
if(user_type != 'general'){
if(register_cpassword == '' || register_password == '' || flag == 'set'){
  return false;
}
}




/*var sam={
  register_phone : register_phone,
  register_location : register_location,
  register_aoe : register_aoe,
  register_profile : register_profile,
  _token: hidden_token,

}



  jQuery.ajax({
                    url: '/checksteps',
                    type: 'POST',
                    data: sam,  
                    dataType : "json",
            
                    cache: false,                
                    success: function(data) {
                               // console.log(data);
                    }
                });*/


}


if($(this).hasClass('second')){
var is_startup=$('input[type=radio][name=form-field-radio]:checked').val();
  var joinsuc=$('.joinsuc').val();
  
if(is_startup == 'yes'){

  var startup_name=$('#startup_name').val();
  var startup_age=$('#startup_age').val();

  var startup_website=$('#startup_website').val();
  var startup_type=$('#startup_type').val();
  var startup_industry=$('#startup_industry').val();
  var elevator_pitch=$('#elevator_pitch').val();
  var hidden_token=$('#hidden_token').val();
var phoneno = /^\d{10}$/;
  

if(startup_name == ''){
  $('#startup_name').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}


if(startup_age == null){
  $('#startup_age').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}
if(startup_website == ''){
  $('#startup_website').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}
if(startup_type == null){
  $('#startup_type').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
}
if(startup_industry == null){
  $('#startup_industry').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
}
if(elevator_pitch == ''){
  $('#elevator_pitch').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
}
if(joinsuc == null){
  $('.multi_join').after('<span class="wpcf7-not-valid-tip">This field is required</span><br>');
  
}

if(startup_name=='' || startup_age == null || joinsuc == null || startup_website == '' || startup_type == null || startup_industry == null || elevator_pitch == ''){ 

return false;
}




/*var sam={
  startup_name : startup_name,
  startup_age : startup_age,
  startup_website : startup_website,
  startup_type : startup_type,
  startup_industry : startup_industry,
  elevator_pitch : elevator_pitch,
  _token: hidden_token,

}



  jQuery.ajax({
                    url: '/checksteps',
                    type: 'POST',
                    data: sam,  
                    dataType : "json",
          
                    cache: false,                
                    success: function(data) {
                               // console.log(data);
                    }
                }); */

}else{
var current_engg=$("input[name='form-field-radio1']:checked").val();

  var company_name=$('#company_name').val();
  var user_desn=$('#user_desn').val();
if(company_name == ''){
  $('#company_name').after('<br><span class="wpcf7-not-valid-tip">This field is required</span><br>');
  
}
if(current_engg == ''){
  $('#current_engg').after('<span class="wpcf7-not-valid-tip">This field is required</span>');
  
}
if(user_desn == ''){
  $('#user_desn').after('<br><span class="wpcf7-not-valid-tip">This field is required</span><br>');
  
}
if(joinsuc == null){
  $('.multi_join').after('<span class="wpcf7-not-valid-tip">This field is required</span><br>');
  
}

if(company_name=='' || user_desn == '' || current_engg == ''|| joinsuc == null ){ 

return false;

}
}

}

  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'transform': 'scale('+scale+')'});
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".previous").click(function(){

  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function(){
$.loader.open();
  var register_phone=$('#register_phone').val();
  var register_location=$('#register_location').val();
  var register_aoe=$('#register_aoe').val();
  var register_profile=$('#register_profile').val();
  var register_password=$('#register_password').val();
  var register_cpassword=$('#register_cpassword').val();
  var personal_domain=$('#personal_domain').val();

  var hidden_image=$('#hidden_image').val();
  var temp_id=$('#temp_id').val();
  var user_type=$('#user_type').val();
  var hidden_token=$('#hidden_token').val();

  var rusc=$("input[name='form-field-radio']:checked").val();
  var current_engg=$("input[name='form-field-radio1']:checked").val();

  var startup_name=$('#startup_name').val();
  var startup_age=$('#startup_age').val();
  var startup_website=$('#startup_website').val();
  var startup_type=$('#startup_type').val();
  var startup_industry=$('#startup_industry').val();
  var elevator_pitch=$('#elevator_pitch').val();
  var joinsuc=$('.joinsuc').val();
  var company_name=$('#company_name').val();
  var user_desn=$('#user_desn').val();
  var old_flag=$('#old_flag').val();
  



var role=$("#hidden_role").val();
    
if(role == undefined){
  $('.member_lay').after('<span class="wpcf7-not-valid-tip">This field is required');
  return false;
}
var sam={
  register_phone : register_phone,
  register_location : register_location,
  register_aoe : register_aoe,
  register_profile : register_profile,
  register_password : register_password,
  register_cpassword : register_cpassword,
  personal_domain : personal_domain,

  hidden_image : hidden_image,
  temp_id : temp_id,
  user_type : user_type,

  rusc : rusc,
  company_name : company_name,
  user_desn : user_desn,
  current_engg : current_engg,
  joinsuc : joinsuc,
  startup_name : startup_name,
  startup_age : startup_age,
  startup_website : startup_website,
  startup_type : startup_type,
  startup_industry : startup_industry,
  elevator_pitch : elevator_pitch,
  role : role,
  _token: hidden_token,

}

jQuery.ajax({
                    url: '/checkregister',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                   

if(jQuery.trim(data) != 'success'){
$.loader.close();
                 $.each(data.errors, function(key,val) { 

                                $('#'+key).after('<span class="wpcf7-not-valid-tip">'+val[0]+'<span>');
                                
                            });


}else{



 
if(role == 'regular' || old_flag=='old'){

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

}else{
$.loader.close();
  var options = {
    "key": "rzp_live_suqyYzqhV4bJKq",
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




}



}///////////









                        }
  });//end of first ajax







})//end of submit

$('#register_profile').change(function(){
$.loader.open();

    var file_data = $('#register_profile').prop('files')[0];   
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
                    url: '/upload_pic',
                    type: 'POST',
                    data: form_data,  
                    contentType: false,
                    processData: false,
                    cache: false,                  
                    success: function(data) {
                var value1 = $.parseJSON( data );
    $.loader.close();
                $('#hidden_image').val(value1);
var url="http://members.startupsclub.org/image/"+value1;
                $('#display_pic').attr('src',url);
                         //window.location="http://startupsclub.org/member-registration-success/?txnsuccess="+value1.transid;
                    }
                });

})




var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;

    // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(strs, function(i, str) {
      if (substrRegex.test(str)) {
        matches.push(str);
      }
    });

    cb(matches);
  };
};













})






angular.module('myApp', [])
.controller('TestCtrl', function($scope, $q){

    $scope.contacts = [{name: 'Business Development'},
                       {name: 'Marketing'},
                       {name: 'Technical'},
                       {name: 'Product Management'},
                       {name: 'Design'},
                       {name: 'Operations'},
                       {name: 'Programming'},
                       {name: 'Sales'},
                       {name: 'Growth'},
                       {name: 'Fundraising'},
                       {name: 'Finance'},
                       {name: 'Strategy'},
                       {name: 'User Experience'},
                       {name: 'Public Relations'},
                       {name: 'Legal'}];
    $scope.selected = [];
}).directive('typeahead', function ($filter) {
    return {
        restict: 'AEC',
        scope: {
          items: '='
        },
        require: 'ngModel',
        link: function(scope, elem, attrs, ngModel) {
          var blur = false;
          var original = scope.items;
          scope.focused = false;
          scope.list = [];
          ngModel.$modelValue = [];
          scope.filteredItems = scope.items;
          scope.selPos = 0;
          
          scope.focusIn = function() {
            if (!scope.focused){
              scope.focused = true;
              blur = false;
              scope.selPos = 0;
            }
          };
          scope.focusOut = function() {
            if (!blur) {
              scope.focused = false;
            } else {
              console.log("focusing");
              angular.element(elem).find('input')[0].focus();
              blur = false;
            }
          };
          
          scope.getDisplayItem = function(item) {
            return item[attrs.displayitem];
          };
          
          scope.getDisplayTag = function(item) {
            return item[attrs.displaytag];
          };
          
          scope.addItem = function(item) {
            scope.list.push(item);
            scope.itemsearch = "";
            blur = true;
            if (scope.selPos >= scope.filteredItems.length-1) {
              scope.selPos--;
            }
            ngModel.$setViewValue(scope.list);
          }
          
          scope.removeItem = function(item) {
            scope.list.splice(scope.list.indexOf(item), 1);
            ngModel.$setViewValue(scope.list);
            
          }

          scope.hover = function(index) {
            scope.selPos = index;
          }
          scope.keyPress = function(evt) {
            console.log(evt.keyCode);
            var keys = {
              38: 'up',
              40: 'down',
              8 : 'backspace',
              13: 'enter',
              9 : 'tab',
              27: 'esc'
            };
            
            switch (evt.keyCode) {
              case 13: 
                if(scope.selPos > -1) {
                  scope.addItem(scope.filteredItems[scope.selPos]);
                }
                break;
              case 8: 
                if (!scope.itemsearch || scope.itemsearch.length == 0) {
                  if (scope.list.length > 0) {
                    scope.list.pop();
                  }
                }
                break;
              case 38: 
                if (scope.selPos > 0) {
                  scope.selPos--;
                } 
                break;
              case 40: 
                if (scope.selPos < scope.filteredItems.length-1) {
                  scope.selPos++; 
                }
                break;
              default:
                scope.selPos = 0; //clear selection
                scope.focusIn();
            }
          };
        },
      template: '<div class="typeahead">\
        <ul data-ng-class="{\'focused\': focused}" \
            class="tags" data-ng-click="focusIn()">\
          <li class="tag" data-ng-repeat="s in list track by $index">\
            {{getDisplayTag(s)}} <span data-ng-click="removeItem(s)">x</span>\
          </li> \
          <li class="inputtag">\
            <input data-ng-blur="focusOut()" focus="{{focused}}" type="text" data-ng-model="itemsearch" data-ng-keydown="keyPress($event)"/>\
          </li>\
        </ul>\
        <ul class="list" data-ng-show="focused">\
          <li data-ng-class="{\'active\': selPos == $index}" data-ng-repeat="item in (filteredItems = (items | filter: itemsearch | notin: list)) track by $index" data-ng-mousedown="addItem(item)" data-ng-mouseover="hover($index)">\
{{getDisplayItem(item)}}</li>\
        </ul>\
      </div>'
    };
}).directive('focus', function () {
  return {
    restrict: 'A',
    link: function (scope, element, attrs) {
      attrs.$observe('focus', function (newValue) {
        if (newValue == 'true') {
          element[0].focus();
        }
      });
    }
  }
}).filter('notin', function() {
  return function(listin, listout) {
    return listin.filter(function(el) { 
      return listout.indexOf(el) == -1 ;
    });
  };
});


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
})
/*$(".joinsuc").multiSelect( 'refresh' );
$(".areaofexp").multiSelect( 'refresh' );*/
$('.joinsuc').multiselect({
    columns: 2,
    placeholder: 'Purpose to join Startups Club ?'
});
$('.areaofexp').multiselect({
    columns: 2,
    placeholder: 'Area of Expertise',
  

});



$('.reg').click(function(){

$(this).css({'box-shadow': 'rgba(62, 27, 0, 0.37) 0px 0px 21px 3px'});
$('.pio').css({'-webkit-box-shadow' : 'none', '-moz-box-shadow' : 'none', 'box-shadow' : 'none'});
$('#hidden_role').val('regular');
});
$('.pio').click(function(){

$(this).css({'box-shadow': 'rgba(62, 27, 0, 0.37) 0px 0px 21px 3px'});
$('.reg').css({'-webkit-box-shadow' : 'none', '-moz-box-shadow' : 'none', 'box-shadow' : 'none'});
$('#hidden_role').val('pioneer');
});

$('.pio').css({'box-shadow': 'rgba(62, 27, 0, 0.37) 0px 0px 21px 3px'});
$('.reg').css({'-webkit-box-shadow' : 'none', '-moz-box-shadow' : 'none', 'box-shadow' : 'none'});
$('#hidden_role').val('pioneer');


