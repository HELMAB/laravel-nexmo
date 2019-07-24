<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function sendSms(Request $request)
    {
        Nexmo::message()->send([
            'to' => '855962449031',
            'from' => 'vHelp',
            'text' => $request->message
        ]);
        return 'Welcome to Nexmo. I will send sms to ' . $request->phone;
    }
}
