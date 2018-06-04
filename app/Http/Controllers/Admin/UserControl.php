<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserControl extends Controller
{
    public function profile()
    {
    	return view('site.profile.profile');
    }
}
