<?php

use App\Events\PrivateEvent;
use App\Events\testingEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function() {
//    event(new testingEvent('BANAA MAN'));
    event(new PrivateEvent('BANAA MAN', 2));

    return 'done';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
