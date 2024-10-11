<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\FormsController;
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

Route::get('/Proceses', function () {
    return view('pages/proceses');
});


Route::get('/project', function () {
    return view('pages/project');
});

Route::get('/adminABM', function () {
    return view('pages/admin_login');
});

Route::controller(authController::class)->group(function(){
    Route::post('/register', [authController::class, 'register']);
    Route::post('/login', [authController::class, 'login']);
    Route::get('/logOut', [authController::class, 'logOut']);
});

Route::controller(FormsController::class)->group(function(){
    Route::post('/submitForm', [FormsController::class, 'store']);
    Route::post('/addFormConfig', [FormsController::class, 'addFormConfig']);
    Route::post('/changeConfig', [FormsController::class, 'changeConfig']);
    Route::post('/changeConfigFront', [FormsController::class, 'changeConfigFront']);
});
Route::controller(adminController::class)->group(callback: function(){
    Route::get('/adminForms', [adminController::class, 'forms'])->name('adminController.forms');
    Route::get('/adminSettings', [adminController::class, 'settings'])->name('adminController.settings');
    Route::get('/adminConfigs', [adminController::class, 'configs'])->name('adminController.configs');
    Route::post('/changePassword', [adminController::class, 'changePassword']);
    Route::post('exportForms', [adminController::class, 'exportVisibleForms']);
});

Route::post('export-visible-forms', 'YourController@exportVisibleForms');

Route::get('/admin_dash', function () {
    return view('pages/admin_dash');
});