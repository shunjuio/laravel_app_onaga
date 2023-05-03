<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Jobs\SendTestMailJob;




class TestMailController extends Controller
{

//    public function send()
//    {
//        Mail::to('test@example.com')
//            ->send(new TestMail());

//        SendTestMailJob::dispatch();

//    }
}
