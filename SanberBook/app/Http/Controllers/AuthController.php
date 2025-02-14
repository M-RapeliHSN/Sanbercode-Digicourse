<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view("register");
    }

    public function welcome(request $request) {
        $fullname = $request->input("fullname");
        $lastname = $request->input("lastname");
        
        return view("welcome", ["fullname" => $fullname, "lastname" => $lastname]);
    }
}
