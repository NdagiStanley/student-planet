<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        return view('student.student_profile');
    }

    public function newProject()
    {
        return view('student.new_project');
    }
}
