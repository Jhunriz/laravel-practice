<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/user', [UserController::class, 'index']);  //call the public function index at UserController.php

Route::get('/user', [UserController::class, 'index'])->name('login');

Route::get('/user/{id}', [UserController::class, 'show']); // call the public function show at UserController.php

// Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');