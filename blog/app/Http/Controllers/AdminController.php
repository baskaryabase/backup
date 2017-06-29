<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
/*use Request;*/
use App\Http\models\sc_users;
use App\Http\models\sc_posts;
use App\Http\models\sc_usermetas;
use App\Http\models\sc_comments; 
use App\Http\models\sc_solds;
use App\Http\models\sc_announcements;
use App\Http\models\sc_events;
use App\Http\models\sc_memberpartner_logos;
use App\Http\models\sc_followups;
use App\Http\models\sc_likes;
use App\Http\models\sc_notifications;
use App\Http\models\sc_speakers;
use App\Http\models\users_company_details;
use Illuminate\Support\Facades\Redirect;
use Image; 
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\models\messages;
use App\Http\models\User_temps;
use Nahid\Talk\Facades\Talk;
use Validator;
use Response;
use Mail;
use Excel;
use App\Mail\CronExistingUser;
use Razorpay\Api\Api;
use App\Mail\PioneerMail;
use App\Mail\RegularMail;

use Illuminate\Support\Facades\Crypt;

class Admincontroller extends Controller
{


function getMain(){
  $result['regular'] = Sc_users::where('role', '=', 'regular')->count();
  $result['pioneer'] = Sc_users::where('role', '=', 'pioneer')->count();

  return view('admin_dashboard')->with('count_members',$result);
}
function getAllmembers(){


	 $result_check = Sc_users::where('role', '!=', 'founder')->get();
     $result['details'] = $result_check->toArray();
$location = Sc_users::query()->pluck('sc_location');
        $result['location'] = array_unique($location->toArray());

  return view('admin_allmembers')->with('users', $result);;
}

function insertFollowup(Request $request){

       $insert_array= array(

        'comments'=>$request->input('followup_text'),
        'parent_user'=>$request->input('parent_user'),
        'commented_user'=>session()->get('userid'),
        'followed_date'=>date("Y-m-d H:i:s"),
   
        );
       $results = DB::table('sc_followups')->insertGetId($insert_array);
$followup_obj=Sc_followups::query()->leftjoin('sc_users as users','users.id', '=', 'sc_followups.commented_user')
	->where('parent_user','=',$request->input('parent_user'))->get();
$followup_array = $followup_obj->toArray();

return view('follow_ups',['follow_ups' => $followup_array]);


}

function getFollowup(Request $request){

	$followup_obj=Sc_followups::query()->leftjoin('sc_users as users','users.id', '=', 'sc_followups.commented_user')
	->where('parent_user','=',$request->input('parent_user'))->get();
$followup_array = $followup_obj->toArray();
/*echo '<pre>';
print_r($followup_array);
echo '</pre>';*/
return view('follow_ups',['follow_ups' => $followup_array]);

}
 
function getAdminPioneers(){


	 
     

     $result_check = Sc_users::where('role', '=', 'pioneer')->get();
     $result['details'] = $result_check->toArray();
$location = Sc_users::query()->pluck('sc_location');
        $result['location'] = array_unique($location->toArray());
/*echo '<pre>';
print_r($result);
echo '</pre>';*/
  return view('admin_allmembers')->with('users', $result);

}
function getAdminRegular(){


	 $result_check = Sc_users::where('role', '=', 'regular')->get();
    $result['details'] = $result_check->toArray();
$location = Sc_users::query()->pluck('sc_location');
        $result['location'] = array_unique($location->toArray());
/*echo '<pre>';
print_r($result);
echo '</pre>';*/
  return view('admin_allmembers')->with('users', $result);

}
function getNotRegistered(){

$email = Sc_users::query()->pluck('sc_email');
/*echo '<pre>';
print_r($email->toArray());
echo '</pre>';*/
	 $result_check = User_temps::where('user_flag', '=', 'old')
   ->whereNotIn('email_id', $email->toArray())
   ->get();
        $result['details'] = $result_check->toArray();
$location = Sc_users::query()->pluck('sc_location');
        $result['location'] = array_unique($location->toArray());
/*echo '<pre>';
print_r($result);
echo '</pre>';*/
  return view('admin_not_registered')->with('users', $result);;

}


function getFilterUser(Request $request){

  $admin_name=$request->input('admin_name');
  $admin_role=$request->input('admin_role');
  $admin_city=$request->input('admin_city');
  $date_range=$request->input('date_range');

  $result_check = DB::table('sc_users as scu')
  

->when($admin_name, function ($query) use ($admin_name) {
          return $query->where('scu.sc_fullname', 'like', '%'.$admin_name.'%');

               
                })
/*->when($joinsuc, function ($query) use ($joinsuc) {
                    $return_join= $query->whereIn('sc_usermetas.meta_value', $joinsuc)
                    ->where('sc_usermetas.meta_key', 'joinsuc');
                    return $return_join;
               
                })*/
->when($admin_role, function ($query) use ($admin_role) {

                    return $query->where('scu.role', $admin_role);
               
                })
->when($date_range, function ($query) use ($date_range) {
$date=explode('to', $date_range);

                    return $query->whereBetween('scu.created_date', [date('Y-m-d H:i:s',strtotime($date[0])), date('Y-m-d H:i:s',strtotime($date[1]))]);
               
                })
->when($admin_city, function ($query) use ($admin_city) {
                    return $query->whereIn('scu.sc_location', $admin_city);
               
                })





->get();
$filter_array['details']=$result_check->toArray();


$result=view('admin_filtered_append')->with('users',$filter_array)->render();
return response()->json(['status'=>'success', 'data'=>$result], 200);


}
function getCsvAdmin($filter1){



/*echo '<pre>';
print_r($filter);
echo '</pre>';
die;*/

Excel::create('Filename', function($excel) use($filter1){

    $excel->sheet('Sheetname', function($sheet) use($filter1){
      $filter=explode('~', $filter1);
  $admin_name=$filter[1];
  $admin_role=$filter[0];
 $admin_city=explode('@', $filter[3]);
  $date_range=$filter[2];

  $result_check = DB::table('sc_users as scu')
  

->when($admin_name, function ($query) use ($admin_name) {
          return $query->where('scu.sc_fullname', 'like', '%'.$admin_name.'%');

               
                })
/*->when($joinsuc, function ($query) use ($joinsuc) {
                    $return_join= $query->whereIn('sc_usermetas.meta_value', $joinsuc)
                    ->where('sc_usermetas.meta_key', 'joinsuc');
                    return $return_join;
               
                })*/
->when($admin_role, function ($query) use ($admin_role) {

                    return $query->where('scu.role', $admin_role);
               
                })
->when($date_range, function ($query) use ($date_range) {
$date=explode('to', $date_range);

                    return $query->whereBetween('scu.created_date', [date('Y-m-d H:i:s',strtotime($date[0])), date('Y-m-d H:i:s',strtotime($date[1]))]);
               
                })
->when($admin_city, function ($query) use ($admin_city) {
                    return $query->whereIn('scu.sc_location', $admin_city);
               
                })





->get();

$filter_array['details']=$result_check->toArray();


$array=json_decode(json_encode($filter_array['details']), true);

       $sheet->with($array);

    });

})->export('csv');


/*$result=view('admin_filtered_append')->with('users',$filter_array)->render();
return response()->json(['status'=>'success', 'data'=>$result], 200);*/


}


function AdminCreateUser(){

   
  return view('admin_create_user');


}


function create_user(Request $request){

$if_exists=Sc_users::where('sc_email', '=',$request->input('register_email'))->get();

if($if_exists->toArray()){
  return Redirect::to('/error404/');
}


        $full_name_slug=str_slug($request->input('register_full'), '.');
        $unique_namecheck = Sc_users::where('sc_unique_name', '=',$full_name_slug)->get();
        $unique_check = $unique_namecheck->toArray();
     
if($unique_check){
  $full_name_slug=str_slug($request->input('register_full')." ".str_random(1), '.');
}
if(filter_var($request->input('register_profile'), FILTER_VALIDATE_URL) === FALSE)
{
        $profile_url='http://members.startupsclub.org/image/'.$request->input('register_profile');
}else{
        $profile_url=$request->input('register_profile');
}


  $insert_array= array(
        'role'=>$request->input('role'),
        'sc_login'=>$request->input('register_email'),
        'sc_pass'=>md5(!empty($request->input('register_password'))?$request->input('register_password'):$result[0]['password']),
        'sc_fullname'=>$request->input('register_full'),
        'sc_email'=>$request->input('register_email'),
        'sc_phone'=>$request->input('register_phone'),
        'sc_status'=>1,
        'online_status'=>1,
        'sc_profile_pic'=>$profile_url,
        'personal_domain'=>$request->input('personal_domain'),
        'sc_location'=>$request->input('register_location'),
        
        'register_type'=>$request->input('user_type'),
        'temp_id'=>'admin',
        'created_date'=>date("Y-m-d H:i:s"),
        'sc_unique_name'=>$full_name_slug
        );
       $user_id = DB::table('sc_users')->insertGetId($insert_array);

$aoe_array=array();
foreach ($request->input('register_aoe') as $key => $value) {
 $aoe_array[]=array(
'user_id'=>$user_id,
'meta_key'=>'area_of_expertise',
'meta_value'=>$value,
  );
}
DB::table('sc_usermetas')->insert($aoe_array);
$joinsuc_array=array();
foreach ($request->input('joinsuc') as $key => $value) {
 $joinsuc_array[]=array(
'user_id'=>$user_id,
'meta_key'=>'joinsuc',
'meta_value'=>$value,
  );
}
DB::table('sc_usermetas')->insert($joinsuc_array);

       $company_array=array(
        'member_id'=>$user_id,
        'startup_name'=>$request->input('startup_name'),
        'startup_age'=>$request->input('startup_age'),
        'startup_stage'=>$request->input('startup_industry'),
        'startup_website'=>$request->input('startup_website'),
        'startup_type'=>$request->input('startup_type'),
        'elevator_pitch'=>$request->input('elevator_pitch'),
        'created_date'=>date("Y-m-d H:i:s"),
        'is_sc'=>$request->input('rusc'),
        'company_name'=>$request->input('company_name'),
        'user_desn'=>$request->input('user_desn'),
        'current_engg'=>$request->input('current_engg'),
       
        'updated_date'=>date("Y-m-d H:i:s"),
        );
       $results = DB::table('users_company_details')->insertGetId($company_array);

 
if($request->input('role')=='pioneer')
Mail::to($request->input('register_email'))->send(new PioneerMail($request->input('register_full')));
else
Mail::to($request->input('register_email'))->send(new RegularMail($request->input('register_full')));



echo json_encode('success');


}


function AdminEditProfile($user_id){

   $value=$user_id;
 $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')
 ->where('sc_users.id','=',$value)
 ->get();
$result = $results->toArray();
$fn=$user_id;

$meta=Sc_usermetas::query()->where('user_id','=',$fn)->get();
$metas = $meta->toArray();

$meta_array=array();
foreach ($metas as $key => $value) {

$meta_array[$value['meta_key']][]=$value['meta_value'];

}
$result[0]['sc_expertise']=implode(', ', $meta_array['area_of_expertise']);
$result[0]['joinsuc']=implode(', ', $meta_array['joinsuc']);

/*echo '<pre>';
print_r($result[0]);
echo '</pre>';*/
return view('admin_editmember')->with('details', $result[0]);

}



