<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class HomeController extends Controller
{
    public function someblog()
    {
    $blogs=blog::orderby('created_at','desc')->take(3)->get();
        return view('user.home', compact('blogs'));
    }


}