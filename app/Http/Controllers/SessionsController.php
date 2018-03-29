<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {
       //$this->middleware('guest');
    }
    public function create()
    {
        return view('sessions.create');

    }

    public function store()
    {
        //attempt to authenticate the user.
        if (!auth()->attempt(request(['email', 'password']))){

            return back();

        }


        //if not, redirect back.


        //If so, sign them in.


        //redirect to the home page.
           return redirect('/');

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
