<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    function index () {
        return view('register');
    }

    function create() {

        //validate
        $user = request()->validate([
            'first-name' => ['required'],
            'last-name' => ['required'],
            'email' => ['email', 'required'],
            'password' => ['required', 'min:7']
        ]);

        $user['first_name'] = $user['first-name'];
        unset($user['first-name']);

        $user['last_name'] = $user['last-name'];
        unset($user['last-name']);

        //create user
        User::create($user);
        
        //redirect to login
        return redirect('/login');
    }
}
