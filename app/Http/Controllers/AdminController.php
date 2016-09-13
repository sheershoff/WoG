<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Currency;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.page.index');
    }
	public function questsShow() {
		$currencys = Currency::get();
		return view('admin.page.quests', [
			'currencys' => $currencys
			]);
	}
	public function skillsShow() {
		return view('admin.page.skills');
	}
	public function shopShow() {
		return view('admin.page.shop');
	}
}
