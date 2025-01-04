<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class MailController extends Controller
{
    //

    public function sendEmail() {
        try {
            $toEmailAddress = "anand.kumar@netgen.in";
            $toWelcomeMessage = "Name:";
            $subject = "Welcome";
            $response = Mail::to($toEmailAddress)->send(new TestMail($toWelcomeMessage, $subject));
            dd($response);
        }
        catch (Exception $e){
            Log::error("Unable to send message" . $e->getMessage());
        }
    }
}
