<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required|email|unique:users',
            'password'=> 'required' 
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'Registrasi Berhasil');
        return redirect('/register');
    }
}
