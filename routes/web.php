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
use App\Http\Controllers\LandingPageController;
Route::get('/', [LandingPageController::class, 'index'])->name('home');

//Landing page routes
Route::get('/about', [LandingPageController::class, 'about'])->name('about');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/pricing', [LandingPageController::class, 'pricing'])->name('pricing');
Route::get('/services', [LandingPageController::class, 'services'])->name('services');

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

//Testing layouts routes
Route::get('/test_layout', function (){return view('test_layouts.index');})->name('test');

require __DIR__.'/auth.php';
