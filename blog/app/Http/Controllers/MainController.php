<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\models\sc_users;
use App\Http\models\sc_posts;
use App\Http\models\sc_usermetas; 
use App\Http\models\sc_events;
use App\Http\models\sc_speakers;
use App\Http\models\sc_comments;
use App\Http\models\sc_likes;
use App\Http\models\sc_knowledge_sessions;
use App\Http\models\speaker_metas;
use App\Http\models\rsvp_members;
use App\Http\models\demoday_pics;
use App\Http\models\sc_notifications;
use App\Http\models\users_company_details;
use Illuminate\Support\Facades\Redirect;
use Image;  
use App\Http\models\sc_announcements;
use App\Http\models\sc_memberpartner_logos;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\models\messages;
use App\Http\models\User_temps;
use Nahid\Talk\Facades\Talk;
use Validator;
use Response;
use Mail;
use App\Mail\CronExistingUser;
use App\Mail\CronWeeklyMail;
use App\Mail\PromotionalMail;
use Razorpay\Api\Api;
use Excel;

use Illuminate\Support\Facades\Crypt;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getProfile($u)
    {
        
        //$value = session()->get('userid');
        $value=$u;
 $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')
 ->where('sc_users.sc_unique_name','=',$value)
 ->get();
$result = $results->toArray();
$fn=$result[0]['id'];

$meta=Sc_usermetas::query()->where('user_id','=',$fn)->get();
$metas = $meta->toArray();

$meta_array=array();
foreach ($metas as $key => $value) {

$meta_array[$value['meta_key']][]=$value['meta_value'];

}
$result[0]['sc_expertise']=implode(', ', $meta_array['area_of_expertise']);
$result[0]['joinsuc']=implode(', ', $meta_array['joinsuc']);

    /* $result_check = Sc_posts::where('post_author', '=', $fn)->orderBy('created_date', 'desc')->get();
        $posts = $result_check->toArray();*/
$results = Sc_posts::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_posts.post_author')
->where('sc_posts.post_author', '=', $fn)
->orderBy('sc_posts.posted_date', 'desc')
->offset(0)->limit(10)->get();
         $posts = $results->toArray();
$post_ids=array_column($posts,'post_id');

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')
->whereIn('sc_comments.parent_post', $post_ids)
->orderBy('sc_comments.commented_date', 'asc')
->get();
$comments = $results1->toArray();

$likes1 = Sc_likes::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_likes.user_id')
->whereIn('sc_likes.post_id', $post_ids)

->orderBy('sc_likes.liked_date', 'asc')
->get();
$likes = $likes1->toArray();

 $like_array=array();
foreach ($likes as $key => $row) {
    $like_array[$row['post_id']][]=$row;
}


 $values1=array();
foreach ($comments as $key => $row) {
    $values1[$row['parent_post']][]=$row;
}



         $values=array();
foreach ($posts as $key => $row) {
    $values[$row['post_id']]['post']=$row;
    $values[$row['post_id']]['comments']=!empty($values1[$row['post_id']])?$values1[$row['post_id']]:array();
   $values[$row['post_id']]['likes']=!empty($like_array[$row['post_id']])?$like_array[$row['post_id']]:array();
}

/* echo '<pre>';
 print_r($values);
 echo '</pre>';*/

       
      $result[0]['user_id']=$fn;
      $result[0]['posts']=$values;
/*
     $obbb_fgt=users_company_details::orderBy('company_id', 'desc')->get();
$vbth=$obbb_fgt->toArray();
foreach ($vbth as $key => $value) {
 $result_array=array(
        'startups_slug'=>str_slug($value['startup_name']),
       
        );
  users_company_details::where('company_id',$value['company_id'])->update($result_array);
}
    
   

echo '<pre>';
print_r($vbth);
echo '</pre>';
die;*/
return view('newprofile',['details' => $result[0]]);

        
    }
    public function getCompanyProfile()
    {
        
$value = session()->get('userid');
       
        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$value;

            $meta=Sc_usermetas::query()->where('user_id','=',$value)->get();
$metas = $meta->toArray();


foreach ($metas as $key => $value) {

$meta_array[$value['meta_key']][]=$value['meta_value'];

}
$result[0]['sc_expertise']=implode(',', $meta_array['area_of_expertise']);
$result[0]['joinsuc']=implode(',', $meta_array['joinsuc']);
        return view('edit_company_profile',['details' => $result[0]]);

        
    }
    public function getSocialProfile()
    {
        
$value = session()->get('userid');
       
        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$value;
        return view('edit_social_profile',['details' => $result[0]]);

        
    }
    public function getSettingsProfile()
    {
        
$value = session()->get('userid');
       
        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$value;
        return view('edit_setting_profile',['details' => $result[0]]);

        
    }
    public function getMembershipProfile()
    {
        

       
       
     $value = session()->get('userid');
       
        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$value;
        return view('edit_membership_profile',['details' => $result[0]]);

        
    }




    public function editProfile(){

$value = session()->get('userid');
       
        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$value;



      $meta=Sc_usermetas::query()->where('user_id','=',$value)->get();
$metas = $meta->toArray();


foreach ($metas as $key => $value) {

$meta_array[$value['meta_key']][]=$value['meta_value'];

}
$result[0]['sc_expertise']=implode(',', $meta_array['area_of_expertise']);
$result[0]['joinsuc']=implode(',', $meta_array['joinsuc']);
/*echo '<pre>';
print_r($result);
echo '</pre>';
print_r($result[0]);*/
        return view('edit_profile',['details' => $result[0]]);
    }

    public function updateBasicProfile(Request $request){



$validator = Validator::make($request->all(), [
                
                'fullname' => 'required',      
                'emailid' => 'required|email|unique:sc_users,sc_email',
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


    $user_id = session()->get('userid');
    $result_array=array(
        'sc_fullname'=>$request->input('fullname'),
        'sc_phone'=>$request->input('phonenumber'),
        'sc_email'=>$request->input('emailid'),
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

          $user_id = session()->get('userid');
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


    $user_id = session()->get('userid');
    $result_array=array(
        'sc_fb_link'=>$request->input('facebook_link'),
        'sc_linkedin_link'=>$request->input('linkedin_link'),
        'sc_twitter_link'=>$request->input('twitter_link'),
        );
  Sc_users::where('id',$user_id)->update($result_array);
  return Redirect::back()->withInput()
                                ->withErrors('Your Profile updated Successfully');


    }
    public function updateSettingsProfile(Request $request){


    $user_id = session()->get('userid');

$result_check = Sc_users::where('id', '=', $user_id)->get();
        $result = $result_check->toArray();

if($result[0]['sc_pass'] == md5($request->input('old-password'))){
    $result_array=array(
        'sc_pass'=>md5($request->input('password'))
        );
  Sc_users::where('id',$user_id)->update($result_array);
  return Redirect::back()->withInput()
                                ->withErrors('Your Profile updated Successfully');
}else{

 return Redirect::back()->withInput()
                                ->withErrors('Please enter the correct password');

}

    }


function changeAvatar(Request $request){

/*          $imageName = time().'.'.$request->image->getClientOriginalExtension();

        $request->image->move(public_path('images'), $imageName);*/

/*if( $request->hasFile('file') ) {
        $file = $request->file('file');
         echo $file;
         $destinationPath="/images";
         $file->move($destinationPath, $file); 
         $request->image->move(public_path('images'), $imageName);

    }*/


if(Input::file())
        {
  
            $image = Input::file('file');
           $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('image/' . $filename);
 
        
                Image::make($image->getRealPath())->resize(200, 200)->save($path);
             /*   $user->image = $filename;
                $user->save();*/

 $user_id = session()->get('userid');
    $result_array=array(
        'sc_profile_pic'=>'http://members.startupsclub.org/image/'.$filename,
        );
    Sc_users::where('id',$user_id)->update($result_array);
 session()->put('profile_pic', 'http://members.startupsclub.org/image/'.$filename);
           }


   echo json_encode($filename);  



}
function upload_speaker_pic(Request $request){


if(Input::file())
        {
  
            $image = Input::file('file');
           $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('image/speakers/' . $filename);
 
        
                Image::make($image->getRealPath())->save($path);
             /*   $user->image = $filename;
                $user->save();*/


           }


   echo json_encode($filename);  



}


function changeCover(Request $request){


if(Input::file())
        {
  
            $image = Input::file('img');
           $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('image/' . $filename);
 
        
                Image::make($image->getRealPath())->save($path);
             /*   $user->image = $filename;
                $user->save();*/

 $user_id = session()->get('userid');
    $result_array=array(
        'sc_cover_photo'=>$filename,
        );
    Sc_users::where('id',$user_id)->update($result_array);

           }

return Response::json(array(
        'status' => 'success',
        'url' => 'http://members.startupsclub.org/image/'.$filename

    ), 200);

 



}
function croppedChangeCover(Request $request){

$imgUrl = $request->input('imgUrl');
// original sizes
$imgInitW = $request->input('imgInitW');
$imgInitH = $request->input('imgInitH');
// resized sizes
$imgW = $request->input('imgW');
$imgH = $request->input('imgH');
// offsets
$imgY1 = $request->input('imgY1');
$imgX1 = $request->input('imgX1');
// crop box
$cropW = $request->input('cropW');
$cropH = $request->input('cropH');
// rotation angle
$angle = $request->input('rotation');

$jpeg_quality = 100;

$output_filename = "image/croppedImg_".rand();

// uncomment line below to save the cropped image in the same location as the original image.
//$output_filename = dirname($imgUrl). "/croppedImg_".rand();

$what = getimagesize($imgUrl);

switch(strtolower($what['mime']))
{
    case 'image/png':
        $img_r = imagecreatefrompng($imgUrl);
    $source_image = imagecreatefrompng($imgUrl);
    $type = '.png';
        break;
    case 'image/jpeg':
        $img_r = imagecreatefromjpeg($imgUrl);
    $source_image = imagecreatefromjpeg($imgUrl);
    error_log("jpg");
    $type = '.jpeg';
        break;
    case 'image/gif':
        $img_r = imagecreatefromgif($imgUrl);
    $source_image = imagecreatefromgif($imgUrl);
    $type = '.gif';
        break;
    default: die('image type not supported');
}


//Check write Access to Directory

if(!is_writable(dirname($output_filename))){
  $response = Array(
      "status" => 'error',
      "message" => 'Can`t write cropped File'
    );  
}else{

    // resize the original image to size of editor
    $resizedImage = imagecreatetruecolor($imgW, $imgH);
  imagecopyresampled($resizedImage, $source_image, 0, 0, 0, 0, $imgW, $imgH, $imgInitW, $imgInitH);
    // rotate the rezized image
    $rotated_image = imagerotate($resizedImage, -$angle, 0);
    // find new width & height of rotated image
    $rotated_width = imagesx($rotated_image);
    $rotated_height = imagesy($rotated_image);
    // diff between rotated & original sizes
    $dx = $rotated_width - $imgW;
    $dy = $rotated_height - $imgH;
    // crop rotated image to fit into original rezized rectangle
  $cropped_rotated_image = imagecreatetruecolor($imgW, $imgH);
  imagecolortransparent($cropped_rotated_image, imagecolorallocate($cropped_rotated_image, 0, 0, 0));
  imagecopyresampled($cropped_rotated_image, $rotated_image, 0, 0, $dx / 2, $dy / 2, $imgW, $imgH, $imgW, $imgH);
  // crop image into selected area
  $final_image = imagecreatetruecolor($cropW, $cropH);
  imagecolortransparent($final_image, imagecolorallocate($final_image, 0, 0, 0));
  imagecopyresampled($final_image, $cropped_rotated_image, 0, 0, $imgX1, $imgY1, $cropW, $cropH, $cropW, $cropH);
  // finally output png image
  //imagepng($final_image, $output_filename.$type, $png_quality);
  $dfvasf=imagejpeg($final_image, $output_filename.$type, $jpeg_quality);

 $user_id = session()->get('userid');
    $result_array=array(
        'sc_cover_photo'=>explode('/', $output_filename)[1].$type,
        );
    Sc_users::where('id',$user_id)->update($result_array);

           


return Response::json(array(
        'status' => 'success',
        'url' => 'http://members.startupsclub.org/'.$output_filename.$type

    ), 200);

}


}

public function insertPost(Request $request){





    $user_id = session()->get('userid');
  $insert_array= array(
        'post_author'=>$user_id,
        'post'=>str_replace(array("\r\n","\r","\n"),'<br>',$request->input('post')),
        'post_category'=>'post',
        'posted_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('sc_posts')->insertGetId($insert_array);
       //echo json_encode($results);
    // echo $dvc=view('edit_profile_append',['details' => $result[0]]);

$value=$user_id;
$fn=$user_id;
$results = Sc_posts::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_posts.post_author')
->where('sc_posts.post_author', '=', $fn)
->orderBy('sc_posts.posted_date', 'desc')
->offset(0)->limit(10)->get();
         $posts = $results->toArray();
$post_ids=array_column($posts,'post_id');

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')
->whereIn('sc_comments.parent_post', $post_ids)
->orderBy('sc_comments.commented_date', 'asc')
->get();
$comments = $results1->toArray();
$likes1 = Sc_likes::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_likes.user_id')
->whereIn('sc_likes.post_id', $post_ids)

->orderBy('sc_likes.liked_date', 'asc')
->get();
$likes = $likes1->toArray();

 $like_array=array();
foreach ($likes as $key => $row) {
    $like_array[$row['post_id']][]=$row;
}

 $values1=array();
foreach ($comments as $key => $row) {
    $values1[$row['parent_post']][]=$row;
}



         $values=array();
foreach ($posts as $key => $row) {
    $values[$row['post_id']]['post']=$row;
    $values[$row['post_id']]['comments']=!empty($values1[$row['post_id']])?$values1[$row['post_id']]:array();
   $values[$row['post_id']]['likes']=!empty($like_array[$row['post_id']])?$like_array[$row['post_id']]:array();
}



        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$fn;
      $result[0]['posts']=$values;





      echo view('edit_profile_append')->with('details',$result[0])->render(); 
    

}

public function insertComment(Request $request){

$fn = session()->get('userid');
  
$results2=array();
  
$user_id = session()->get('userid');
  $insert_array= array(
        'sc_user'=>$user_id,
        'parent_post'=>$request->input('post_id'),
        'sc_comments'=>str_replace(array("\r\n","\r","\n"),'<br>',$request->input('comment')),
        'commented_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('sc_comments')->insertGetId($insert_array);

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')->where('sc_comments.parent_post', '=', $request->input('post_id'))->get();
         $result = $results1->toArray();


         $results2['post_id']=$request->input('post_id');
         $results2['values']=$result;

$insert_array= array(
        'notify_member'=>session()->get('userid'),
        'post_id'=>$request->input('post_id'),
        'parent_member'=>$request->input('data_member'),
        'notified_date'=>date("Y-m-d H:i:s"),
        'is_seen'=>'0',
        'notify_type'=>'comment',
        'parent_id'=>$results
        );
       $results = DB::table('sc_notifications')->insertGetId($insert_array);
       $insert_array1=array();
       foreach ($result as $key => $value) {
if($value['id'] != session()->get('userid') && $value['sc_user'] != session()->get('userid')){
$insert_array1[]= array(
        'notify_member'=>session()->get('userid'),
        'post_id'=>$request->input('post_id'),
        'parent_member'=>$value['id'],
        'notified_date'=>date("Y-m-d H:i:s"),
        'is_seen'=>'0',
        'notify_type'=>'also_comment',
        'parent_id'=>$value['comment_id']
        );
}
}
     DB::table('sc_notifications')->insert($insert_array1); 

 $final_result['view_data']=view('comments_append')->with('details',$results2)->render(); 
  $final_result['count']=count($result);
 return response()->json(['status'=>'success', 'data'=>$final_result], 200);



}

public function deletePost(Request $request){

 Sc_posts::where('post_id',$request->input('post_id'))->delete();
 echo 'success';
}
public function deleteComment(Request $request){

 Sc_comments::where('comment_id',$request->input('post_id'))->delete();
$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')->where('sc_comments.parent_post', '=', $request->input('parent'))->get();
         $result = $results1->toArray();
         $results2['post_id']=$request->input('parent');
         $results2['values']=$result;

/*echo '<pre>';
print_r($results2);
echo '</pre>';*/
 $final_result['view_data'] = view('comments_append')->with('details',$results2)->render(); 
  $final_result['count']=count($result);
 return response()->json(['status'=>'success', 'data'=>$final_result], 200);
}

public function loadMorePost(Request $request){

    $user_id = $request->input('display_user');
$value=$user_id;
$fn=$user_id;
$results = Sc_posts::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_posts.post_author')
->where('sc_posts.post_author', '=', $fn)
->orderBy('sc_posts.posted_date', 'desc')
->offset(($request->input('load_sequence')*10))->limit(10)->get();
         $posts = $results->toArray();
$post_ids=array_column($posts,'post_id');

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')
->whereIn('sc_comments.parent_post', $post_ids)
->orderBy('sc_comments.commented_date', 'asc')
->get();
$comments = $results1->toArray();

$likes1 = Sc_likes::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_likes.user_id')
->whereIn('sc_likes.post_id', $post_ids)

->orderBy('sc_likes.liked_date', 'asc')
->get();
$likes = $likes1->toArray();

 $like_array=array();
foreach ($likes as $key => $row) {
    $like_array[$row['post_id']][]=$row;
}

 $values1=array();
foreach ($comments as $key => $row) {
    $values1[$row['parent_post']][]=$row;
}



         $values=array();
foreach ($posts as $key => $row) {
    $values[$row['post_id']]['post']=$row;
    $values[$row['post_id']]['comments']=!empty($values1[$row['post_id']])?$values1[$row['post_id']]:array();
    $values[$row['post_id']]['likes']=!empty($like_array[$row['post_id']])?$like_array[$row['post_id']]:array();
}

/* echo '<pre>';
 print_r($values);
 echo '</pre>';*/

        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$fn;
      $result[0]['posts']=$values;





      echo view('edit_profile_append')->with('details',$result[0])->render(); 


}

function viewAllComments(Request $request){

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')->where('sc_comments.parent_post', '=', $request->input('post_id'))->get();
         $result = $results1->toArray();
$results['post_id']=$request->input('post_id');
$results['main']=$result;

 echo view('comments_append_all')->with('details',$results)->render(); 

}



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }





function getUrlData($url, $raw=false) // $raw - enable for raw display
{
    $result = false;
   
    $contents = $this->getUrlContents($url);

    if (isset($contents) && is_string($contents))
    {
        $title = null;
        $metaTags = null;
        $metaProperties = null;
       
        preg_match('/<title>([^>]*)<\/title>/si', $contents, $match );

        if (isset($match) && is_array($match) && count($match) > 0)
        {
            $title = strip_tags($match[1]);
        }
       
        preg_match_all('/<[\s]*meta[\s]*(name|property)="?' . '([^>"]*)"?[\s]*' . 'content="?([^>"]*)"?[\s]*[\/]?[\s]*>/si', $contents, $match);
       
        if (isset($match) && is_array($match) && count($match) == 4)
        {
            $originals = $match[0];
            $names = $match[2];
            $values = $match[3];
           
            if (count($originals) == count($names) && count($names) == count($values))
            {
                $metaTags = array();
                $metaProperties = $metaTags;
                if ($raw) {
                    if (version_compare(PHP_VERSION, '5.4.0') == -1)
                         $flags = ENT_COMPAT;
                    else
                         $flags = ENT_COMPAT | ENT_HTML401;
                }
               
                for ($i=0, $limiti=count($names); $i < $limiti; $i++)
                {
                    if ($match[1][$i] == 'name')
                         $meta_type = 'metaTags';
                    else
                         $meta_type = 'metaProperties';
                    if ($raw)
                        ${$meta_type}[$names[$i]] = array (
                            'html' => htmlentities($originals[$i], $flags, 'UTF-8'),
                            'value' => $values[$i]
                        );
                    else
                        ${$meta_type}[$names[$i]] = array (
                            'html' => $originals[$i],
                            'value' => $values[$i]
                        );
                }
            }
        }
       
        $result = array (
            'title' => $title,
            'metaTags' => $metaTags,
            'metaProperties' => $metaProperties,
        );
    }
   
    return $result;
}

function getUrlContents($url, $maximumRedirections = null, $currentRedirection = 0)
{
    $result = false;
   
    $contents = @file_get_contents($url);
   
    // Check if we need to go somewhere else
   
    if (isset($contents) && is_string($contents))
    {
        preg_match_all('/<[\s]*meta[\s]*http-equiv="?REFRESH"?' . '[\s]*content="?[0-9]*;[\s]*URL[\s]*=[\s]*([^>"]*)"?' . '[\s]*[\/]?[\s]*>/si', $contents, $match);
       
        if (isset($match) && is_array($match) && count($match) == 2 && count($match[1]) == 1)
        {
            if (!isset($maximumRedirections) || $currentRedirection < $maximumRedirections)
            {
                return $this->getUrlContents($match[1][0], $maximumRedirections, ++$currentRedirection);
            }
           
            $result = false;
        }
        else
        {
            $result = $contents;
        }
    }
   
    return $contents;
}

   function urlMetaOG($url)
    {
        $sites_html = file_get_contents($url);
        $html       = new \DOMDocument();
        @$html->loadHTML($sites_html);
        $meta_og_img = null;        
        // Get all meta tags and loop through them.        
        foreach ($html->getElementsByTagName('meta') as $meta) {            
            // If the property attribute of the meta tag is og:image
            if ($meta->getAttribute('property') == 'og:image') {                
                // Assign the value from content attribute to $meta_og_img                
                $meta_og_img = $meta->getAttribute('content');
            }
        }        
        return $meta_og_img;
    }
function urlFetch(Request $request){

$url=$request->input('q');
 $html = file_get_html($url);
                
$tags = get_meta_tags($url);

 if (isset($tags['description'])) {
            $response['describe'][] = $tags['description'];
        } else {
            foreach ($html->find('meta[property=og:description]') as $element) {
                $response['describe'][] = html_entity_decode(implode(' ', array_slice(explode(' ', trim($element->content)), 0, 50)));
            }
        }        
        
         foreach (@$html->find('meta[property=og:title]') as $element) {
            $response['title'][] =trim($element->content);
        }

        foreach (@$html->find('title') as $element) {
           $response['title'][] = $element->plaintext;
        }    

        foreach ($html->find('img') as $e) {
            $response['image'][] = $e->src;
        }
        $response['url'][] = $url;
        $response['alt_img'][]  = $this->urlMetaOG($url);

 return response()->json(['status'=>'success', 'data'=>$response], 200);

}

function getHome(){
  
$event_obj=sc_events::orderBy('event_date','asc')->get();
$event_array=$event_obj->toArray();

/*$url='https://chatbotsmagazine.com/chatbots-as-loyal-friends-to-humans-age-of-artificial-intelligence-ai-efca757f0313';
 $html = file_get_html($url);
                
$tags = get_meta_tags($url);

 if (isset($tags['description'])) {
            $response['keywords'][] = $tags['description'];
        } else {
            foreach ($html->find('meta[property=og:description]') as $element) {
                $response['describe'][] = html_entity_decode(implode(' ', array_slice(explode(' ', trim($element->content)), 0, 50)));
            }
        }        
        
         foreach (@$html->find('meta[property=og:title]') as $element) {
            $response['title'][] =trim($element->content);
        }

        foreach (@$html->find('title') as $element) {
           $response['plaintitle'][] = $element->plaintext;
        }    

        foreach ($html->find('img') as $e) {
            $response['image'][] = $e->src;
        }
        
        $response['alt_img'][]  = $this->urlMetaOG($url);

        echo '<pre>';
        print_r($response);
        echo '</pre>';
        die;
*/
   $value = session()->get('userid');

        $fn=$value;

        //$value = session()->get('userid');

    

    /* $result_check = Sc_posts::where('post_author', '=', $fn)->orderBy('created_date', 'desc')->get();
        $posts = $result_check->toArray();*/
$results = Sc_posts::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_posts.post_author')
->orderBy('sc_posts.posted_date', 'desc')
->offset(0)->limit(10)->get();
         $posts = $results->toArray();
    

 session()->put('post_flag', $posts[0]['post_id']);
$post_ids=array_column($posts,'post_id');

$likes1 = Sc_likes::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_likes.user_id')
->whereIn('sc_likes.post_id', $post_ids)

->orderBy('sc_likes.liked_date', 'asc')
->get();
$likes = $likes1->toArray();



$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')
->whereIn('sc_comments.parent_post', $post_ids)
->orderBy('sc_comments.commented_date', 'asc')
->get();
$comments = $results1->toArray();


 $values1=array();
foreach ($comments as $key => $row) {
    $values1[$row['parent_post']][]=$row;
}

 $like_array=array();
foreach ($likes as $key => $row) {
    $like_array[$row['post_id']][]=$row;
}



         $values=array();
foreach ($posts as $key => $row) {
    $values[$row['post_id']]['post']=$row;
    $values[$row['post_id']]['comments']=!empty($values1[$row['post_id']])?$values1[$row['post_id']]:array();
    $values[$row['post_id']]['likes']=!empty($like_array[$row['post_id']])?$like_array[$row['post_id']]:array();
   
}

 /*echo '<pre>';
 print_r($values); 
 echo '</pre>';*/

        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->where('sc_users.id','=',$value)->get();
        $result = $results->toArray();
$logos_obj=Sc_memberpartner_logos::orderBy('created_date', 'desc')->get();
$logos_array=$logos_obj->toArray();
$announce_obj=Sc_announcements::orderBy('announced_date', 'desc')->where('status','1')->get();
$announce_array=$announce_obj->toArray();

      $result[0]['user_id']=$fn;
      $result[0]['posts']=$values;
      $result[0]['logos_array']=$logos_array;
      $result[0]['announce_array']=$announce_array;
      $result[0]['events']=$event_array;

 
return view('home',['details' => $result[0]]);

}

public function putPostHome(Request $request){


$post=str_replace(array("\r\n","\r","\n"),'<br>',$request->input('post'));
$post_category='post';
if($request->input('url_fetch')){
  $post=str_replace(array("\r\n","\r","\n"),'<br>',$request->input('post')).'<br>'.$request->input('url_fetch');
  $post_category='url';
}
/*echo '<pre>';
print_r($post);
echo '</pre>';*/



    $user_id = session()->get('userid');
  $insert_array= array(
        'post_author'=>$user_id,
        'post'=>$post,
        'post_category'=>$post_category,
        'posted_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('sc_posts')->insertGetId($insert_array);
       //echo json_encode($results);
    // echo $dvc=view('edit_profile_append',['details' => $result[0]]);

$value=$user_id;
$fn=$user_id;
$results = Sc_posts::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_posts.post_author')

->orderBy('sc_posts.posted_date', 'desc')
->offset(0)->limit(10)->get();
         $posts = $results->toArray();
$post_ids=array_column($posts,'post_id');

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')
->whereIn('sc_comments.parent_post', $post_ids)
->orderBy('sc_comments.commented_date', 'asc')
->get();
$comments = $results1->toArray();

$likes1 = Sc_likes::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_likes.user_id')
->whereIn('sc_likes.post_id', $post_ids)

->orderBy('sc_likes.liked_date', 'asc')
->get();
$likes = $likes1->toArray();

 $like_array=array();
foreach ($likes as $key => $row) {
    $like_array[$row['post_id']][]=$row;
}

 $values1=array();
foreach ($comments as $key => $row) {
    $values1[$row['parent_post']][]=$row;
}



         $values=array();
foreach ($posts as $key => $row) {
    $values[$row['post_id']]['post']=$row;
    $values[$row['post_id']]['comments']=!empty($values1[$row['post_id']])?$values1[$row['post_id']]:array();
   $values[$row['post_id']]['likes']=!empty($like_array[$row['post_id']])?$like_array[$row['post_id']]:array();
}

/* echo '<pre>';
 print_r($values);
 echo '</pre>';*/

        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.ID')->where('sc_users.ID','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$fn;
      $result[0]['posts']=$values;





      echo view('post_home_append')->with('details',$result[0])->render(); 
    

}

public function loadMorePostHome(Request $request){

    $user_id = session()->get('userid');
$value=$user_id;
$fn=$user_id;
$results = Sc_posts::query()->leftjoin('sc_users as scu','scu.ID', '=', 'sc_posts.post_author')

->orderBy('sc_posts.posted_date', 'desc')
->offset(($request->input('load_sequence')*10))->limit(10)->get();
         $posts = $results->toArray();
$post_ids=array_column($posts,'post_id');

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.ID', '=', 'sc_comments.sc_user')
->whereIn('sc_comments.parent_post', $post_ids)
->orderBy('sc_comments.commented_date', 'asc')
->get();
$comments = $results1->toArray();


$likes1 = Sc_likes::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_likes.user_id')
->whereIn('sc_likes.post_id', $post_ids)

->orderBy('sc_likes.liked_date', 'asc')
->get();
$likes = $likes1->toArray();

 $like_array=array();
foreach ($likes as $key => $row) {
    $like_array[$row['post_id']][]=$row;
}


 $values1=array();
foreach ($comments as $key => $row) {
    $values1[$row['parent_post']][]=$row;
}



         $values=array();
foreach ($posts as $key => $row) {
    $values[$row['post_id']]['post']=$row;
    $values[$row['post_id']]['comments']=!empty($values1[$row['post_id']])?$values1[$row['post_id']]:array();
      $values[$row['post_id']]['likes']=!empty($like_array[$row['post_id']])?$like_array[$row['post_id']]:array();

}

/* echo '<pre>';
 print_r($values);
 echo '</pre>';*/

        $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.ID')->where('sc_users.ID','=',$value)->get();
        $result = $results->toArray();
      $result[0]['user_id']=$fn;
      $result[0]['posts']=$values;





      echo view('post_home_append')->with('details',$result[0])->render(); 


}

public function insertCommentHome(Request $request){

$fn = session()->get('userid');
  
$results2=array();
  
$user_id = session()->get('userid');
  $insert_array= array(
        'sc_user'=>$user_id,
        'parent_post'=>$request->input('post_id'),
        'sc_comments'=>str_replace(array("\r\n","\r","\n"),'<br>',$request->input('comment')),
        'commented_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('sc_comments')->insertGetId($insert_array);

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.ID', '=', 'sc_comments.sc_user')->where('sc_comments.parent_post', '=', $request->input('post_id'))->get();
         $result = $results1->toArray();
         $results2['post_id']=$request->input('post_id');
         $results2['values']=$result;


$insert_array= array(
        'notify_member'=>session()->get('userid'),
        'post_id'=>$request->input('post_id'),
        'parent_member'=>$request->input('data_member'),
        'notified_date'=>date("Y-m-d H:i:s"),
        'is_seen'=>'0',
        'notify_type'=>'comment',
        'parent_id'=>$results
        );
       $results = DB::table('sc_notifications')->insertGetId($insert_array);
       $insert_array1=array();
       foreach ($result as $key => $value) {
if($value['id'] != session()->get('userid') && $value['sc_user'] != session()->get('userid')){
$insert_array1[]= array(
        'notify_member'=>session()->get('userid'),
        'post_id'=>$request->input('post_id'),
        'parent_member'=>$value['id'],
        'notified_date'=>date("Y-m-d H:i:s"),
        'is_seen'=>'0',
        'notify_type'=>'also_comment',
        'parent_id'=>$value['comment_id']
        );
}
}
     DB::table('sc_notifications')->insert($insert_array1);
 
 $final_result['view_data']=view('comments_append_home')->with('details',$results2)->render(); 
 $final_result['count']=count($result);
 return response()->json(['status'=>'success', 'data'=>$final_result], 200);

}

function viewAllCommentsHome(Request $request){

$results1 =Sc_comments::query()->leftjoin('sc_users as scu','scu.ID', '=', 'sc_comments.sc_user')->where('sc_comments.parent_post', '=', $request->input('post_id'))->get();
         $result = $results1->toArray();

$results['post_id']=$request->input('post_id');
$results['main']=$result;

 echo view('comments_append_all_home')->with('details',$results)->render(); 

}

function doLogout(){

    session()->flush();
    return Redirect::to('/');
}

function getFind(){

 $results = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')->offset(0)->limit(10)->get();
        $result = $results->toArray();
/*echo '<pre>';
print_r($result);
echo '</pre>';*/
 $countmembers = Sc_users::query()->leftjoin('users_company_details as cd','cd.member_id', '=', 'sc_users.id')

 ->count();

$location = Sc_users::query()->pluck('sc_location');
        $location_array = array_unique($location->toArray());
/*      echo '<pre>';
print_r($location_array);
echo '</pre>';  */

$final_array['countmembers']=$countmembers;
$final_array['members']=$result;
$final_array['location']=$location_array;
return view('find_main',['details' => $final_array]);

}


function insertMessages(Request $request){



$user_id = session()->get('userid');
  



Talk::setAuthUserId($user_id);
    $message = Talk::sendMessageByUserId($request->input('display_user'), $request->input('mesg'));
/* echo '<pre>';
 print_r($message->conversation_id);
 echo '</pre>';
die;*/

/*     $result='<li class="right clearfix chat_msg">
                  <span class="chat-img pull-right">
                    <img src="'.session()->get('profile_pic').'" alt="User Avatar">
                  </span>               
                  <div class="chat-body clearfix">
                    <div class="header">
                      <strong class="primary-font">'.$request->input('display_name').'</strong>
                      <small class="pull-right text-muted"><i class="fa fa-clock-o"></i> 12 mins ago</small>
                    </div>
                    <p>'.
             $message->message
                    .'</p>
                  </div
>                </li>';*/
$mesg = Talk::getConversationsById($message->conversation_id);
 $result_array['mesg']=$mesg;
        $result_array['display_chat']=$message->conversation_id;
        $result_array['display_user']=$request->input('display_user');
  


$result=view('messages_append')->with('details',$result_array)->render();
    if ($message) {
return response()->json(['status'=>'success', 'data'=>$result], 200);
   }




}

function insertMessagesUser(Request $request){
    $user_id = session()->get('userid');
  
Talk::setAuthUserId($user_id);
    $message = Talk::sendMessageByUserId($request->input('user_id'), $request->input('send_message_value'));
    return response()->json(['status'=>'success', 'data'=>$message], 200);
}

function getMembers(Request $request){

$result_check = Sc_users::where('sc_fullname', 'like', '%'.$request->input('member_search').'%')
->select('sc_fullname')
->get();
    //DB::select('select * from wp_users')
 $result = $result_check->toArray();
$final=array_values($result[0]);

echo json_encode($final);

}


function getMessages($con_id=''){
$user_id = session()->get('userid');
$conversations=array();
$mesg=array();

Talk::setAuthUserId($user_id);
        $conversations = Talk::getInbox();
        if(!empty($conversations->toArray())){
          if(empty($con_id)){
            $con_id=$conversations->toArray()[0]->thread->toArray()['conversation_id'];
          }
        $conversationId=$conversations->toArray()[0]->thread->toArray()['conversation_id'];

        $mesg = Talk::getConversationsById($con_id);
if(empty($mesg)){
  return Redirect::to('/error404');
}
        

foreach ($mesg->messages->toArray() as $key => $value) {

if($value['sender']['id'] != $user_id)
 Talk::makeSeen($value['id']);


}
$count_array=array();
foreach ($conversations->toArray() as $key => $value) {
  $i=0;$j=0;
/*  echo '<pre>';
   print_r(Talk::getConversationsById($value->thread->toArray()['conversation_id'])->messages->toArray());
echo '</pre>';*/

$dvfarf=Talk::getConversationsById($value->thread->toArray()['conversation_id']);
  foreach ($dvfarf->messages->toArray() as $ckey => $cvalue) {
   if(empty($cvalue['is_seen'])){
          $j++;
        

     }
    $count_array[$value->thread->toArray()['conversation_id']]=$j;
   
   $i++;
  
  }
  $j=0;
}
$mesg = Talk::getConversationsById($con_id);

}


        $result_array['inbox']=$conversations;
        $result_array['mesg']=$mesg;
        $result_array['count_array']=!empty($count_array)?$count_array:array();
        $result_array['display_chat']=!empty($con_id)?$con_id:'';
        $result_array['display_user']=!empty($mesg)?$mesg->withUser->toArray()['id']:'';
        $result_array['fullname']=!empty($conversations->toArray())?$conversations->toArray()[0]->withUser->toArray()['sc_fullname']:'';
       // $result_array['unseen_count']=$unseen_count;

/* echo '<pre>';
 print_r($mesg->messages->toArray());
echo '</pre>';
die;*/
return view('messages',['details' => $result_array]);

}


function getConversation(Request $request){

  $user_id = session()->get('userid');  
Talk::setAuthUserId($user_id);

/*$update_array=array(
        'is_seen'=>1,
        );

Messages::where('conversation_id',$request->input('conv'))->update($update_array);*/

$mesg = Talk::getConversationsById($request->input('conv'));

foreach ($mesg->messages->toArray() as $key => $value) {

if($value['sender']['id'] != $user_id)
 Talk::makeSeen($value['id']);


}


$mesg = Talk::getConversationsById($request->input('conv'));

 $result_array['mesg']=$mesg;
        $result_array['display_chat']=$request->input('conv');
        $result_array['display_user']=$request->input('user_id');
  


$result=view('messages_append')->with('details',$result_array)->render();

return response()->json(['status'=>'success', 'data'=>$result], 200);


}


function get_find_member(Request $request){



$find_aoe=$request->input('find_aoe');
$personal_domain=$request->input('personal_domain');
$joinsuc=$request->input('joinsuc');
$member_find=$request->input('member_find');
$find_location=$request->input('find_location');

  $result_check = DB::table('sc_usermetas')
  ->rightjoin('sc_users as scu','scu.id', '=', 'sc_usermetas.user_id')
  ->join('users_company_details as scc','scc.member_id', '=', 'sc_usermetas.user_id')

->when($find_aoe, function ($query) use ($find_aoe) {
                    $return_aoe= $query->whereIn('sc_usermetas.meta_value', $find_aoe)
                    ->where('sc_usermetas.meta_key', 'area_of_expertise');

                     return $return_aoe;
               
                })
->when($joinsuc, function ($query) use ($joinsuc) {
                    $return_join= $query->whereIn('sc_usermetas.meta_value', $joinsuc)
                    ->where('sc_usermetas.meta_key', 'joinsuc');
                    return $return_join;
               
                })
->when($personal_domain, function ($query) use ($personal_domain) {
                    return $query->whereIn('scu.personal_domain', $personal_domain);
               
                })
->when($find_location, function ($query) use ($find_location) {
                    return $query->whereIn('scu.sc_location', $find_location);
               
                })
->when($member_find, function ($query) use ($member_find) {
                    return $query->where('scu.sc_fullname', 'like', '%'.$member_find.'%');
               
                })




->get();



$finalarray=array();
foreach ($result_check->toArray() as $key => $value) {
 $finalarray[$value->user_id]['details']=$value;

 $finalarray[$value->user_id]['aoe'][]=$value->meta_value;
}
/*echo '<pre>';
print_r($finalarray);
echo '</pre>';*/
$result=view('find_append')->with('details',array_slice($finalarray,0,10))->render();
return response()->json(['status'=>'success','count'=>count($finalarray), 'data'=>$result], 200);

}
function getMemberLoadmore(Request $request){



$find_aoe=$request->input('find_aoe');
$personal_domain=$request->input('personal_domain');
$joinsuc=$request->input('joinsuc');
$member_find=$request->input('member_find');
$find_location=$request->input('find_location');

  $result_check = DB::table('sc_usermetas')
  ->rightjoin('sc_users as scu','scu.id', '=', 'sc_usermetas.user_id')
  ->join('users_company_details as scc','scc.member_id', '=', 'sc_usermetas.user_id')

->when($find_aoe, function ($query) use ($find_aoe) {
                    $return_aoe= $query->whereIn('sc_usermetas.meta_value', $find_aoe)
                    ->where('sc_usermetas.meta_key', 'area_of_expertise');

                     return $return_aoe;
               
                })
->when($joinsuc, function ($query) use ($joinsuc) {
                    $return_join= $query->whereIn('sc_usermetas.meta_value', $joinsuc)
                    ->where('sc_usermetas.meta_key', 'joinsuc');
                    return $return_join;
               
                })
->when($personal_domain, function ($query) use ($personal_domain) {
                    return $query->whereIn('scu.personal_domain', $personal_domain);
               
                })
->when($find_location, function ($query) use ($find_location) {
                    return $query->whereIn('scu.sc_location', $find_location);
               
                })
->when($member_find, function ($query) use ($member_find) {
                    return $query->where('scu.sc_fullname', 'like', '%'.$member_find.'%');
               
                })




->get();



$finalarray=array();
foreach ($result_check->toArray() as $key => $value) {
 $finalarray[$value->user_id]['details']=$value;

 $finalarray[$value->user_id]['aoe'][]=$value->meta_value;
}

$result=view('find_append')->with('details',array_slice($finalarray,($request->input('load_sequence')*10),10))->render();
return response()->json(['status'=>'success','data'=>$result], 200);

}




function likePost(Request $request){

if($request->input('status') == 'no'){
    $insert_array= array(
        
        'post_id'=>$request->input('post_id'),
        'user_id'=>session()->get('userid'),
        'liked_date'=>date("Y-m-d H:i:s")
        );
       $like_id=DB::table('sc_likes')->insertGetId($insert_array);

   $insert_array= array(
        'notify_member'=>session()->get('userid'),
        'post_id'=>$request->input('post_id'),
        'parent_member'=>$request->input('data_member'),
        'notified_date'=>date("Y-m-d H:i:s"),
        'is_seen'=>'0',
        'notify_type'=>'likes',
        'parent_id'=>$like_id
        );
       $results = DB::table('sc_notifications')->insertGetId($insert_array);

        
       return response()->json(['status'=>'success', 'data'=>'liked'], 200);
     }else{

       Sc_likes::where('post_id',$request->input('post_id'))->where('user_id',session()->get('userid'))->delete();
       Sc_notifications::where('post_id',$request->input('post_id'))
       ->where('notify_member',session()->get('userid'))
       ->where('notify_type','likes')
       ->delete();
      return response()->json(['status'=>'success', 'data'=>'no'], 200);
     }

 



}


function cronMail(){
$obj_user=User_temps::where('user_flag','old')
->where('type','honorary')
->where('email_flag','0')
->select('full_name','email_id','temp_id')
->get();

$user_array=$obj_user->toArray();


//$user_array=array('full_name'=>'Shaheen Sultana','temp_url'=>'http://members.startupsclub.org/register?temp='.Crypt::encrypt('132'));
$final_aray=array();
foreach ($user_array as $key => $value) {

$final_aray[$value['temp_id']]=$value;
$final_aray[$value['temp_id']]['url']='http://members.startupsclub.org/register?temp='.Crypt::encrypt($value['temp_id']);

/*Mail::to($value['email_id'])->send(new CronExistingUser($value));

 $result_array= array(
        'email_flag'=>'1',
        );
echo $value['full_name'].'<br>';

User_temps::where('temp_id','=',$value['temp_id'])->update($result_array);*/
}
echo '<pre>';
print_r($final_aray);
echo '</pre>';
die;

}




function becomePioneer(){

return view('become_pioneer');

}

function check_register_pioneer(Request $request){

    
      $emailaddress= $request->input('emailaddress');
      $fullname= $request->input('fullname');
      $phonenumber= $request->input('phonenumber');

       $insert_array= array(
        'email_id'=>$emailaddress,
        'full_name'=>$fullname,
        'phone_number'=>$phonenumber,
        'type'=>'become_pioneer',
        'created_date'=>date("Y-m-d H:i:s"),
        'user_flag'=>'old',
        'register_flag'=>'paid',
        'email_flag'=>'1',
        );
       $results = DB::table('user_temps')->insertGetId($insert_array);
       $value=array();
         $value['temp_url']='http://members.startupsclub.org/register?temp='.Crypt::encrypt($results);
         $value['full_name']=$fullname;
Mail::to($emailaddress)->send(new CronExistingUser($value));
$api = new Api('rzp_live_suqyYzqhV4bJKq', 'cFcU5TsohrddHzdUhwTJnPpR');
$payment = $api->payment->fetch($request->input('transaction_id'));
$payment->capture(array('amount' => 400000));
      return Response::json(array(
        'success' => true,
        'errors' => '/register/?temp='.Crypt::encrypt($results)

    ), 200); 

    


}


function check_become_pioneer(Request $request){
    $emailaddress= $request->input('emailaddress');
      $fullname= $request->input('fullname');
      $phonenumber= $request->input('phonenumber');


$validator = Validator::make($request->all(), [
                
               
                'emailaddress' => 'required|email|unique:sc_users,sc_email',
                'fullname' => 'required',
                'phonenumber' => 'required'
                
             
        ],[
'emailaddress.required' => 'This field is required',
'fullname.required' => 'This field is required',
'phonenumber.required' => 'This field is required',






        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200); 


        }

}


function getNotify(Request $request){


$update_array=array(
        'badge_seen'=>1,
        );

Sc_notifications::where('sc_notifications.parent_member', session()->get('userid'))->update($update_array);


$results1 = Sc_notifications::query()->leftjoin('sc_users as user','user.id', '=', 'sc_notifications.notify_member')
->leftjoin('sc_posts as posts','posts.post_id', '=', 'sc_notifications.post_id')
->where('sc_notifications.parent_member', session()->get('userid'))
->where('sc_notifications.notify_member','!=', session()->get('userid'))
->orderBy('sc_notifications.notified_date','desc')
->get();
$notification = $results1->toArray();

$result_array=array();

foreach ($notification as $key => $value) {
$result_array[$value['post_id']][$value['notify_type']][$value['id']]=$value;
}
/*echo '<pre>';
print_r($notification);
echo '</pre>';*/
$result=view('notification')->with('details',$result_array)->render();
return response()->json(['status'=>'success', 'data'=>$result], 200);

}

function getNotifyMsg(Request $request){

$user_id = session()->get('userid');
$conversations=array();
$mesg=array();

Talk::setAuthUserId($user_id);
        $conversations = Talk::getInbox();
        if(!empty($conversations->toArray())){
          
            $con_id=$conversations->toArray()[0]->thread->toArray()['conversation_id'];
          
        $conversationId=$conversations->toArray()[0]->thread->toArray()['conversation_id'];

        $mesg = Talk::getConversationsById($con_id);
if(empty($mesg)){
  return Redirect::to('/error404');
}
        


$count_array=array();
foreach ($conversations->toArray() as $key => $value) {
  $i=0;$j=0;
/*  echo '<pre>';
   print_r(Talk::getConversationsById($value->thread->toArray()['conversation_id'])->messages->toArray());
echo '</pre>';*/

$dvfarf=Talk::getConversationsById($value->thread->toArray()['conversation_id']);
  foreach ($dvfarf->messages->toArray() as $ckey => $cvalue) {
   if(empty($cvalue['is_seen'])){
          $j++;
        

     }
    $count_array[$value->thread->toArray()['conversation_id']]=$j;
   
   $i++;
  
  }
  $j=0;
}


}


        $result_array['inbox']=$conversations;
        
        $result_array['count_array']=!empty($count_array)?$count_array:array();


$result=view('notification_msg')->with('details',$result_array)->render();
return response()->json(['status'=>'success', 'data'=>$result], 200);

}

function getNotifyBadge(Request $request){

$posts1 = Sc_posts::where('post_id','>', session()->get('post_flag'))
->where('post_author','!=', session()->get('userid'))
->get();
$post = $posts1->toArray();


$results1 = Sc_notifications::query()
->where('sc_notifications.parent_member', session()->get('userid'))
->where('sc_notifications.badge_seen', '0')
->where('sc_notifications.notify_member','!=', session()->get('userid'))
->orderBy('sc_notifications.notified_date','desc')
->select('notification_id')
->get();
$notification = $results1->toArray();

$user_id = session()->get('userid');
$conversations=array();
$mesg=array();
$count_array=0;
Talk::setAuthUserId($user_id);
        $conversations = Talk::getInbox();
        if(!empty($conversations->toArray())){
          
            $con_id=$conversations->toArray()[0]->thread->toArray()['conversation_id'];
          
        $conversationId=$conversations->toArray()[0]->thread->toArray()['conversation_id'];

        $mesg = Talk::getConversationsById($con_id);
if(empty($mesg)){
  return Redirect::to('/error404');
}
        


$count_array=0;
foreach ($conversations->toArray() as $key => $value) {
  $i=0;$j=0;


$dvfarf=Talk::getConversationsById($value->thread->toArray()['conversation_id']);

  foreach ($dvfarf->messages->toArray() as $ckey => $cvalue) {
   if(empty($cvalue['is_seen']) && $cvalue['sender']['id']!=$user_id){

          $j++;
            $count_array=$j;
        

     }
  
   
   $i++;
  
  }
  $j=0;
}


}


        $result_array['inbox']=$conversations;
        
        $result_array['count_array']=!empty($count_array)?$count_array:array();


return response()->json(['status'=>'success', 'post_count'=>count($post),'data'=>count($notification),'msg_count'=>$count_array], 200);

}


function getSinglePost($post_id){

  $update_array=array(
        'is_seen'=>1,
        );

Sc_notifications::where('sc_notifications.post_id', $post_id)
->where('sc_notifications.parent_member', '=', session()->get('userid'))
->update($update_array);


  $results = Sc_posts::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_posts.post_author')
->where('sc_posts.post_id', '=', $post_id)
->orderBy('sc_posts.posted_date', 'desc')
->offset(0)->limit(10)->get();
         $posts = $results->toArray();
$post_ids=array_column($posts,'post_id');

$results1 = Sc_comments::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_comments.sc_user')
->whereIn('sc_comments.parent_post', $post_ids)
->orderBy('sc_comments.commented_date', 'asc')
->get();
$comments = $results1->toArray();

$likes1 = Sc_likes::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_likes.user_id')
->whereIn('sc_likes.post_id', $post_ids)

->orderBy('sc_likes.liked_date', 'asc')
->get();
$likes = $likes1->toArray();

 $like_array=array();
foreach ($likes as $key => $row) {
    $like_array[$row['post_id']][]=$row;
}


 $values1=array();
foreach ($comments as $key => $row) {
    $values1[$row['parent_post']][]=$row;
}



         $values=array();
foreach ($posts as $key => $row) {
    $values['post']=$row;
    $values['comments']=!empty($values1[$row['post_id']])?$values1[$row['post_id']]:array();
   $values['likes']=!empty($like_array[$row['post_id']])?$like_array[$row['post_id']]:array();
}

/* echo '<pre>';
 print_r($values);
 echo '</pre>';*/

       
     // $result[0]['user_id']=$fn;
   

  return view('single_post',['details' => $values]);

}

function getNotificationPage(){



$results1 = Sc_notifications::query()->leftjoin('sc_users as user','user.id', '=', 'sc_notifications.notify_member')
->leftjoin('sc_posts as posts','posts.post_id', '=', 'sc_notifications.post_id')
->where('sc_notifications.parent_member', session()->get('userid'))
->where('sc_notifications.notify_member','!=', session()->get('userid'))
->orderBy('sc_notifications.notified_date','desc')
->get();
$notification = $results1->toArray();

$result_array=array();

foreach ($notification as $key => $value) {

$result_array[$value['post_id']][$value['notify_type']][$value['id']]=$value;

}

return view('notication_page',['details' => $result_array]);

}

function testFunction(){

$profile_obj = Sc_users::where('sc_profile_pic', 'like', '%'.'https://members.startupsclub.org/image/'.'%')
->get();
$profile_pic=$profile_obj->toArray();

foreach ($profile_pic as $key => $value) {
  $final_array[$value['id']]=str_replace("http","https",$value['sc_profile_pic']);
  # code...
}
  echo '<pre>';
print_r($profile_pic);
echo '</pre>';
 
/*foreach ($final_array as $key => $value) {
 $update_array=array(
        'sc_profile_pic'=>$value,
        );
echo $key;
echo $value;
Sc_users::where('sc_users.id', $key)

->update($update_array);
}*/


/*$url='https://www.linkedin.com/pulse/why-give-up-your-dignity-badri-narayanan-v-s-';
 $html = file_get_html($url);







        echo '<pre>';
print_r($html);
echo '</pre>';
                
$tags = get_meta_tags($url);

 if (isset($tags['description'])) {
            $response['describe'][] = $tags['description'];
        } else {
            foreach ($html->find('meta[property=og:description]') as $element) {
                $response['describe'][] = html_entity_decode(implode(' ', array_slice(explode(' ', trim($element->content)), 0, 50)));
            }
        }        
        
         foreach (@$html->find('meta[property=og:title]') as $element) {
            $response['title'][] =trim($element->content);
        }

        foreach (@$html->find('title') as $element) {
           $response['title'][] = $element->plaintext;
        }    

        foreach ($html->find('img') as $e) {
            $response['image'][] = $e->src;
        }
        $response['url'][] = $url;
        $response['alt_img'][]  = $this->urlMetaOG($url);*/


}


function cronWeeklyNotification(){
$users_obj=Sc_users::query()

->get();
$users=$users_obj->toArray();

foreach ($users as $key => $pvalue) {

  $results1 = Sc_notifications::query()->leftjoin('sc_users as user','user.id', '=', 'sc_notifications.notify_member')
->leftjoin('sc_posts as posts','posts.post_id', '=', 'sc_notifications.post_id')
->where('sc_notifications.parent_member', $pvalue['id'])
->where('sc_notifications.notify_member','!=', $pvalue['id'])
->where('sc_notifications.notified_date','>', date('Y-m-d', strtotime("-1 week")))
->orderBy('sc_notifications.notified_date','desc')
->get();
$notification = $results1->toArray();

$result_array=array();

foreach ($notification as $inkey => $value) {
$result_array[$value['post_id']][$value['notify_type']][$value['id']]=$value;
}
$results = Sc_posts::query()->leftjoin('sc_users as scu','scu.id', '=', 'sc_posts.post_author')

->orderBy('sc_posts.posted_date', 'desc')
->offset(0)->limit(3)->get();
         $final_array['posts'] = $results->toArray();
         $final_array['notification'] = $result_array;
         $final_array['fullname']=$pvalue['sc_email'];

Mail::to(strtolower($pvalue['sc_email']))->send(new CronWeeklyMail($final_array));

$insert_array= array(

        'email_id'=>strtolower($pvalue['sc_email']),
        'flag'=>'weekly',
        'created_date'=>date("Y-m-d H:i:s")
        );
       DB::table('mail_log')->insert($insert_array);


}


}

function promotionalMail(){

      $path = 'public/files/bang_mem.csv';


      $data = Excel::load($path, function($reader) {})->get();
echo '<pre>';
       if (filter_var('Manavshrivastava@hotmail. com', FILTER_VALIDATE_EMAIL)) {
echo 'fger';
}
echo '</pre>';
    die;
   /*   foreach ($data->toArray() as $key => $value) {
       if (filter_var($value['email'], FILTER_VALIDATE_EMAIL)) {
 
Mail::to(strtolower($value['email']))->send(new PromotionalMail($data->toArray()));

$insert_array= array(

        'email_id'=>strtolower($value['email']),
        'flag'=>'promo',
        'created_date'=>date("Y-m-d H:i:s")
        );
       DB::table('mail_log')->insert($insert_array); 
}
}*/



}

function getEvents(){
$event_obj=sc_events::orderBy('event_date','asc')->get();
$event_array=$event_obj->toArray();
return view('events')->with('events',$event_array);

}
function getSingleEvents($event){

$event_obj=sc_events::orderBy('event_date','asc')->where('event_slug',$event)->get();
$event_array=$event_obj->toArray();
$allevent_obj=sc_events::orderBy('event_date','asc')->where('event_slug','!=',$event)->limit(5)->get();
$allevent_array=$allevent_obj->toArray();
$speaker_obj=sc_speakers::whereIn('speaker_name',explode(',', $event_array[0]['event_speaker']))->get();
$speaker_array=$speaker_obj->toArray();

$final_array['event']=$event_array[0];
$final_array['speaker']=$speaker_array;
$final_array['similar']=$allevent_array;

/*echo '<pre>';
print_r($final_array);
echo '</pre>';die;*/
return view('single_events')->with('events',$final_array);

}

function getSingleKs($ks){

  $ks_obj=Sc_knowledge_sessions::where('ks_title_slug',$ks)->orderBy('created_date', 'desc')->get();
  $ks_array=$ks_obj->toArray();
   $allks_obj=Sc_knowledge_sessions::where('ks_title_slug',Null)->orderBy('created_date', 'desc')->get();
  $allks_array=$allks_obj->toArray();
   $metas_obj=speaker_metas::where('speaker_id',$ks_array[0]['ks_id'])->orderBy('created_date', 'desc')->get();
  $metas_array=$metas_obj->toArray();
$final_array['ks']=$ks_array[0];
$final_array['similar']=$allks_array;


foreach ($metas_array as $key => $value) {

$final_array['metas'][$value['meta_key']][]=$value;

}

/*echo '<pre>';
print_r($final_array);
echo '</pre>';
die;*/
return view('knowledge_sessions')->with('data',$final_array);

}
function getSingleEditKs($ks){

  $ks_obj=Sc_knowledge_sessions::where('ks_title_slug',$ks)->orderBy('created_date', 'desc')->get();
  $ks_array=$ks_obj->toArray();
   $allks_obj=Sc_knowledge_sessions::where('ks_title_slug',Null)->orderBy('created_date', 'desc')->get();
  $allks_array=$allks_obj->toArray();
   $metas_obj=speaker_metas::where('speaker_id',$ks_array[0]['ks_id'])->orderBy('created_date', 'desc')->get();
  $metas_array=$metas_obj->toArray();
$final_array['ks']=$ks_array[0];
$final_array['similar']=$allks_array;


foreach ($metas_array as $key => $value) {

$final_array['metas'][$value['meta_key']][]=$value;

}

/*echo '<pre>';
print_r($final_array);
echo '</pre>';
die;*/
return view('edit_knowledge_session')->with('data',$final_array);

}

function getAddKnowledgeSession(){


return view('add_knowledge_session');

}
function getAddMemberSpeaker(){


return view('member_add_speaker');

}



function CheckKnowledgeSession(Request $request){


$validator = Validator::make($request->all(), [
                
                'event_title' => 'required',      
                'event_date' => 'required',
                'event_cost' => 'required',
                'event_time' => 'required',
                'event_city' => 'required',
                'event_venue' => 'required',
                'event_category' => 'required',
              
                'event_content' => 'required',
                
        ],[
'event_title.required' => 'This field is required',
'event_date.required' => 'This field is required',
'event_cost.required' => 'This field is required',
'event_city.required' => 'This field is required',
'event_venue.required' => 'This field is required',
'event_category.required' => 'This field is required',

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





            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}

function CheckRsvp(Request $request){


$validator = Validator::make($request->all(), [
                
                'attendees_name' => 'required',      
                'attendees_email' => 'required',
                'attendees_mobile' => 'required',
                'attendees_city' => 'required',
                'attendees_status' => 'required',
              
                
        ],[
'attendees_name.required' => 'This field is required',
'attendees_email.required' => 'This field is required',
'attendees_mobile.required' => 'This field is required',
'attendees_city.required' => 'This field is required',
'attendees_status.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

             $user_id = session()->get('userid');
             $role = session()->get('role');
  $insert_array= array(
        'parent_id'=>$request->input('data_id'),
        'member_id'=>$user_id,
        'member_type'=>$role,
        'name'=>$request->input('attendees_name'),
        'phone_number'=>$request->input('attendees_mobile'),
        'email'=>$request->input('attendees_email'),
        'city'=>$request->input('attendees_city'),
      
        'status'=>$request->input('attendees_status'),
        'ticket_type'=>$request->input('data_type'),
        'created_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('rsvp_members')->insertGetId($insert_array);





            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}
function CheckAttendees(Request $request){


$validator = Validator::make($request->all(), [
                
                'attendees_name' => 'required',      
                'attendees_email' => 'required',
                'attendees_mobile' => 'required',
                'attendees_city' => 'required',
                'attendees_status' => 'required',
              
                
        ],[
'attendees_name.required' => 'This field is required',
'attendees_email.required' => 'This field is required',
'attendees_mobile.required' => 'This field is required',
'attendees_city.required' => 'This field is required',
'attendees_status.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

            
            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}
function InsertAttendees(Request $request){


$validator = Validator::make($request->all(), [
                
                'attendees_name' => 'required',      
                'attendees_email' => 'required',
                'attendees_mobile' => 'required',
                'attendees_city' => 'required',
                'attendees_status' => 'required',
              
                
        ],[
'attendees_name.required' => 'This field is required',
'attendees_email.required' => 'This field is required',
'attendees_mobile.required' => 'This field is required',
'attendees_city.required' => 'This field is required',
'attendees_status.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

             $user_id = session()->get('userid');
             $role = session()->get('role');
  $insert_array= array(
        'parent_id'=>'demo',
        'demo_city'=>$request->input('data_city'),
        'demo_date'=>$request->input('demo_date'),
        'amount'=>$request->input('demo_price'),
       
        'member_id'=>$user_id,
        'member_type'=>$role,
        'name'=>$request->input('attendees_name'),
        'phone_number'=>$request->input('attendees_mobile'),
        'email'=>$request->input('attendees_email'),
        'city'=>$request->input('attendees_city'),
      
        'status'=>$request->input('attendees_status'),
        'ticket_type'=>$request->input('demo_type'),
        'created_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('rsvp_members')->insertGetId($insert_array);





            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}
function CheckParticipants(Request $request){


$validator = Validator::make($request->all(), [
                
                'participant_name' => 'required',      
                'participant_email' => 'required',
                'participant_startup' => 'required',
                'participant_desb' => 'required',
                'participant_website' => 'required',
                'participant_start' => 'required',
                'participant_team' => 'required',
                'participant_head' => 'required',
                'participant_file' => 'required',
                'participant_mobile' => 'required',
              
                
        ],[
'participant_name.required' => 'This field is required',
'participant_email.required' => 'This field is required',
'participant_startup.required' => 'This field is required',
'participant_desb.required' => 'This field is required',
'participant_website.required' => 'This field is required',
'participant_start.required' => 'This field is required',
'participant_team.required' => 'This field is required',
'participant_head.required' => 'This field is required',
'participant_file.required' => 'This field is required',
'participant_mobile.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

             $user_id = session()->get('userid');
             $role = session()->get('role');
  $insert_array= array(
        'demo_city'=>$request->input('data_id'),
        'demo_type'=>$user_id,
        'demo_date'=>$role,
        'name'=>$request->input('participant_name'),
        'email_id'=>$request->input('participant_email'),
        'phone_number'=>$request->input('participant_mobile'),
        'startup_name'=>$request->input('participant_startup'),   
        'startup_description'=>$request->input('participant_desb'),
        'startup_website'=>$request->input('participant_website'),
        'startup_commence'=>$request->input('participant_start'),
        'team_size'=>$request->input('participant_team'),
        'startup_head'=>$request->input('participant_head'),
        'startup_file'=>$request->input('participant_file'),
        'created_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('demoday_participants')->insertGetId($insert_array);





            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}
function InsertKs(Request $request){


$validator = Validator::make($request->all(), [
                
                /*'ks_speaker_awards' => 'required',      
                'ks_speaker_recognitions' => 'required',*/
                'ks_timeline_time' => 'required',
                'ks_timeline_content' => 'required',
                'ks_title' => 'required',
                'ks_date' => 'required',
                'ks_time' => 'required',
                'ks_duration' => 'required',
                'ks_venue' => 'required',
                'ks_city' => 'required',
                'ks_cost' => 'required',
                'ks_event_details' => 'required',
                'ks_speaker_bio' => 'required',
                'ks_speaker_desn' => 'required',
                'ks_speaker_company' => 'required',
                'ks_speaker_linkedin' => 'required',
                'ks_speaker_twitter' => 'required',
                'ks_speaker_name' => 'required',
                'hidden_image' => 'required',
              
                
        ],[
'ks_speaker_awards.required' => 'This Speaker Awards field is required',
'ks_speaker_recognitions.required' => 'The Speaker Recognitions field is required',
'ks_timeline_time.required' => 'The Timelime time field is required',
'ks_timeline_content.required' => 'The Timelime Content field is required',
'ks_title.required' => 'The Title field is required',
'ks_date.required' => 'The Date field is required',
'ks_time.required' => 'The Time field is required',
'ks_duration.required' => 'The Duration field is required',
'ks_venue.required' => 'The Venue field is required',
'ks_cost.required' => 'The Price field is required',
'ks_city.required' => 'The City field is required',
'ks_event_details.required' => 'The Event Details field is required',
'ks_speaker_bio.required' => 'The Speaker Bio field is required',
'ks_speaker_desn.required' => 'The Designation field is required',
'ks_speaker_company.required' => 'The Company Name field is required',
'ks_speaker_linkedin.required' => 'The Speaker LinkedIn link field is required',
'ks_speaker_twitter.required' => 'The Speaker Twitter link field is required',
'ks_speaker_name.required' => 'The Speaker Name field  is required',
'hidden_image.required' => 'The Speaker Image field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

             $user_id = session()->get('userid');
             $role = session()->get('role');
  $insert_array= array(
        'member_id'=>$user_id,
        'ks_title'=>$request->input('ks_title'),
        'ks_date'=>$request->input('ks_date'),
        'ks_time'=>$request->input('ks_time'),
        'ks_duration'=>$request->input('ks_duration'),
        'ks_venue'=>$request->input('ks_venue'),
        'ks_cost'=>$request->input('ks_cost'),
        'ks_city'=>$request->input('ks_city'),   
        'ks_event_details'=>$request->input('ks_event_details'),
        'ks_speaker_bio'=>$request->input('ks_speaker_bio'),
        'ks_speaker_desn'=>$request->input('ks_speaker_desn'),
        'ks_speaker_company'=>$request->input('ks_speaker_company'),
        'ks_speaker_linkedin'=>$request->input('ks_speaker_linkedin'),
        'ks_speaker_twitter'=>$request->input('ks_speaker_twitter'),
        'ks_speaker_name'=>$request->input('ks_speaker_name'),
        'ks_title_slug'=>str_slug($request->input('ks_title')),
        'ks_speaker_img'=>$request->input('hidden_image'),
        'created_date'=>date("Y-m-d H:i:s")
        );

       $results = DB::table('sc_knowledge_sessions')->insertGetId($insert_array);


       foreach ($request->input('ks_timeline_time') as $key => $value) {
        $s=explode('~', $value);
        $meta_array[]=array(
          'speaker_id'=>$results,
          'meta_key'=>'timeline',
          'meta_data'=>$s[0],
          'meta_extra'=>$s[1],
          'created_by'=>$user_id,
         'created_date'=>date("Y-m-d H:i:s")

          );
         
       }
       foreach ($request->input('ks_speaker_awards') as $key => $value) {
        
        $meta_array[]=array(
      'speaker_id'=>$results,
          'meta_key'=>'awards',
          'meta_data'=>$value,
          'meta_extra'=>NULL,
          'created_by'=>$user_id,
         'created_date'=>date("Y-m-d H:i:s")

          );
         
       }
       foreach ($request->input('ks_speaker_recognitions') as $key => $value) {
        
        $meta_array[]=array(
          'speaker_id'=>$results,
          'meta_key'=>'recognitions',
          'meta_data'=>$value,
          'meta_extra'=>NULL,      
          'created_by'=>$user_id,
         'created_date'=>date("Y-m-d H:i:s")

          );
         
       }

DB::table('speaker_metas')->insert($meta_array);



            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}

function UpdateKs(Request $request){


$validator = Validator::make($request->all(), [
                
                /*'ks_speaker_awards' => 'required',      
                'ks_speaker_recognitions' => 'required',*/
                'ks_timeline_time' => 'required',
                'ks_timeline_content' => 'required',
                'ks_title' => 'required',
                'ks_date' => 'required',
                'ks_time' => 'required',
                'ks_duration' => 'required',
                'ks_venue' => 'required',
                'ks_city' => 'required',
                'ks_cost' => 'required',
                'ks_event_details' => 'required',
                'ks_speaker_bio' => 'required',
                'ks_speaker_desn' => 'required',
                'ks_speaker_company' => 'required',
                'ks_speaker_linkedin' => 'required',
                'ks_speaker_twitter' => 'required',
                'ks_speaker_name' => 'required',
                'hidden_image' => 'required',
              
                
        ],[
'ks_speaker_awards.required' => 'This Speaker Awards field is required',
'ks_speaker_recognitions.required' => 'The Speaker Recognitions field is required',
'ks_timeline_time.required' => 'The Timelime time field is required',
'ks_timeline_content.required' => 'The Timelime Content field is required',
'ks_title.required' => 'The Title field is required',
'ks_date.required' => 'The Date field is required',
'ks_time.required' => 'The Time field is required',
'ks_duration.required' => 'The Duration field is required',
'ks_venue.required' => 'The Venue field is required',
'ks_cost.required' => 'The Price field is required',
'ks_city.required' => 'The City field is required',
'ks_event_details.required' => 'The Event Details field is required',
'ks_speaker_bio.required' => 'The Speaker Bio field is required',
'ks_speaker_desn.required' => 'The Designation field is required',
'ks_speaker_company.required' => 'The Company Name field is required',
'ks_speaker_linkedin.required' => 'The Speaker LinkedIn link field is required',
'ks_speaker_twitter.required' => 'The Speaker Twitter link field is required',
'ks_speaker_name.required' => 'The Speaker Name field  is required',
'hidden_image.required' => 'The Speaker Image field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

             $user_id = session()->get('userid');
             $role = session()->get('role');
  $insert_array= array(
        'member_id'=>$user_id,
        'ks_title'=>$request->input('ks_title'),
        'ks_date'=>$request->input('ks_date'),
        'ks_time'=>$request->input('ks_time'),
        'ks_duration'=>$request->input('ks_duration'),
        'ks_venue'=>$request->input('ks_venue'),
        'ks_cost'=>$request->input('ks_cost'),
        'ks_city'=>$request->input('ks_city'),   
        'ks_event_details'=>$request->input('ks_event_details'),
        'ks_speaker_bio'=>$request->input('ks_speaker_bio'),
        'ks_speaker_desn'=>$request->input('ks_speaker_desn'),
        'ks_speaker_company'=>$request->input('ks_speaker_company'),
        'ks_speaker_linkedin'=>$request->input('ks_speaker_linkedin'),
        'ks_speaker_twitter'=>$request->input('ks_speaker_twitter'),
        'ks_speaker_name'=>$request->input('ks_speaker_name'),
        'ks_title_slug'=>str_slug($request->input('ks_title')),
        'ks_speaker_img'=>$request->input('hidden_image'),
        'created_date'=>date("Y-m-d H:i:s")
        );

      Sc_knowledge_sessions::where('ks_id',$request->input('edit_id'))->update($insert_array);
speaker_metas::where('speaker_id',$request->input('edit_id'))->delete();

       foreach ($request->input('ks_timeline_time') as $key => $value) {
        $s=explode('~', $value);
        $meta_array[]=array(
          'speaker_id'=>$request->input('edit_id'),
          'meta_key'=>'timeline',
          'meta_data'=>$s[0],
          'meta_extra'=>$s[1],
          'created_by'=>$user_id,
         'created_date'=>date("Y-m-d H:i:s")

          );
         
       }
       foreach ($request->input('ks_speaker_awards') as $key => $value) {
        
        $meta_array[]=array(
      'speaker_id'=>$request->input('edit_id'),
          'meta_key'=>'awards',
          'meta_data'=>$value,
          'meta_extra'=>NULL,
          'created_by'=>$user_id,
         'created_date'=>date("Y-m-d H:i:s")

          );
         
       }
       foreach ($request->input('ks_speaker_recognitions') as $key => $value) {
        
        $meta_array[]=array(
          'speaker_id'=>$request->input('edit_id'),
          'meta_key'=>'recognitions',
          'meta_data'=>$value,
          'meta_extra'=>NULL,      
          'created_by'=>$user_id,
         'created_date'=>date("Y-m-d H:i:s")

          );
         
       }

DB::table('speaker_metas')->insert($meta_array);



            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}

function getDemoday(){
return view('demoday');

}
function getFamily(){
return view('our_family');

}
function getScin(){
return view('scin');

}
function getReachUs(){
return view('reachus');

}
function getRevUp(){
return view('revup');

}
function getWhatWeDo(){
return view('whatwedo');

}
function getDemodayCity($city){

  $pics_obj=Demoday_pics::where('demoday_flag',$city)->get();
  $pics_array['main']=$pics_obj->toArray();
  $pics_array['city']=$city;
/*  echo '<pre>';
  print_r($pics_array);
  echo '</pre>';*/
  if(empty($pics_array)){
  return Redirect::to('/error404');
}
return view('demo_city')->with('pics',$pics_array);

}

function getAllKs(){



  $ks_obj=Sc_knowledge_sessions::orderBy('created_date', 'desc')->get();
  $ks_array=$ks_obj->toArray();
return view('all_knowledge_sessions')->with('ks',$ks_array);
}


function CheckAttendeesKs(Request $request){


$validator = Validator::make($request->all(), [
                
                'attendees_name' => 'required',      
                'attendees_email' => 'required',
                'attendees_mobile' => 'required',
                'attendees_city' => 'required',
                'attendees_status' => 'required',
                'ticket_count' => 'required',
              
                
        ],[
'attendees_name.required' => 'This field is required',
'attendees_email.required' => 'This field is required',
'attendees_mobile.required' => 'This field is required',
'attendees_city.required' => 'This field is required',
'attendees_status.required' => 'This field is required',
'ticket_count.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

 $ks_obj=Sc_knowledge_sessions::where('ks_id',$request->input('data_id'))->get();
  $ks_array=$ks_obj->toArray();

            
            return Response::json(array(
        'success' => true,
        'errors' => 'success',
        'cost' => $ks_array[0]['ks_cost']

    ), 200);



        }




}


function InsertAttendeesKs(Request $request){


$validator = Validator::make($request->all(), [
                
                'attendees_name' => 'required',      
                'attendees_email' => 'required',
                'attendees_mobile' => 'required',
                'attendees_city' => 'required',
                'attendees_status' => 'required',
              
                
        ],[
'attendees_name.required' => 'This field is required',
'attendees_email.required' => 'This field is required',
'attendees_mobile.required' => 'This field is required',
'attendees_city.required' => 'This field is required',
'attendees_status.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }else{

             $user_id = session()->get('userid');
             $role = session()->get('role');
  $insert_array= array(
        'parent_id'=>$request->input('data_id'),
        
        'amount'=>$request->input('ticket_cost'),
       
        'member_id'=>$user_id,
        'member_type'=>$role,
        'name'=>$request->input('attendees_name'),
        'phone_number'=>$request->input('attendees_mobile'),
        'email'=>$request->input('attendees_email'),
        'city'=>$request->input('attendees_city'),
      
        'status'=>$request->input('attendees_status'),
        'ticket_type'=>$request->input('data_type'),
        'created_date'=>date("Y-m-d H:i:s")
        );
       $results = DB::table('rsvp_members')->insertGetId($insert_array);





            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200);



        }




}

function getCompanyProfilePage($company){
  $company_obj=users_company_details::where('startups_slug',$company)->orderBy('company_id', 'desc')->get();
$company_array['data']=$company_obj->toArray()[0];

return view('company_profile')->with('company',$company_array);

}
function getTeamPage(){
return view('our_team');

}
function getCompPro(){
return view('comp_pro');

}



function getMemberDashboard(){
$user_id = session()->get('userid');
$results = Rsvp_members::query()->leftjoin('sc_events as events','events.event_id', '=', 'rsvp_members.parent_id')->where('rsvp_members.member_id','=',$user_id)->get();
        $result = $results->toArray();
/*
echo '<pre>';
print_r($result);
echo '</pre>';
die;*/
foreach ($result as $key => $value) {

if(strtotime($value['event_date']) > strtotime('now')){
$finalarray['up'][]=$value;
}else{
$finalarray['past'][]=$value;
}


}
/*echo '<pre>';
print_r($finalarray);
echo '</pre>';
die;*/
return view('member_dashboard')->with('events',$finalarray);

}
function getKsRsvp($ks){

$results = Rsvp_members::query()->leftjoin('sc_knowledge_sessions as ks','ks.ks_id', '=', 'rsvp_members.parent_id')->where('rsvp_members.parent_id','=',$ks)->get();
        $result = $results->toArray();
/*echo '<pre>';
print_r($result);
echo '</pre>';
die;*/
return view('ks_details')->with('rsvp',$result);

}

function getKsDashboard(){
$user_id = session()->get('userid');
$results = sc_knowledge_sessions::where('created_by','=',$user_id)->get();
        $result = $results->toArray();

foreach ($result as $key => $value) {

if(strtotime($value['ks_date']) > strtotime('now')){
$finalarray['up'][]=$value;
}else{
$finalarray['past'][]=$value;
}


}

/*echo '<pre>';
print_r($finalarray);
echo '</pre>';
die;*/
return view('ks_dashboard')->with('ks',$finalarray);

}

function deleteKs(Request $request){



  $rsvp_obj=Rsvp_members::where('parent_id',$request->input('ks_id'))->get();
  $rsvp_array=$rsvp_obj->toArray();
  if(empty($rsvp_array)){
  Sc_knowledge_sessions::where('ks_id',$request->input('ks_id'))->delete();
  speaker_metas::where('speaker_id',$request->input('ks_id'))->delete();
     return Response::json(array(
        'success' => true,
        'errors' => 'success',

    ), 200);
}else{

 return Response::json(array(
        'success' => true,
        'errors' => 'rsvp',

    ), 200);

}

}




}
