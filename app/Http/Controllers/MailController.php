<?php

namespace App\Http\Controllers;

use App\Mail\SignUp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {
    public function sendMail() {
      Mail::to("fake@mail.com")->send(new SignUp());
      return view('welcome');
}}
