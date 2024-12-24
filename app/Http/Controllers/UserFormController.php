<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\PhoneVal;

class UserFormController extends Controller
{
    public function addUser(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:3|max:255|uppercase',
            'phone' => ['required', new PhoneVal],
            'email' => 'required|email|unique:users,email',
            // 'dob' => 'required|date|before:today',
            // 'gender' => 'required|in:male,female',
            // 'skills' => 'required|array|min:1',
            // 'skills.*' => 'in:HTML,CSS,JavaScript',
            // 'experience' => 'required|numeric|min:0|max:10',
            // 'country' => 'required|in:India,USA,UK',
        ],[
            "name.required" => "Name is Required!",
            "name.min" => "Name min Value is 3!",
            "phone.required" => "Phone number is required and must be valid.",
            "email.required" => "Email is Required!",
        ]);

        return response()->json([
            'message' => 'Form submitted successfully!',
            'data' => $request->all(),
        ]);
    }
}
