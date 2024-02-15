<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    function logout(Request $request)
    {
        $request->session()->forget('users');

        return view('login');
    }
}   
