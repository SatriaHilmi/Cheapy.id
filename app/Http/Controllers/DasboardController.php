<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasboardController extends Controller
{
    public function dash()
    {
        return view ('main.dashboard');
    }

    public function ho()
    {
        return view ('main.laporan');
    }

    public function hi()
    {
        return view ('main.user');
    }
    //
}
