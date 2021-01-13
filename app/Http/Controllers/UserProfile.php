<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
class UserProfile extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {    
        return view('user.profile');

    }

//    public function profileinformation()
//{
//  $users = user::all();
//  return view('user.profile');
//}

}