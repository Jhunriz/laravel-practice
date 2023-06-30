<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

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

    // public function create()
    // {
    //     if (View::exists('user.login')) {
    //         return view('user.login');
    //     } else {
    //         return abort(404);
    //     }
    // }

    public function login()
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

    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     "name" => ['required', 'min:4'],
        //     "email" => ['required', 'email', Rule::unique('users', 'email')],
        //     "password" => 'required|confirmed|min:6'
        // ]);
        // // $validated['password'] = Hash::make($validated['password']); //other code for validation
        // $validated['password'] = bcrypt($validated['password']);

        // $user = User::create($validated);

        // auth()->login($user);

        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email', Rule::unique('users', 'email')],
            "password" => 'required|confirmed|min:6'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);

        //using the Auth:: validate the using same name and email cannot be registered;

        Auth::login($user);
    }

    public function logout(Request $request)
    {
        // auth()->logout();
        Auth::logout();

        $request->session()->invalidate(); // using of logout can be press
        $request->session()->regenerateToken(); //reset the token 

        return redirect('/')->with('message', 'awit'); //return to the localhost:8000 or landing page;
    }

    // public function process(Request $request)
    // {
    //     $validated = $request->validate([
    //         "email" => ['required', 'email', Rule::unique('users', 'email')],
    //         "password" => 'required'
    //     ]);

    //     if (auth()->attempt($validated)) {
    //         $request->session()->regenerate();

    //         return redirect('/')->with('message', 'Welcome Back!');
    //     }
    // }

    public function process(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', Rule::exists('users', 'email')],
            'password' => 'required'
        ]);

        if (auth()->attempt($validated)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Welcome Back!');
        }
    }
}
