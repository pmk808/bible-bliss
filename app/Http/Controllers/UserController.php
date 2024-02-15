<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $users= User::where(['username'=>$req->username])->first();
        if (!$users || !Hash::check($req->password, $users->password))
        {
            return view('incorrectCredentials');
        }
        else{
            $req->session()->put('users', $users);
            return redirect('login');
        }
    }
    
}


   
