<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    // public function master(){
    //     // front.home.home
    //     return view('front.master');
    // }
    public function home(){
        // front.home.home
        return view('front.home.home');
    }
}
