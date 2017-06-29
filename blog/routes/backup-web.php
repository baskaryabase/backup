<?php
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

/*Route::get('/', function () 
{    return view('login');

});*/

Route::group(['middleware' => ['revalidate']], function () {
 Route::get('/', 'Sc_controller@get_allusers');

  Route::get('/', function () {
   if (session()->has('userid')) {
       return redirect()->action(
    'MainController@getHome'
);
   } else {
     
    return view('login');

   }
 });

 
  Route::post('/get-find-member', 'MainController@get_find_member');

  Route::get('/logout', 'MainController@doLogout');
Route::get('/register', 'Sc_controller@getWizard');
Route::get('/socialregister', 'Sc_controller@getsocial');

  
});
Route::post('/register_user', 'Sc_controller@create_user');

  Route::get('/error404', function () {
return view('error404');
  });


Route::get('/test', 'MainController@index');
Route::get('/fb', 'Sc_controller@fb');
Route::get('/link', 'Sc_controller@link');

Route::post('/checkuser', 'Sc_controller@validate_user');
Route::post('/checkregister', 'Sc_controller@validate_register');
Route::post('/registeruser', 'Sc_controller@check_register');
Route::post('/checkregistration', 'Sc_controller@validate_registration');
Route::post('/checksteps', 'Sc_controller@validate_steps');



Route::post('/upload_pic', 'Sc_controller@upload_picture');
Route::get('/redirect', 'Sc_controller@redirect');
Route::get('/redirectlink', 'Sc_controller@redirectlink');
Route::get('/callback', 'Sc_controller@callback');
Route::get('/callbacklink', 'Sc_controller@callbacklink');
Route::get('/forgot-password', 'Sc_controller@getForgotPasswordPage');
Route::post('/check-forgot', 'Sc_controller@checkForgotPassword');


Route::get('/reset-password', 'Sc_controller@checkExpiryForgotPassword');
Route::post('/resetnewpassword', 'Sc_controller@saveNewPassword');

Route::get('/cronMail', 'MainController@cronMail');
Route::get('/become-a-pioneer-member', 'MainController@becomePioneer');
Route::post('/pioneerregisteruser', 'MainController@check_register_pioneer');
Route::post('/check_become_pioneer', 'MainController@check_become_pioneer');

Route::get('/cronWeeklyNotification', 'MainController@cronWeeklyNotification');
Route::get('/promotionalMail', 'MainController@promotionalMail');



Route::group(['middleware' => 'check'], function () { 


/////////////////////////////////////////////////////////////////////////////////
Route::get('/home', 'MainController@getHome');
Route::get('/profile/{fn}', 'MainController@getProfile');
Route::get('/post/{fn}', 'MainController@getSinglePost');
Route::get('/edit-profile', 'MainController@editProfile');
Route::post('/update_basicprofile', 'MainController@updateBasicProfile');
Route::post('/update_companyprofile', 'MainController@updateCompanyProfile');
Route::post('/update_socialprofile', 'MainController@updateSocialProfile');
Route::post('/update_settingsprofile', 'MainController@updateSettingsProfile');
Route::post('/change_avatar', 'MainController@changeAvatar');
Route::post('/change_cover', 'MainController@changeCover');
Route::post('/cropped_cover', 'MainController@croppedChangeCover');

Route::get('/edit-company-profile', 'MainController@getCompanyProfile');
Route::get('/edit-social-profile', 'MainController@getSocialProfile');
Route::get('edit-settings-profile', 'MainController@getSettingsProfile');
Route::get('edit-membership', 'MainController@getMembershipProfile');
Route::post('/putPost', 'MainController@insertPost');
Route::post('/putComment', 'MainController@insertComment');
Route::post('/deletePost', 'MainController@deletePost');
Route::post('/deleteComment', 'MainController@deleteComment');
Route::post('/loadmorepost', 'MainController@loadMorePost');
Route::post('/view_all_comments', 'MainController@viewAllComments');

////////////////////////////////home/////////////////////////////////////////////////////////


Route::post('/putPostHome', 'MainController@putPostHome');
Route::post('/loadmorepostHome', 'MainController@loadMorePostHome');
Route::post('/putCommentHome', 'MainController@insertCommentHome');
Route::post('/view_all_comments_home', 'MainController@viewAllCommentsHome');

Route::get('/find', 'MainController@getFind');
Route::get('/messages/{fn?}', 'MainController@getMessages');
Route::post('/getMembers', 'MainController@getMembers');
Route::post('/sendMessages', 'MainController@insertMessages');
Route::post('/send-message-user', 'MainController@insertMessagesUser');
Route::post('/get-conversation', 'MainController@getConversation');
Route::post('/likePost', 'MainController@likePost');
Route::post('/get_notify', 'MainController@getNotify');
Route::post('/get_notify_msg', 'MainController@getNotifyMsg');
Route::post('/checkSc', 'MainController@getNotifyBadge');
Route::get('/notification', 'MainController@getNotificationPage');
Route::post('/urlFetch', 'MainController@urlFetch');
Route::post('/get-member-loadmore', 'MainController@getMemberLoadmore');
Route::get('/sc_test', 'MainController@testFunction');
 


});

Route::group(['prefix' => 'admin','middleware' => 'admin_check'], function () {

Route::get('/dashboard', 'AdminController@getMain');
Route::get('/announcements', 'AdminController@getAnnouncements');
Route::get('/member-partner-logo', 'AdminController@memberPartnerLogo');
Route::get('/allmembers', 'AdminController@getAllmembers');
Route::post('/putFollowup', 'AdminController@insertFollowup');
Route::post('/getFollowup', 'AdminController@getFollowup');
Route::get('/pioneer_members', 'AdminController@getAdminPioneers');
Route::get('/regular_members', 'AdminController@getAdminRegular');
Route::get('/not_registered', 'AdminController@getNotRegistered');
Route::get('/admin_create', 'AdminController@AdminCreateUser');
Route::post('/admincreateuser', 'AdminController@create_user');
Route::post('/getFilterUser', 'AdminController@getFilterUser');
Route::get('/getCsvAdmin/{fn}', 'AdminController@getCsvAdmin');
Route::get('/edit/{fn}', 'AdminController@AdminEditProfile');
Route::post('/admin_update_basicprofile', 'AdminController@updateBasicProfile');
Route::post('/update_companyprofile', 'AdminController@updateCompanyProfile');
Route::post('/update_socialprofile', 'AdminController@updateSocialProfile');
Route::post('/getSoldProduct', 'AdminController@getSoldProduct');
Route::post('/updateSoldAdmin', 'AdminController@updateSoldAdmin');
Route::post('/updateAnnouncement', 'AdminController@updateAnnouncement');
Route::post('/updateAnnouncementStatus', 'AdminController@updateAnnouncementStatus');
Route::post('/addMpLogo', 'AdminController@addMpLogo');
Route::post('/changeMpLogo', 'AdminController@changeMpLogo');
Route::post('/deleteLogo', 'AdminController@deleteLogo');

 });
/*Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});*/