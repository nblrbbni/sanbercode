<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register ()
    {
        return view('register');
    }

    public function welcome (Request $request)
    {
        // dd ($request -> all());
        $firstname = $request['firstname'];
        $lastname = $request['lastname'];

        return view('welcome',['firstname' => $firstname, 'lastname' => $lastname]);

    }
}
