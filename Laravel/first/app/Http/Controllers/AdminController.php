<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Admin dashboard logic here
        return view('admin.dashboard');
    }
}