    public function updateBasicProfile(Request $request){



$validator = Validator::make($request->all(), [
                
                'fullname' => 'required',      
                
                'phonenumber' => 'required',
                'location' => 'required',
                'aoe' => 'required',
                'personal_domain' => 'required',
                
        ],[
'fullname.required' => 'This field is required',
'emailid.required' => 'This field is required',
'phonenumber.required' => 'This field is required',
'location.required' => 'This field is required',
'aoe.required' => 'This field is required',
'personal_domain.required' => 'This field is required',
        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{

echo 'success';


    $user_id = $request->input('user_id');
    $result_array=array(
        'sc_fullname'=>$request->input('fullname'),
        'sc_phone'=>$request->input('phonenumber'),
        /*'sc_email'=>$request->input('emailid'),*/
        'sc_location'=>$request->input('location'),
        'personal_domain'=>$request->input('personal_domain'),
        );
    Sc_users::where('id',$user_id)->update($result_array);
     Sc_usermetas::where('user_id',$user_id)->where('meta_key','area_of_expertise')->delete();
     $aoe_array=array();
foreach ($request->input('aoe') as $key => $value) {
 $aoe_array[]=array(
'user_id'=>$user_id,
'meta_key'=>'area_of_expertise',
'meta_value'=>$value,
  );
}
DB::table('sc_usermetas')->insert($aoe_array);
  /*return Redirect::back()->withInput()
                                ->withErrors('Your Profile updated Successfully');*/




        }

        }


 public function updateCompanyProfile(Request $request){


$validator = Validator::make($request->all(), [
                
               
                'startup_industry' => 'required_if:rusc,yes',
                'rusc' => 'required',
                'startup_name' => 'required_if:rusc,yes',
                'startup_age' => 'required_if:rusc,yes',
                
                'startup_type' => 'required_if:rusc,yes',
                'elevator_pitch' => 'required_if:rusc,yes',
                'current_engg' => 'required_if:rusc,no',
                'company_name' => 'required_if:rusc,no',
                'user_desn' => 'required_if:rusc,no',
                'joinsuc' => 'required',
             
        ],[
'joinsuc.required' => 'This field is required',
'rusc.required' => 'This field is required',
'startup_name.required_if' => 'This field is required',
'startup_age.required_if' => 'This field is required',
'startup_type.required_if' => 'This field is required',
'elevator_pitch.required_if' => 'This field is required',
'current_engg.required_if' => 'This field is required',
'company_name.required_if' => 'This field is required',
'user_desn.required_if' => 'This field is required',
'startup_industry.required_if' => 'This field is required',





        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

            $user_id = $request->input('user_id');
    $result_array=array(
        'startup_name'=>$request->input('startup_name'),
        'startup_age'=>$request->input('startup_age'),
        'startup_stage'=>$request->input('startup_stage'),
        'startup_type'=>$request->input('startup_type'),
        'startup_website'=>$request->input('startup_website'),
        'startup_industry'=>$request->input('startup_industry'),
        'elevator_pitch'=>$request->input('elevator_pitch'),
        'company_name'=>$request->input('company_name'),
        'user_desn'=>$request->input('user_desn'),
        'is_sc'=>$request->input('rusc'),
        'current_engg'=>$request->input('current_engg'),
        );
    Users_company_details::where('member_id',$user_id)->update($result_array);

Sc_usermetas::where('user_id',$user_id)->where('meta_key','joinsuc')->delete();
     $aoe_array=array();
foreach ($request->input('joinsuc') as $key => $value) {
 $aoe_array[]=array(
'user_id'=>$user_id,
'meta_key'=>'joinsuc',
'meta_value'=>$value,
  );
}
DB::table('sc_usermetas')->insert($aoe_array);



/*  return Redirect::back()->withInput()
                                ->withErrors('Your Profile updated Successfully');*/
   return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200); // 400 being the HTTP code for an invalid request.


        }



    }


public function updateSocialProfile(Request $request){

/*echo '<pre>';
print_r($request->input('user_id'));
echo '</pre>';
die;*/
$user_id = $request->input('user_id');
$result_array=array(
    'sc_fb_link'=>$request->input('facebook_link'),
    'sc_linkedin_link'=>$request->input('linkedin_link'),
    'sc_twitter_link'=>$request->input('twitter_link'),
    );
Sc_users::where('id',$user_id)->update($result_array);
return Redirect::back()->withInput()
                            ->withErrors('Your Profile updated Successfully');


}

function getSoldProduct(Request $request){
        $results = Sc_solds::query()->where('sc_solds.parent_user','=',$request->input('parent_user'))->get();
        $result_array=$results->toArray();
$final_array=array();
foreach ($result_array as $key => $value) {
  $final_array[$value['product']]=$value;

}


/*        echo '<pre>';
print_r($final_array);
echo '</pre>';*/


$result=view('admin_get_sold')->with('details',$final_array)->render();
return response()->json(['status'=>'success', 'data'=>$result], 200);


}

function updateSoldAdmin(Request $request){

Sc_solds::where('parent_user',$request->input('id'))
->delete();


$insert_array=array();
if($request->input('sponser_radio') == 'yes'){

$insert_array[]=array(
'parent_user'=>$request->input('id'),
'comment'=>$request->input('s_comment'),
'comment_head'=>$request->input('s_comment_head'),
'closed_by'=>$request->input('s_closed_by'),
'sold_date'=>date("Y-m-d H:i:s"),
'product'=>'sponsor',
'sold_status'=>$request->input('sponser_radio'),
'sold_by'=>session()->get('userid'),
  );

}
if($request->input('mp_radio') == 'yes'){

$insert_array[]=array(
'parent_user'=>$request->input('id'),
'comment'=>$request->input('m_comment'),
'comment_head'=>$request->input('m_comment_head'),
'closed_by'=>$request->input('m_closed_by'),
'sold_date'=>date("Y-m-d H:i:s"),
'product'=>'member_partner',
'sold_status'=>$request->input('mp_radio'),
'sold_by'=>session()->get('userid'),
  );

}
if($request->input('pioneer_radio') == 'yes'){

$insert_array[]=array(
'parent_user'=>$request->input('id'),
'comment'=>$request->input('p_comment'),
'comment_head'=>$request->input('p_comment_head'),
'closed_by'=>$request->input('p_closed_by'),
'sold_date'=>date("Y-m-d H:i:s"),
'product'=>'pioneer',
'sold_status'=>$request->input('pioneer_radio'),
'sold_by'=>session()->get('userid'),
  );

}
if($request->input('valuekit_radio') == 'yes'){

$insert_array[]=array(
'parent_user'=>$request->input('id'),
'comment'=>$request->input('v_comment'),
'comment_head'=>$request->input('v_comment_head'),
'closed_by'=>$request->input('v_closed_by'),
'sold_date'=>date("Y-m-d H:i:s"),
'product'=>'valuekit',
'sold_status'=>$request->input('valuekit_radio'),
'sold_by'=>session()->get('userid'),
  );

}
/*echo '<pre>';
print_r($insert_array);
echo '</pre>';*/
DB::table('sc_solds')->insert($insert_array);




}
function updateAnnouncement(Request $request){




$insert_array=array();
if(empty($request->input('edit_flag'))){

$insert_array[]=array(
'announcement'=>$request->input('announce_value'),
'status'=>'1',
'announced_date'=>date("Y-m-d H:i:s"),
'created_by'=>session()->get('userid'),
  );
DB::table('sc_announcements')->insert($insert_array);
}else{

$result_array=array(
    'announcement'=>$request->input('announce_value'),
    );
Sc_announcements::where('announce_id',$request->input('edit_flag'))->update($result_array);

}


/*echo '<pre>';
print_r($insert_array);
echo '</pre>';*/





}


function getAnnouncements(){

$announce_obj=Sc_announcements::orderBy('announced_date', 'desc')->get();
$announce_array=$announce_obj->toArray();
return view('admin_announcements')->with('data',$announce_array);

}

function updateAnnouncementStatus(Request $request){

$result_array=array(
    'status'=>$request->input('value'),
    );
Sc_announcements::where('announce_id',$request->input('edit_flag'))->update($result_array);


}
function updateeventStatus(Request $request){

$result_array=array(
    'event_status'=>$request->input('value'),
    );
Sc_events::where('event_id',$request->input('edit_flag'))->update($result_array);


}

function memberPartnerLogo(){

$logos_obj=Sc_memberpartner_logos::orderBy('created_date', 'desc')->get();
$logos_array=$logos_obj->toArray();


return view('admin_mp_logos')->with('logos',$logos_array);

}

function addMpLogo(){
if(Input::file())
        {
  
            $image = Input::file('file');
           $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('image/mp_logos/' . $filename);
 
        
                Image::make($image->getRealPath())->save($path);
             /*   $user->image = $filename;
                $user->save();*/

 $insert_array[]=array(
'logo_img'=>$filename,
'created_date'=>date("Y-m-d H:i:s"),
'created_by'=>session()->get('userid'),
  );
DB::table('sc_memberpartner_logos')->insert($insert_array);

           }

}
function changeMpLogo(Request $request){
if(Input::file())
        {
  
            $image = Input::file('file');
           $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('image/mp_logos/' . $filename);
 
        
                Image::make($image->getRealPath())->save($path);
             /*   $user->image = $filename;
                $user->save();*/

$result_array=array(
    'logo_img'=>$filename,
    );
Sc_memberpartner_logos::where('logo_id',$request->input('edit_id'))->update($result_array);



           }

}


function deleteLogo(Request $request){
  Sc_memberpartner_logos::where('logo_id',$request->input('id'))
->delete();

}
function deleteSpeaker(Request $request){
  Sc_speakers::where('speaker_id',$request->input('id'))
->delete();

}

function deleteEvent(Request $request){
  Sc_events::where('event_id',$request->input('id'))
->delete();

}

function getAdminEvents(){
$events_obj=Sc_events::orderBy('created_date', 'desc')->get();
$events_array=$events_obj->toArray();
  return view('admin_events')->with('events',$events_array);

}
function AddEvents(){
$speaker_obj=Sc_speakers::orderBy('created_date', 'desc')->get();
$speaker_array=$speaker_obj->toArray();
  return view('add_events')->with('speakers',$speaker_array);
  
}
function AddSpeaker(){

return view('admin_add_speaker');

}

function AdminEditSpeaker($id){

$speaker_obj=Sc_speakers::where('speaker_id',$id)->orderBy('created_date', 'desc')->get();
$speaker_array=$speaker_obj->toArray();
return view('admin_edit_speaker')->with('speakers',$speaker_array[0]);


}
function AdminEditEvents($id){
$speaker_obj=Sc_speakers::orderBy('created_date', 'desc')->get();
$data['speakers']=$speaker_obj->toArray();
$event_obj=Sc_events::where('event_id',$id)->orderBy('created_date', 'desc')->get();
$data['event']=$event_obj->toArray()[0];
return view('admin_edit_event')->with('details',$data);


}
function getSpeakers(){
$speaker_obj=Sc_speakers::orderBy('created_date', 'desc')->get();
$speaker_array=$speaker_obj->toArray();
return view('get_speakers')->with('speakers',$speaker_array);

}

function upload_picture(Request $request){



if(Input::file())
        {
  
            $image = Input::file('file');
           $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('image/speakers/' . $filename);
 
        
                Image::make($image->getRealPath())->resize(200, 200)->save($path);
      
           }


   echo json_encode($filename);  



}

function SaveSpeaker(Request $request){


$validator = Validator::make($request->all(), [
                
                'speaker_name' => 'required',      
                'speaker_desn' => 'required',
                'speaker_cname' => 'required',
                'speaker_bio' => 'required',
                'speaker_llink' => 'required',
                'speaker_tlink' => 'required',
                'hidden_speaker_image' => 'required',
                
        ],[
'speaker_name.required' => 'This field is required',
'speaker_desn.required' => 'This field is required',
'speaker_cname.required' => 'This field is required',
'speaker_bio.required' => 'This field is required',
'speaker_llink.required' => 'This field is required',
'speaker_tlink.required' => 'This field is required',
'hidden_speaker_image.required' => 'This field is required',
        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{




 $speaker_array=array(
'speaker_name'=>$request->input('speaker_name'),
'speaker_desn'=>$request->input('speaker_desn'),
'speaker_cname'=>$request->input('speaker_cname'),
'speaker_bio'=>$request->input('speaker_bio'),
'speaker_llink'=>$request->input('speaker_llink'),
'speaker_tlink'=>$request->input('speaker_tlink'),
'speaker_image'=>$request->input('hidden_speaker_image'),
'created_date'=>date("Y-m-d H:i:s"),
'created_by'=>session()->get('userid'),
  );

DB::table('sc_speakers')->insert($speaker_array);


            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}
function SaveEvents(Request $request){


$validator = Validator::make($request->all(), [
                
                'event_title' => 'required',      
                'event_date' => 'required',
                'event_cost' => 'required',
                'event_time' => 'required',
                'event_city' => 'required',
                'event_venue' => 'required',
                'event_category' => 'required',
                'event_speaker' => 'required',
                'event_content' => 'required',
                
        ],[
'event_title.required' => 'This field is required',
'event_date.required' => 'This field is required',
'event_cost.required' => 'This field is required',
'event_city.required' => 'This field is required',
'event_venue.required' => 'This field is required',
'event_category.required' => 'This field is required',
'event_speaker.required' => 'This field is required',
'event_content.required' => 'This field is required',
'event_time.required' => 'This field is required',
        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{




 $speaker_array=array(
'event_title'=>$request->input('event_title'),
'event_date'=>date("Y-m-d H:i:s",strtotime($request->input('event_date'))),
'event_cost'=>$request->input('event_cost'),
'event_time'=>$request->input('event_time'),
'event_city'=>$request->input('event_city'),
'event_venue'=>$request->input('event_venue'),
'event_category'=>$request->input('event_category'),
'event_speaker'=>implode(',', $request->input('event_speaker')),
'event_content'=>$request->input('event_content'),
'event_slug'=>str_slug($request->input('event_title')),
'event_type'=>'meetup',
'event_status'=>'1',

'created_by'=>session()->get('userid'),
  );

DB::table('sc_events')->insert($speaker_array);


            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}
function UpdateEventsAdmin(Request $request){


$validator = Validator::make($request->all(), [
                
                'event_title' => 'required',      
                'event_date' => 'required',
                'event_cost' => 'required',
                'event_time' => 'required',
                'event_city' => 'required',
                'event_venue' => 'required',
                'event_category' => 'required',
                'event_speaker' => 'required',
                'event_content' => 'required',
                
        ],[
'event_title.required' => 'This field is required',
'event_date.required' => 'This field is required',
'event_cost.required' => 'This field is required',
'event_city.required' => 'This field is required',
'event_venue.required' => 'This field is required',
'event_category.required' => 'This field is required',
'event_speaker.required' => 'This field is required',
'event_content.required' => 'This field is required',
'event_time.required' => 'This field is required',
        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{




 $event_array=array(
'event_title'=>$request->input('event_title'),
'event_date'=>date("Y-m-d H:i:s",strtotime($request->input('event_date'))),
'event_cost'=>$request->input('event_cost'),
'event_time'=>$request->input('event_time'),
'event_city'=>$request->input('event_city'),
'event_venue'=>$request->input('event_venue'),
'event_category'=>$request->input('event_category'),
'event_speaker'=>implode(',', $request->input('event_speaker')),
'event_content'=>$request->input('event_content'),
'created_date'=>date("Y-m-d H:i:s"),
'event_slug'=>str_slug($request->input('event_title')),
'created_by'=>session()->get('userid'),
  );

    Sc_events::where('event_id',$request->input('edit_id'))->update($event_array);



            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}
function UpdateSpeaker(Request $request){


$validator = Validator::make($request->all(), [
                
                'speaker_name' => 'required',      
                'speaker_desn' => 'required',
                'speaker_cname' => 'required',
                'speaker_bio' => 'required',
                'speaker_llink' => 'required',
                'speaker_tlink' => 'required',
                'hidden_speaker_image' => 'required',
                
        ],[
'speaker_name.required' => 'This field is required',
'speaker_desn.required' => 'This field is required',
'speaker_cname.required' => 'This field is required',
'speaker_bio.required' => 'This field is required',
'speaker_llink.required' => 'This field is required',
'speaker_tlink.required' => 'This field is required',
'hidden_speaker_image.required' => 'This field is required',
        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{




 $speaker_array=array(
'speaker_name'=>$request->input('speaker_name'),
'speaker_desn'=>$request->input('speaker_desn'),
'speaker_cname'=>$request->input('speaker_cname'),
'speaker_bio'=>$request->input('speaker_bio'),
'speaker_llink'=>$request->input('speaker_llink'),
'speaker_tlink'=>$request->input('speaker_tlink'),
'speaker_image'=>$request->input('hidden_speaker_image'),
'created_date'=>date("Y-m-d H:i:s"),
'created_by'=>session()->get('userid'),
  );

    Sc_speakers::where('speaker_id',$request->input('edit_id'))->update($speaker_array);



            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}

}
