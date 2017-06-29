

$(function () {

  $('#login_form').parsley().on('field:validated', function() {

    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(event) {
/*    event.preventDefault();
    var username=$('#user_email').val();
    var password=$('#user_password').val();
    var hidden_token=$('#hidden_token').val();
    var sam={
      'username':username, 
      'user_password' : password,
      '_token': hidden_token, 
    };
    
  jQuery.ajax({
                    url: '/checkuser',
                    type: 'POST',
                    data: sam,          
                    cache: false,                
                    success: function(data) {
                var value=  JSON.parse(data);
         
             if(value != 'error'){
              window.location.href = 'http://dev.startupsclub.com/home';
             }else{
               alert('please enter valid username and password')
             }
                    }
                });*/
  //return false;
  
  });
});

$(function () {

  $('#register_form').parsley().on('field:validated', function() {

    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function(event) {

  //return false;
  
  });
});





/*var app = angular.module('scLogin', []);*/
/*app.controller('myCtrl', function($scope, $http) {

$scope.user_email=null;
$scope.user_password=null;
    $scope.login_user = function() {
      
       console.log($scope.user);
       var username = {'username':$scope.user.user_email, 'user_password' : $scope.user.user_password }
     $http.post("/checkuser",username).success(function(response) {
      var value=  JSON.parse(response);
             console.log(response);
             if(value != 'error'){
 window.location.href = 'http://dev.startupsclub.com/home';
             }else{
               alert('please enter valid username and password')
             }
           
        }).error(function(){
            
        });


    };


   


});*/

/*app.controller('registerCtrl', function($scope, $http) {

$scope.register_sc = function() {
alert('efe');
  console.log($scope.user);

   var register_details = {
    'user_full_name':$scope.user.user_fullname, 
    'user_emailaddress':$scope.user.user_emailaddress, 
    'user_pass':$scope.user.user_pass, 
    'user_passconfirm':$scope.user.user_passconfirm, 
   'user_phone' : $scope.user.user_phone 
 }
     $http.post("/checkregistration",register_details).success(function(response) {
      var value=  JSON.parse(response);
             console.log(value);
             if(value != 'error'){
 window.location.href = 'http://dev.startupsclub.com/register';
             }else{
               
             }
           
        }).error(function(){
            
        });


     };
});*/

