<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    if(Auth::user()->role == 1){
        return redirect()->route('dashboard');
    }elseif(Auth::user()->role == 299){
        return  redirect(env('APP_URL') . '/manager');;
    }else{
        return view('welcome');
    }

})->middleware(['auth'])->name('dashboard');

Route::prefix('user')->middleware(['auth'])->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('dashboard');
    Route::get('/profile', [HomeController::class, 'profile'])->name('user.profile');
    Route::post('/edit-details',  [HomeController::class, 'editDetails'])->name('user.edit_details');
    Route::post('/edit-user-account-details',  [AccountController::class, 'editAccntDetails'])->name('user.edit_account_details');
    Route::get('/user-transfer', [AccountController::class, 'transfer'])->name('user.transfer');
    Route::post('/user-to-user-transfer', [AccountController::class, 'transferFunction'])->name('user.transfer_to_alley_users');


    Route::get('/user-deposit', [AccountController::class, 'deposit'])->name('user.deposit');
    Route::post('/pay', [AccountController::class, 'redirectToGateway'])->name('user.deposit_money');
    Route::get('/payment/callback', [AccountController::class, 'handleGatewayCallback']);

    Route::get('/referrals', [HomeController::class, 'referrals'])->name('user.referrals');
});

require __DIR__.'/auth.php';
