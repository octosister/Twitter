<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardContoller;
use App\Http\Controllers\PostController;

Route::get('/',[DashboardContoller::class, "index"])->name("dashboard.index");

Route::post('/post',[PostController::class, "store"])->name("post.store");

Route::delete('/post/{post}',[PostController::class, 'destroy'])->name("post.destroy");


Route::get('/post/{post}',[PostController::class, 'show'])->name("post.show");

Route::get('/profile', function () {
    return view('user.profile');
});
