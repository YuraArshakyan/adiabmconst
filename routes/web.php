<?php

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
    return view('pages/home');
});
Route::get('/contacts', function () {
    return view('pages/contacts');
});

Route::get('/Proces', function () {
    return view('pages/process');
});


Route::get('/project', function () {
    return view('pages/project');
});
