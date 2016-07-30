<?php

namespace App\Http\Controllers\Rest;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\WorldOfGame\Model\User;

class UsersController extends Controller
{
    public function show($id){
    	$user = User::find($id);
    	return response()->json($user);
    }

    public function index(){
$user
    }
   //show, create, store, index, edit, update, destroy
}
