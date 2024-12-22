<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about.index', ["name" => "Anand"]);
});

Route::get("/anand", function () {
    $anand = [
        ["name" => "Anand1", "price" => "100", "id" => 1],
        ["name" => "Anand2", "price" => "200", "id" => 2],
        ["name" => "Anand3", "price" => "300", "id" => 3],
    ];

    return view('anand.index', ["anands" => $anand]);
});

Route::get("/anand/{id}", function ($id) {
    $anand = [
        ["name" => "Anand1", "price" => "100", "id" => 1],
        ["name" => "Anand2", "price" => "200", "id" => 2],
        ["name" => "Anand3", "price" => "300", "id" => 3],
    ];

    return view('anand.ananddetails', ["anands" => $anand[$id - 1]]);
});
