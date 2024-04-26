<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\course;
use App\Http\Controllers\admin;
use App\Http\Controllers\LoginuserController;
use App\Http\Middleware\AuthUser;
Route::get('/privacy',[course::class,'privacy'])->name('privacy');
Route::get('/', [course::class, 'index'])->name('index');
Route::get('/courses',[admin::class,'courses'])->name('course');
Route::get('/about',[course::class,'about']);
Route::get('/contact',[course::class,'contact'])->name('contact');
Route::post('/Addteacher',[admin::class,'Add_Teacher']);
Route::post('/AddCourse',[admin::class,'Add_Course']);
Route::get('/admin',[admin::class,'Admin'])->name('admin')->middleware('auth');

Route::get('/Deleteteacher/{id}',[admin::class,'Delete_Teacher'])->name('deleteteacher');
Route::get('/Deletecourse/{id}',[admin::class,'Delete_Course'])->name('deletecourse');
Route::get('/Login',[LoginuserController::class,'loginpage'])->name('loginpage');
Route::get('/Register',[LoginuserController::class,'RegisterPage'])->name('RegisterPage');
Route::post('/UserLogin',[LoginuserController::class,'login'])->name('login');
Route::post('/UserRegister',[LoginuserController::class,'Register'])->name('Register');
Route::get('/UserLogout',[LoginuserController::class,'logout'])->name('logout');