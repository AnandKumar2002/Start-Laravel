<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show()
    {
        return "It is Show page";
    }

    function add()
    {
        return "It is Show page";
    }

    function about($about) {
        return "This is about $about";
    }
}
