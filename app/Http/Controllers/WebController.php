<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function library(){
        return view('library');
    }
    public function watchlist(){
        return view('watchlist');
    }
}
