<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;
use App\news;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['seeker', 'company']);
        return view('home');
    }
}
