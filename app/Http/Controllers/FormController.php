<?php

namespace App\Http\Controllers;

use App\Mail\FormSubmissionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    //

    public function index() 
    {
        return "index";
    }

    public function store(Request $request)
    {
        $subject = 'Form Submission Mail';
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        
        // dd('123');
        $email = ["kumar@gmial.com"];

        try {
            $response = Mail::to($email)->send(new FormSubmissionMail($validatedData, $subject));
            dd($response);
            return redirect()->back()->with('success', 'Your message has been sent!');
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
