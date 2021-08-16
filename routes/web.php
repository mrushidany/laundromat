<?php

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
// Default page location
Route::get('/', function () {return view('home.landing_page');})->name('home');

//Login authentication routes
Route::get('/login', function () {return view('auth.login');})->name('login');

//DashBoard Controller Routes
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\LaundryController;
Route::group(['middleware' => ['auth']], function (){
//    DashBoard Controller Routes
    Route::get('/dashboard',[DashBoardController::class,'index'])->name('dashboard');
    Route::get('/administrator_profile',[DashBoardController::class, 'administrator_profile'])->name('administrator_profile');

//Laundry Controller Routes
    Route::resource('/laundry',LaundryController::class)->name('*', 'laundry' );
});




require __DIR__.'/auth.php';
