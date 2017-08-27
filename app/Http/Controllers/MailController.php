<?php

namespace App\Http\Controllers;

use App\Mail\SendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $param = $request->all();

        $mail = Mail::to($param['mail'])->send(new SendContact($request->all()));

            return response()->json(['message' => 'Mail enviado']);

    }
}
