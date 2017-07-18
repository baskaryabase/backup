<?php
 namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\models\sc_knowledge_sessions;
use App\Http\models\sc_events;
use Response;


class ApiController extends Controller
{


function getAllKs(){

   $ks_obj=Sc_knowledge_sessions::orderBy('created_date', 'desc')->get();
  $ks_array=$ks_obj->toArray();


            return Response::json(array(
        'success' => true,
        'data' => $ks_array

    ), 200);

}
function getAllEvents(){

   $ks_obj=Sc_events::orderBy('created_date', 'desc')->get();
  $ks_array=$ks_obj->toArray();


            return Response::json(array(
        'success' => true,
        'data' => $ks_array

    ), 200);

}


}
