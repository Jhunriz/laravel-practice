<?php

use App\Http\Controllers\StudentController;
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

// common routes naming
// index - show all data or students
// show - show a single data or student
// create - show a form to a new user
// store - store a data
// edit - update data 
// update - update data
// destroy - delete

Route::get('/', [StudentController::class, 'sample']);
Route::get('/login', [UserController::class, 'create']);
Route::get('/register', [UserController::class, 'register']);








// Route::get('/user', [UserController::class, 'index']);  //call the public function index at UserController.php

// Route::get('/user', [UserController::class, 'index'])->name('login');

// Route::get('/user/{id}', [UserController::class, 'show']); // call the public function show at UserController.php

// Route::get('/student', [StudentController::class, 'sample']);



// Route::get('/user/{id}', [UserController::class, 'show'])->middleware('auth');