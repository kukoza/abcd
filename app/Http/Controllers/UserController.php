<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function User1(Request $request){     
        return view('user1');
    }
    public function User2(Request $request){     
        return view('user2');
    }
}
