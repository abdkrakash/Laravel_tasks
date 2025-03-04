<?php
use App\Http\Controllers\test20;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//task1
Route::get('/', function () {
    return view('task1');
});
//task2
Route::get('/task2/{name?}' ,function ($name) {
    return "welcom,$name";
});

//task3
Route::get('/user/{age?}', function ($age = null) {
    if ($age) {
        return "You are $age years old.";
    } else {
        return "Age not provided.";
    }
});
//task4
Route::get('/welcome', [test20::class, 'fisrtAction']);


//task8
Route::fallback(function (){
    return response()->view('errors.404',[],404);
});

//task9
Route::resource('posts', PostController::class);




Route::get('/home', function () {
    return view('home');
});