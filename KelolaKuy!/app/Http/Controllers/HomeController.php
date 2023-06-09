<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('home', ['user'=>$user]);
    }

    public function adminHome()
    {
        $user = Auth::user();
        return view('adminHome', ['user'=>$user]);
    }

    public function landingPageLog()
    {
        $user = Auth::user();
        return view('kelolakuylog', ['user'=>$user]);
    }
}
