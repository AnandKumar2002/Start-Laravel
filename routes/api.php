<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Models\image;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/submit-form/create', [FormController::class, 'store'])->name('form.submit');


Route::get('/dummy-data', function () {
    $dummyData = [
        'name' => 'John Doe',
        'email' => 'johndoe@example.com',
        'age' => 30,
        'address' => '123 Main Street, Some City, Some Country'
    ];

    if (request()->query('showPhoneNumber') == 'true') {
        $dummyData['phone_number'] = '+1234567890';
    }

    return response()->json($dummyData);
});


Route::get('/users', function () {

    $users = User::select('name','id')
    ->when(request()->showEmail == 'true', function ($q) {
        return $q->addSelect('email');
    })
    ->when(request()->showTeacher == 'true', function ($q) {
        return $q->with('teacher');
    })
    ->when(request()->showImage == 'true', function ($q) {
        return $q->with('image');
    })
    ->get();

    return response()->json($users);
});

Route::post('/users', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
    ]);

    $user = Teacher::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
    ]);

    return response()->json($user, 201);
});

