<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class ProfileController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')->except('index');
        $this->middleware('auth')->only('show');
    }


    public function index()
    {

        if ( Auth::check() ) {

//            if( Auth::user()->id == 1){
//                return '<h1>Admin Profile</h1>';
//            }

            if( Gate::allows('admin', 1) ){
                return '<h1>Admin Profile</h1>';
            }

            return '<h1>Profile</h1>';

        } else {
            return '<h1>you are not logged in!</h1>';
        }


    }


    public function show()
    {

        $user = Auth::user();

        return view('profile', compact('user'));

    }
}
