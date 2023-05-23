<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('/welcome', [
            'beritas' => Berita::all()->sortByDesc('id')
        ]);
    }
}
