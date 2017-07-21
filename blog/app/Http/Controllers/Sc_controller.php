<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\RedirectResponse;

use App\Http\models\wp_users;
use App\Http\models\user_temps;
use App\Http\models\sc_users; 
use Image; 
use Socialite;
use Response; 
use Mail;
use App\Mail\Reminder;
use App\Mail\ForgotPassword;
use App\Mail\PioneerMail;
use App\Mail\RegularMail;
use Illuminate\Contracts\Encryption\DecryptException;

use Illuminate\Support\Facades\Crypt;

class Sc_controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function get_allusers(){
	 /* $users = DB::select('select * from wp_users');
	  echo '<pre>';
	  print_r($users);
	  echo '</pre>';*/
		return view('login');

	} 

	 function fb(){
	  //$users = DB::select('select * from wp_users');
	  /*echo '<pre>';
	  print_r($users);
	  echo '</pre>';*/
		return view('fb');
	}
	 function link(){
	  //$users = DB::select('select * from wp_users');
	  /*echo '<pre>';
	  print_r($users);
	  echo '</pre>';*/
		return view('link');
	}
function validate_user(Request $request){




$validator = Validator::make($request->all(), [
                
                'password' => 'required',      
                'username' => 'required|email',
         
                
        ],[
'password.required' => 'This field is required',
'username.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => 'error',
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{


	$status='';
		
			$user_name= $request->input('username');
			$user_password= $request->input('password');
	/*		echo '<pre>';
			print_r($request->input());
			echo '</pre>';*/
	  $result_check = Sc_users::where('sc_login', '=', $user_name)
->where('sc_pass',md5($user_password))
    ->get();
        $result = $result_check->toArray();
      /*  echo '<pre>';
        print_r($result[0]['user_pass']);
        echo '</pre>';*/



        if(!empty($result)){
 $user_id=$result[0]['id'];
 $role=$result[0]['role'];
 $sessionid = str_random(40);
 session()->put('SessionID', $sessionid);
 session()->put('userid', $user_id);
 session()->put('role', $role);
 session()->put('unique_name', $result[0]['sc_unique_name']);
 session()->put('email', $result[0]['sc_email']);
 session()->put('created_date', $result[0]['created_date']);
 session()->put('profile_pic', $result[0]['sc_profile_pic']);
 session()->put('full_name', $result[0]['sc_fullname']);
 /*$usersession = new UserSession();
        $sessionid session()->put('unique_name', $result[0]['sc_unique_name']);
 session()->put('profile_pic', $result[0]['sc_profile_pic']); = str_random(40);
        $usersession->UserID = $user_id;
        $usersession->SessionID = $sessionid;
        $usersession->save();
        Session::put('SessionID', $sessionid);
        Session::put('userid', $user_id);*/


            return Response::json(array(
        'success' => 'success',
        'errors' => 'success'

    ), 200);
	//return view('home');
        }else{

       

            return Response::json(array(
        'success' => 'invalid',
        'errors' => 'invalid'

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;
                               

        
        	//return view('login');
        
}
}
}

function check_register(Request $request){

  $validator = Validator::make($request->all(), [
                
                'fullname' => 'required',      
                'register_password' => 'required',
                'emailaddress' => 'required|email|unique:sc_users,sc_email',
                'register_password' => 'required|same:confirmpassword',
                'confirmpassword' => 'required',
         
                
        ],[
'fullname.required' => 'This field is required',
'register_password.required' => 'This field is required',
'username.required' => 'This field is required',
'emailaddress.required' => 'This field is required',
'confirmpassword.required' => 'This field is required',
'confirmpassword.confirmed' => 'The password and confirm field must be same',
'emailaddress.email' => 'Please enter valid email address',
'emailaddress.unique' => 'This email id already exists',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => 'error',
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{

		
			$emailaddress= $request->input('emailaddress');
			$user_password= $request->input('register_password');
			$fullname= $request->input('fullname');
			$confirmpassword= $request->input('confirmpassword');
	 		$result_check = Sc_users::where('sc_login', '=', $emailaddress)->get();
       		$result = $result_check->toArray();
  

  

       $insert_array= array(
       	'email_id'=>$emailaddress,
       	'full_name'=>$fullname,
       	'password'=>$user_password,
       	'cpassword'=>$confirmpassword,
       	'type'=>'general',
       	'created_date'=>date("Y-m-d H:i:s")
       	);
       $results = DB::table('user_temps')->insertGetId($insert_array);

    return Response::json(array(
        'success' => '/register/?temp='.Crypt::encrypt($results),
        'errors' => 'success'

    ), 200); // 400 being the HTTP code for an invalid request.

   
}
}
function crypt_private($password, $setting)
	{
		$itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$output = '*0';
		if (substr($setting, 0, 2) == $output)
			$output = '*1';

		$id = substr($setting, 0, 3);
		# We use "$P$", phpBB3 uses "$H$" for the same thing
		if ($id != '$P$' && $id != '$H$')
			return $output;

		$count_log2 = strpos($itoa64, $setting[3]);
		if ($count_log2 < 7 || $count_log2 > 30)
			return $output;

		$count = 1 << $count_log2;

		$salt = substr($setting, 4, 8);
		if (strlen($salt) != 8)
			return $output;

		# We're kind of forced to use MD5 here since it's the only
		# cryptographic primitive available in all versions of PHP
		# currently in use.  To implement our own low-level crypto
		# in PHP would result in much worse performance and
		# consequently in lower iteration counts and hashes that are
		# quicker to crack (by non-PHP code).
		if (PHP_VERSION >= '5') {
			$hash = md5($salt . $password, TRUE);
			do {
				$hash = md5($hash . $password, TRUE);
			} while (--$count);
		} else {
			$hash = pack('H*', md5($salt . $password));
			do {
				$hash = pack('H*', md5($hash . $password));
			} while (--$count);
		}

		$output = substr($setting, 0, 12);
		$output .= $this->encode64($hash, 16);

		return $output;
	}

	function CheckPassword($password, $stored_hash)
	{
		if ( strlen( $password ) > 4096 ) {
			return false;
		}

		$hash = $this->crypt_private($password, $stored_hash);

		if ($hash[0] == '*')
			$hash = crypt($password, $stored_hash);

		return $hash === $stored_hash;
	}

function encode64($input, $count)
	{
		$itoa64 = './0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
		$output = '';
		$i = 0;
		do {
			$value = ord($input[$i++]);
			$output .= $itoa64[$value & 0x3f];
			if ($i < $count)
				$value |= ord($input[$i]) << 8;
			$output .= $itoa64[($value >> 6) & 0x3f];
			if ($i++ >= $count)
				break;
			if ($i < $count)
				$value |= ord($input[$i]) << 16;
			$output .= $itoa64[($value >> 12) & 0x3f];
			if ($i++ >= $count)
				break;
			$output .= $itoa64[($value >> 18) & 0x3f];
		} while ($i < $count);

		return $output;
	}



function getWizard(Request $request){


$id=decrypt($request->input('temp'));

$result_check = User_temps::where('temp_id', '=',$id)->get();
        $result = $result_check->toArray();

$if_exists=Sc_users::where('temp_id', '=',$id)->get();

if($if_exists->toArray()){
  return Redirect::to('/error404/');
}

/*echo '<pre>';
print_r($result);
echo '</pre>';*/

return view('registerWizard', ['details' => $result[0]]);

}
function getsocial(){


return view('registerWizard');

}

function validate_registration(Request $request){

echo json_encode('success');

}

function validate_steps(Request $request){
	

$this->validate($request, [
        'register_phone' => 'required',
        'register_location' => 'required',
    ]);


}



function validate_register(Request $request){

/*echo '<pre>';
print_r($request->input());
echo '</pre>';
die;*/


/*$this->validate($request,[
    			
    		]);

    	dd('You are successfully added all fields.');*/



$validator = Validator::make($request->all(), [
           		
    			'user_type' => 'required', 		
    			'hidden_image' => 'required',
    			'register_phone' => 'required',
    			'register_location' => 'required',
    			'register_aoe' => 'required',
    			'personal_domain' => 'required',
    			'startup_industry' => 'required_if:rusc,yes',
    			'rusc' => 'required',
    			'startup_name' => 'required_if:rusc,yes',
    			'startup_age' => 'required_if:rusc,yes',
    			'startup_website' => 'required_if:rusc,yes',
    			'startup_type' => 'required_if:rusc,yes',
    			'elevator_pitch' => 'required_if:rusc,yes',
    			'current_engg' => 'required_if:rusc,no',
    			'company_name' => 'required_if:rusc,no',
    			'user_desn' => 'required',
    			'joinsuc' => 'required',
    			'role' => 'required',
        ],[
'joinsuc.required' => 'TEST FIELD',
        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => true,
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       


        }


echo 'success';

}


function create_user(Request $request){
$result_check = User_temps::where('temp_id', '=',decrypt($request->input('temp_id')))->get();
        $result = $result_check->toArray();
$if_exists=Sc_users::where('sc_email', '=',$result[0]['email_id'])->get();

if($if_exists->toArray()){
  return Redirect::to('/error404/');
}


        $full_name_slug=str_slug($result[0]['full_name'], '.');
        $unique_namecheck = Sc_users::where('sc_unique_name', '=',$full_name_slug)->get();
        $unique_check = $unique_namecheck->toArray();
     
if($unique_check){
	$full_name_slug=str_slug($result[0]['full_name']." ".str_random(1), '.');
}
if(filter_var($request->input('hidden_image'), FILTER_VALIDATE_URL) === FALSE)
{
        $profile_url='http://members.startupsclub.org/image/'.$request->input('hidden_image');
}else{
        $profile_url=$request->input('hidden_image');
}


  $insert_array= array(
       	'role'=>$request->input('role'),
       	'sc_login'=>$result[0]['email_id'],
       	'sc_pass'=>md5(!empty($request->input('register_password'))?$request->input('register_password'):$result[0]['password']),
       	'sc_fullname'=>$result[0]['full_name'],
       	'sc_email'=>$result[0]['email_id'],
       	'sc_phone'=>$request->input('register_phone'),
       	'sc_status'=>1,
       	'online_status'=>1,
       	'sc_profile_pic'=>$profile_url,
       	'personal_domain'=>$request->input('personal_domain'),
       	'sc_location'=>$request->input('register_location'),
       	
       	'register_type'=>$request->input('user_type'),
       	'temp_id'=>decrypt($request->input('temp_id')),
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

 $user_id=$user_id;
 $sessionid = str_random(40);
 session()->put('SessionID', $sessionid);
 session()->put('userid', $user_id);
 session()->put('role', $request->input('role'));
 session()->put('full_name', $result[0]['full_name']);
  session()->put('profile_pic', $profile_url);
 session()->put('unique_name', $full_name_slug);
 session()->put('email', $result[0]['email_id']);
 session()->put('created_date', $insert_array['created_date']);
if($request->input('role')=='pioneer')
Mail::to($result[0]['email_id'])->send(new PioneerMail($result[0]['full_name']));
else
Mail::to($result[0]['email_id'])->send(new RegularMail($result[0]['full_name']));



echo json_encode('success');


}

function upload_picture(Request $request){

/*	        $imageName = time().'.'.$request->image->getClientOriginalExtension();

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
           }


   echo json_encode($filename);  



}

public function redirect(){
return Socialite::with('facebook')->redirect();   
    }
public function redirectlink(){
return Socialite::driver('linkedin')->redirect();
    }

public function callback(Request $request){


$socialiteUser = Socialite::with('facebook')->stateless()->user(); 
$emailaddress=$socialiteUser->email;
$result_check = Sc_users::where('sc_login', '=', $emailaddress)->get();
 $result = $result_check->toArray();
  

if(empty($result)){

$insert_array= array('email_id'=>$socialiteUser->email,'full_name'=>$socialiteUser->name,'profile_pic_url'=>$socialiteUser->avatar_original,'profile_avatar_url'=>$socialiteUser->avatar,'type'=>'fb','created_date'=>date("Y-m-d H:i:s"),'profile_link'=>$socialiteUser->profileUrl,'social_id'=>$socialiteUser->id);       
$results = DB::table('user_temps')->insertGetId($insert_array);

return Redirect::to('/register/?temp='.Crypt::encrypt($results));
}else{
	 return Redirect::back()
                         ->withInput()
                        ->withErrors('That email id already exists');
        }

}


public function callbacklink(Request $request){
	$state = $request->get('state');
    $request->session()->put('state',$state);

	$socialiteUser = Socialite::driver('linkedin')->user();
	$emailaddress=$socialiteUser->email;
$result_check = Sc_users::where('sc_login', '=', $emailaddress)->get();
 $result = $result_check->toArray();
  

if(empty($result)){

$insert_array= array('email_id'=>$socialiteUser->email,'full_name'=>$socialiteUser->name,'profile_pic_url'=>$socialiteUser->avatar_original,'profile_avatar_url'=>$socialiteUser->avatar,'type'=>'fb','created_date'=>date("Y-m-d H:i:s"),'profile_link'=>$socialiteUser->user['publicProfileUrl'],'social_id'=>$socialiteUser->id);
$results = DB::table('user_temps')->insertGetId($insert_array);

return Redirect::to('/register/?temp='.Crypt::encrypt($results));

}else{
	 return Redirect::back()
                         ->withInput()
                        ->withErrors('That email id already exists');
        }
}


/*function validate_steps(Request $request){
	
	$messages = [
    'register_phone.required' => 'gfdgdsfg arsg rgfwr!',
    'register_location.required' => 'We need to know your e-mail address!',
];
$rules = array(
        'register_phone' => 'Required|Min:3|Max:80|Alpha',
        'register_location'     => 'Required',
        
);
	$validator = Validator::make($request->input(), $rules, $messages);
	$errors = $validator->messages;
/*$this->validate($request, [
        'register_phone' => 'required',
        'register_location' => 'required',
    ]);
echo '<pre>';
  print_r($errors->all());
	 print_r($errors);
	echo '</pre>';

}*/

public function messages()
{
    return [
        'register_phone.required' => 'A title is required',
        'register_location.required'  => 'A message is required',
    ];
}


function getForgotPasswordPage(){

return view('forgot_password');

}
function checkForgotPassword(Request $request){


  $validator = Validator::make($request->all(), [
                      
     'email_id' => 'required|email',
        
        ],[

'email_id.email' => 'Please enter valid email address',
'email_id.required' => 'This field is required',

        ]);

        if ($validator->fails()) {

            return Response::json(array(
        'success' => 'error',
        'errors' => $validator->getMessageBag()->toArray()

    ), 200); // 400 being the HTTP code for an invalid request.
       
die;

        }else{
	 $result_check = Sc_users::where('sc_email', '=', $request->input('email_id'))->get();
        $result = $result_check->toArray();
       
if($result){
$result[0]['_token']=$request->input('_token');
$to_email = $request->input('email_id');
Mail::to($to_email)->send(new ForgotPassword($result[0]));
		
	
        

            return Response::json(array(
        'success' => true,
        'errors' => 'success'

    ), 200); // 400 being the HTTP code for an invalid request.
       


        
			

}
else{

            return Response::json(array(
        'success' => true,
        'errors' => 'exists'

    ), 200); 
}

}

}


function checkExpiryForgotPassword(Request $request){
		
		$values=array();
foreach ($request->input() as $key => $value) {

	$values[decrypt($key)] = decrypt($value);

}


if(strtotime('now') > strtotime($values['date'] . ' +1 day')){
return Redirect::to('/error404');
}else{
return view('reset_password')->with('results', $values);
}

}

function saveNewPassword(Request $request){

$user_id=decrypt($request->input('user_id')); 
	
  $reset_password=array('sc_pass'=>md5($request->input('reset_password')));

	Sc_users::where('id',$user_id)->update($reset_password);
	return Redirect::to('/')->withInput()
                                ->withErrors('Password updated Successfully');
                                

}





}





/*namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;
use resources\assets\css;

class Sc_controller extends Controller
{

	function get_allusers(){
	  $users = DB::select('select * from wp_users');
	  /*echo '<pre>';
	  print_r($users);
	  echo '</pre>';
		return view('test', ['users' => $users]);
	}


}*/