<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function getData(Request $req) //this Request is from the HTTP look on line 5
    {
        //return "form data will be here";
        # Validate form
        $req -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        return $req->input();
    }
}
