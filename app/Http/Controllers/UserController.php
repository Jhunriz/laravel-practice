<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function table(){

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
}
