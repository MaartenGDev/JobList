<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class JobController extends Controller
{
    public function index(){
        return view('jobs/list');
    }
}
