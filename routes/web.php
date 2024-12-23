<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class,'getUser']);
Route::get('user/{name}', [UserController::class,'getUserName']);
Route::get("user/{name}/{id}", [UserController::class,'getPostDetails'])->name('user.postDetails');

Route::get("home",  [HomeController::class,'getHomeData']);

Route::view('common', "common.index");

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

Route::view("/simple", "simpleView.index");