<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('chat',[ChatController::class,'chat']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
