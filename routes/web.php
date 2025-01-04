<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UploadController;
use App\Http\Middleware\ageCheck;
use App\Http\Middleware\countryCheck;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserFormController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', [UserController::class,'getUser']);
Route::get('user/{name}', [UserController::class,'getUserName']);
Route::get("user/{name}/{id}", [UserController::class,'getPostDetails'])->name('user.postDetails');

Route::get("home",  [HomeController::class,'getHomeData'])->name("hm");

Route::view("home/{name}", "home.index")->name('user');
Route::get("user", [HomeController::class, 'goToHome']);

Route::view('common', "common.index");
// Route::view("url", "url.index")->middleware("check1");
Route::view("url", "url.index")->middleware(countryCheck::class, ageCheck::class);
Route::view('user-form', "userForm.index");
Route::post('addUser',[UserFormController::class, 'addUser']);

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


Route::prefix("student")->group(function() {
    Route::view('/student', "student.index");
    Route::get("/show", [StudentController::class, "show"]);
    Route::get("/add", [StudentController::class, "add"]);
});

Route::controller(StudentController::class)->group(function() {
    Route::get('show', 'show');
    Route::get('add', 'add');
    Route::get('about/{name}', 'about');
});

Route::middleware('check1')->group(function() {
    Route::view('common', "common.index");
});

Route::view('upload', "upload.index");
Route::post('upload', [UploadController::class, 'upload']);

// Route::get('/test-mail', function() {
//     $subject = "NEW";
//     $res = Mail::to('deepanshu@netgen.in')->send(new TestMail($subject));
//     dd($res);
// });

Route::get('/test-mail', [MailController::class, 'sendEmail']);

Route::view('/tesForm', 'content.create')->name('contact');
Route::post('/submit-form/create', [FormController::class, 'store'])->name('form.submit');
Route::view('test', 'components.test');