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
    return view('login');
});

Route::get('/schedule', function () {
    return view('schedule');
});
// Route for Attendance
Route::get('/attendance', function () {
    return view('attendance');
});

Route::get('/scan', function () {
    return view('scan');
});
