<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OneController extends Controller
{
    public function showForm()
    {
        return view('form');

    }
    public function signUp(Request $request)
    {
        $input = $request->input();

        return view('form', ['data' => $input]);
    }
}
