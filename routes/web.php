<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\Start;

use App\Http\Controllers\AnotherController;
 

Route::get('/',[Start::class, 'index'])->name('start'); 
Route::get('/login',[Start::class, 'login'])->name('login'); 
Route::post('/login-start',[Start::class, 'login_start'])->name('login.start');

Route::get('/register',[Start::class, 'register'])->name('register');
Route::post('/register/process',[Start::class, 'register_process'])->name('register.process');

Route::get('/logout',[Start::class, 'logout'])->name('logout');

Route::middleware('check_login')->group(function () {
    Route::get('/2749/248/0302/4421/{index}',[BuyController::class, 'index'])->name('buy.run');
    Route::post('/2749/248/0302/4421/7799/{gain_number}',[BuyController::class, 'buy'])->name('buy.run.start');
    Route::get('/2749/248/0302/4421/7799/778/{id}',[BuyController::class, 'bill'])->name('bill.view.success');
    Route::get('/2749/248/0302/4421/7799/778/{id}/{di}',[BuyController::class, 'bill_two'])->name('bill.view.success');

    Route::get('/2749/248/0302/4421',[BuyController::class, 'hightlow'])->name('buy.hight.low');
    Route::get('/2749/248/4421/0302',[BuyController::class, 'kickcool'])->name('buy.kick.cool');


    Route::get('/2749/22/54/21/4/5/6/215/2',[OrderController::class, 'index'])->name('buy.history');
    Route::get('/2124/2136/2148',[WalletController::class, 'index'])->name('wallet.in');
    Route::post('/2124/2136/2148/x',[WalletController::class, 'in_process'])->name('wallet.in.process');
    Route::get('/2125/2137/2149',[WalletController::class, 'out'])->name('wallet.out');
    Route::post('/2125/2137/2149/x',[WalletController::class, 'out_process'])->name('wallet.out.process');

});
 

Route::get('/another',[AnotherController::class, 'index'])->name('another');
Route::get('/another/control',[AnotherController::class, 'control'])->name('another.control');
Route::post('/another/control/status',[AnotherController::class, 'status'])->name('another.status');
Route::post('/another/control/number',[AnotherController::class, 'number'])->name('another.number');
Route::post('/save-number',[AnotherController::class, 'save_number'])->name('another.number.save');
Route::post('/another/new',[AnotherController::class, 'new'])->name('another.number.new');


