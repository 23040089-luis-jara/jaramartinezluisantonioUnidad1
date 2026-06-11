<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function index()
    {
        if(!session()->has('email'))
        {
            return redirect()->route('login');
        }

        $formatos = DB::table('formatos')->get();

        return view('home.session', compact('formatos'));
    }
}