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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/schedules', App\Http\Controllers\ScheduleController::class);
Route::put('/schedules/{schedule}/updateByCalendar', [App\Http\Controllers\ScheduleController::class, 'updateByCalendar'])->name('schedules.updateByCalendar');
Route::resource('/schedules', App\Http\Controllers\ScheduleController::class);
Route::put('/schedules/{schedule}/updateByCalendar', [App\Http\Controllers\ScheduleController::class, 'updateByCalendar'])->name('schedules.updateByCalendar');
