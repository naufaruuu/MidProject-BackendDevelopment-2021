<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\changePicController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('laravel');
});

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home"
//     ]);
// });

Route::get('/user', [UserController::class, 'index'])->middleware('auth');


Route::get('/', [CourseController::class, 'home']); //
Route::get('/courses', [CourseController::class, 'courses']);
Route::get('/details/{id}', [CourseController::class, 'singleCourse']);
Route::get('/enroll/{id}', [CourseController::class, 'enrollCourse'])->middleware('auth');
Route::get('/addsession/{id}', [CourseController::class, 'addSession'])->middleware('auth');

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/changepic', [changePicController::class, 'index'])->middleware('auth');
Route::post('/changepic', [changePicController::class, 'store']);
Route::get('/changepic/remove', [changePicController::class, 'remove']);
