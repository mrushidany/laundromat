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
    Route::get('/laundry_list',[LaundryController::class,'laundry_list'])->name('laundry_list' );
});

//Landing page routes
Route::get('/about', function () {return view('home.about');})->name('about');
Route::get('/contact', function () {return view('home.contact');})->name('contact');
Route::get('/pricing', function () {return view('home.pricing');})->name('pricing');
Route::get('/services', function () {return view('home.services');})->name('services');




require __DIR__.'/auth.php';
