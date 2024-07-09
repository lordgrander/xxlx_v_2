<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WalletController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AdminloginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminWalletController;
use App\Http\Controllers\AdminBoxController;
use App\Http\Controllers\AdminUserController;
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
    
    Route::get('/20020025002120212/123',[SettingController::class, 'profile'])->name('setting.profile');
    Route::post('/20020025002120212/123/x',[SettingController::class, 'profile_process'])->name('setting.profile.process');
    
    Route::get('/20020025002120212/321',[SettingController::class, 'password'])->name('setting.password');
    Route::post('/20020025002120212/321/x',[SettingController::class, 'password_name_check'])->name('setting.password.name.check');

});
Route::get('/a/l',[AdminloginController::class, 'login'])->name('admin_login');
Route::post('/a/l/start',[AdminloginController::class, 'start'])->name('admin.login.start');
 
Route::middleware('check_admin_login')->group(function () {
    Route::get('/a/l/i',[AdminController::class, 'index'])->name('admin.index');
    
    Route::get('/a/l/deposit',[AdminController::class, 'deposit'])->name('admin.deposit');
    
    Route::get('/a/l/withdrawal',[AdminController::class, 'withdrawal'])->name('admin.withdrawal');
    
    Route::get('/a/l/order/list',[AdminController::class, 'order'])->name('admin.order');
    
    Route::get('/a/l/order/wallet/withdraw/{id}/{totken}',[AdminWalletController::class, 'wallet_processing'])->name('admin.withdraw.select');
    Route::post('/a/l/order/wallet/process',[AdminWalletController::class, 'wallet_process_start'])->name('wallet.process.start');
    Route::get('/a/l/order/wallet/thing/{thing}',[AdminWalletController::class, 'wallet_thing'])->name('admin.wallet.thing'); 
    Route::get('/a/l/order/wallet/thing/list/{thing}',[AdminWalletController::class, 'wallet_thing_list'])->name('admin.wallet.thing.list'); 
    
    Route::get('/a/l/b/c',[AdminBoxController::class, 'create'])->name('admin.create.box');
    Route::post('/a/l/b/c/p',[AdminBoxController::class, 'create_process'])->name('box.create.start'); 
    
    Route::get('/a/l/b/v/c',[AdminBoxController::class, 'view_c'])->name('admin.view.box.c');
    Route::get('/a/l/b/v/{id}',[AdminBoxController::class, 'view'])->name('admin.view.box');
    Route::get('/a/l/b/v/s/{id}/{filter?}/{id_search?}', [AdminBoxController::class, 'view_search'])->name('box.view.box.search');

    Route::get('/a/l/b/v/t/{id}',[AdminBoxController::class, 'view_total'])->name('admin.view.total.box');


    Route::post('/a/l/b/t/p',[AdminBoxController::class, 'to_tell_process'])->name('box.tell.start'); 
    Route::get('/a/l/b/c/w/{token}',[AdminBoxController::class, 'view_winner'])->name('box.see.winner'); 

    Route::get('/a/l/u',[AdminUserController::class, 'index'])->name('admin.user'); 
    Route::get('/a/l/u/m/{token}',[AdminUserController::class, 'money'])->name('admin.user.money'); 
    Route::post('/a/l/u/m/process',[AdminUserController::class, 'money_process'])->name('admin.user.money.process'); 

    Route::get('/a/l/u/e/{token}',[AdminUserController::class, 'edit'])->name('admin.user.edit'); 

    
    
});
Route::get('/another',[AnotherController::class, 'index'])->name('another');
Route::get('/another/control',[AnotherController::class, 'control'])->name('another.control');
Route::post('/another/control/status',[AnotherController::class, 'status'])->name('another.status');
Route::post('/another/control/number',[AnotherController::class, 'number'])->name('another.number');
Route::post('/save-number',[AnotherController::class, 'save_number'])->name('another.number.save');
Route::post('/another/new',[AnotherController::class, 'new'])->name('another.number.new');


