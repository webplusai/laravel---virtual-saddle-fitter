<?php

namespace App\Http\Controllers\GlobalAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

	public function index()
	{
		return view('pages.global-admin.dashboard');
	}

}