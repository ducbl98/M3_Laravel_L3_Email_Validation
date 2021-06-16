<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    function emailValidation(Request $request): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $email = $request->email;
        $isEmail =true;

        if (empty($email)||!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $isEmail=false;
        }

        return view('index',compact('isEmail'));
    }
}
