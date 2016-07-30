<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\WorldOfGame\Model\Robot;

class RobotsController extends Controller
{
    public function show($id){
    	$responseJSON = [
    		'id' => $id,
    		'name' => 'test',
    		'status' => 'complete'
    	];
    	return response()->json($responseJSON);
    }
   //show, create, store, index, edit, update, destroy
}
