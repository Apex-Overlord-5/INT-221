<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        // User dashboard logic here
        return view('user.dashboard');
    }
}
