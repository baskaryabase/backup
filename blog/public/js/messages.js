

 var role=$('#role').val();

$('.role_monitization').on("focus", function(){

toastr.remove()
if(role=='regular'){
$('.role_monitization').blur();
 Command: toastr["success"]("<p>Only pioneer can message</p><a href='http://members.startupsclub.org/edit-membership'>Become a pioneer member</a>")

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

  /* 	 $('#search_member').typeahead({

        ajax: { 
                url: '/getMembers',
                triggerLength: 1 
              } 
    });*/


var substringMatcher = function(strs) {
  return function findMatches(q, cb) {
    var matches, substringRegex;
 

 // an array that will be populated with substring matches
    matches = [];

    // regex used to determine if a string contains the substring `q`
    substrRegex = new RegExp(q, 'i');

    // iterate through the pool of strings and for any string that
    // contains the substring `q`, add it to the `matches` array
    $.each(states, function(i, str) {
      if (substrRegex.test(str)) {

        matches.push(str);
     
      }
    });
   console.log(matches);
    cb(matches);


  };
};

var states = ['Mumbai', 'Delhi', 'Bangalore', 'Chennai', 'Hyderabad',
  'Ahmedabad', 'Kolkata', 'Surat', 'Pune', 'Jaipur', 'Lucknow',
  'Kanpur', 'Nagpur', 'Visakhapatnam', 'Indore', 'Thane', 'Bhopal', 'Patna',
  'Coimbatore', 'Agra', 'Madurai', 'Warangal', 'Jamnagar'
];

$('#search_member').typeahead({

  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'states',
  source: substringMatcher(states)
});
  	
 

 var app = angular.module('messages', []);

app.controller('chat_panel', function($scope, $http) {


    $scope.sendMessages = function() {

      
       var username = { mesg : $scope.mesg_value , display_user : $('#display_user').val() }

     $http.post("/sendMessages",username).success(function(response) {
         
window.location.reload();
/*$('#message_append').html(response.data)
$('#send_msg').val('');
var d = $('.chat-message');
d.scrollTop(d.prop("scrollHeight"));*/
             
        }).error(function(){
            
        });


    };
    $scope.get_conversation = function(id) {

   var s=$('#user_token_'+id).val();
       var username = {  conv : id , user_id : s }

     $http.post("/get-conversation",username).success(function(response) {
         

$('#message_append').html(response.data)
$('#send_msg').val('');
var d = $('.chat-message');
d.scrollTop(d.prop("scrollHeight"));
             
        }).error(function(){
            
        });


    };



});
var d = $('.chat-message');
d.scrollTop(d.prop("scrollHeight"));

