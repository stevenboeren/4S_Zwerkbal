<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }


    public function test()
    {
        // 1. Een variable aanmaken met een naam.
        // 2. return een view genaamd test.blade.php
        // 3. output de naam op de view.
        $naampje = "Steven";
        return view('test')
                ->with('naampje', $naampje);
    }
}
