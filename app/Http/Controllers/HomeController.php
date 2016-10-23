<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::check()){
            $jobs = $request->user()->jobs()->get();

            return view('home/index', ['jobs' => $jobs]);
        }
        return view('home/landing');

    }
}
