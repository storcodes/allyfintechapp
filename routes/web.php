<?php

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
   
});

require __DIR__.'/auth.php';
