<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Model
{
    use HasFactory;

    function index() {
        return view('auth.login');
    }

    function store() 
    {
        $validated = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:7']
        ]);

        if (!auth()->attempt($validated)) {
            throw ValidationException::withMessages([
                'email' => 'Credentials doesn\'t match.'
            ]);
        }
        
        return redirect('/');
    }

    function logout () 
    {
        auth()->logout();
        return redirect('/login');
    }
}
