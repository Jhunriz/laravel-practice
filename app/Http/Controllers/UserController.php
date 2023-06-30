<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    public function table()
    {

        return view('user');
    }

    public function index()
    {
        return 'Hello from UserController';
    }

    // public function show($id)
    // {

    //     $data = array( 
    //         "id" => $id,
    //         "name" => "jhunriz Lalata",
    //         "age"  => 23,
    //         "email" => "jhunriz14@gmail.com"
    //     );

    //     return view('user', ['data' => $data]); // throw data into user.blade.php
    // }


    public function show($id)
    {
        // using the ->with it pass the the from the user 
        return view('user')
            ->with('name', 'Jhunriz Lalata')
            ->with('age', 23)
            ->with('email', 'jhunriz14@gmail.com')
            ->with('id', $id);
    }

    public function create()
    {
        if (View::exists('user.login')) {
            return view('user.login');
        } else {
            return abort(404);
        }
    }

    // public function login()
    // {
    //     // return view('user.create');
    //     if (View::exists('user.login')) {
    //         return view('user.login');
    //     } else {
    //         return abort(404);
    //     }
    // }

    public function register()
    {
        if (View::exists('user.register')) {
            return view('user.register');
        } else {
            return abort(404);
        }
    }
}
