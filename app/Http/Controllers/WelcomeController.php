<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{
    //
    public function home()
    {
        return view('auth.login');
    }
}
