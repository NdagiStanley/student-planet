<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployerController extends Controller
{
    public function index()
    {
        return view('employer.employer_dashboard');
    }
}
