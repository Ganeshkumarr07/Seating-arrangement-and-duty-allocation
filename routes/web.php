<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;
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
Route::get('first/{id}',[usercontrol::class,'first']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/duty', function () {
    return view('duty');
});
Route::get('/component', function () {
    return view('components.firstcomponent');
});
Route::get('/staff', function () {
    return view('staff');
});
Route::get('/student', function () {
    return view('student');
});
Route::get('/halldetails', function () {
    return view('halldetails');
});

Route::get('/',[testcontroller::class,'index']);
Route::post('add',[testcontroller::class,'store']);
Route::post('/',[testcontroller::class,'index'])->name('index');





Route::get('test_ctrl',[usercontrol::class,'disp'])->name('disp');

Route::view("login",'login');
Route::view("home",'home');

