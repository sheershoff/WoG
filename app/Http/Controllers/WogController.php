<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WogController extends Controller
{
   public function index()
   {
   		return view('public.page.index');
   }  
}
