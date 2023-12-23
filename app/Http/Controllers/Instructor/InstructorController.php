<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;

class InstructorController extends Controller
{
    // Instructor Dashboard view
    public function index()
    {
        return view('instructor.dashboard');
    }
}
