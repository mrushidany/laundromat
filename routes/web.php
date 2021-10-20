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
Route::get('/contact/{request}', [LandingPageController::class, 'contact'])->name('contact');
Route::get('/pricing', [LandingPageController::class, 'pricing'])->name('pricing');
Route::get('/services', [LandingPageController::class, 'services'])->name('services');
Route::post('/save_contact', [LandingPageController::class, 'save_contact'])->name('save_contact');

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
    Route::get('laundry_print_receipt/{id}',[LaundryController::class,'print_receipt'])->name('laundry_print_receipt');
    Route::get('/update_not_paid',[LaundryController::class,'update_not_paid_payment_status'])->name('update_not_paid_payment_status');
    Route::get('/test_printing', [LaundryController::class,'test_printing'])->name('test_printing');
});

//Testing layouts routes
use App\Http\Controllers\TestController;
Route::get('/test_layout',[TestController::class, 'index'])->name('test');

//Printing Receipt Routes
use App\Http\Controllers\PrintingReceiptController;
Route::get('/printing_receipt', [PrintingReceiptController::class,'print_receipt'])->name('print_receipt');

require __DIR__.'/auth.php';
