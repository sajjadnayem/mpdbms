<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    // public function sendEmail()
    // {
    //     $details = [
    //         'title' => 'Mail from MPDBMS admin',
    //         'body' => 'This is for testing mail using gmail',
    //         'credntials'=>'Email'.


    //     ];
    //     Mail::to("18103092nifaz@gmail.com")->send(new TestMail($details));
    //     return "Email has been send to the user";
    // }
}
