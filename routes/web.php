<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardContoller;

Route::get('/',[DashboardContoller::class, "index"]);


Route::get('/profile', function () {
    return view('user.profile');
});
