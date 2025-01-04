<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStore;
use Illuminate\Http\Request;
use App\Rules\PhoneVal;

class UserFormController extends Controller
{
    public function addUser(UserStore $request)
    {

        return response()->json([
            'message' => 'Form submitted successfully!',
            'data' => $request->all(),
        ]);
    }

    public function index()
    {
        
    }
}
