<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Admin Dashboard view
    public function index()
    {
        return view('admin.dashboard');
    }
}
