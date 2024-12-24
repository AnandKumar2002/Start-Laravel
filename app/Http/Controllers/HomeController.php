<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function getHomeData()
    {
        $name = "Anand";
        $homeUser = ['Anand 1', 'Anand 2', 'Anand 3'];
        return view('home.index', compact("name", "homeUser"));
    }

    function goToHome() 
    {
        return redirect()->route('user', ['name' => 'Anand']);
    }
}
