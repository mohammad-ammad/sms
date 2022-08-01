<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Admin\AuthController::class,'index']);
Route::post('/login', [App\Http\Controllers\Admin\AuthController::class,'login'])->name('login.index');

Route::get('/dashboard', function(){
    return view('layout.pages.dashboard');
});

Route::get('/dashboard/class', function(){
    return view('layout.pages.general_settings.class');
});

Route::get('/dashboard/section', function(){
    return view('layout.pages.general_settings.section');
});

Route::get('/dashboard/grade', function(){
    return view('layout.pages.general_settings.grade');
});

Route::get('/dashboard/students', function(){
    return view('layout.pages.student_management.student');
});

Route::get('/dashboard/registration', function(){
    return view('layout.pages.student_management.registration');
});

Route::get('/dashboard/promotion', function(){
    return view('layout.pages.student_management.promotion');
});