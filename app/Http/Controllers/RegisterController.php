<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class RegisterController extends Controller
{
    function index () {
        return view('auth.register');
    }

    function create(Request $request) {


        $userInstance = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:7'],
        ]);

        $employerInstance = $request->validate([
            'employer' => ['required'],
            'logo' => File::types(['png', 'jpg', 'svg'])
        ]);

        $user = User::create($userInstance);

        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerInstance['employer'],
            'logo' => $logoPath
        ]);

        Auth::login($user);

        //redirect to login
        return redirect('/');
    }
}
