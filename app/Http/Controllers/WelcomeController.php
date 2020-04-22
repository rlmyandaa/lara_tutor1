<?php

namespace App\Http\Controllers;
use Auth;
class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        if (Auth::check()) {
            return view('home');
        }
        else {
            return view('welcome');
        }
    }
}
