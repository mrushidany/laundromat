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

Route::get('/', function () {
    return view('auth.login');
})->middleware(['auth'])->name('login');

//DashBoard Controller Routes
use App\Http\Controllers\DashBoardController;
Route::group(['middleware' => ['auth']], function (){
    Route::resource('/dashboard',DashBoardController::class)->name('*','dashboard');
});

require __DIR__.'/auth.php';
