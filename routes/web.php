<?php

use App\Http\Controllers\crudController;
use App\Http\Controllers\recordController;
use App\Http\Controllers\singleActionController;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/index/{name}', function ($name="") {

    $pageTitle = "My Index Page";
    $data = compact('name','pageTitle');
    return view('index')->with($data);
});


Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/register', function () {
//     return view('form');
// });

// Route::post('/register', function () {
//     // return view('form');
//     echo "Submitted";
// });


Route::get('/register',[recordController::class , 'register']);
Route::get('/',[recordController::class , 'show']);
Route::post('/register',[recordController::class , 'create']);
Route::get('/edit/{id}',[recordController::class , 'edit']);
Route::get('/delete/{id}',[recordController::class , 'delete']);
Route::post('/update/{id}',[recordController::class , 'update']);



Route::get('/uniqueReq',singleActionController::class);
Route::resource('/customer',crudController::class);