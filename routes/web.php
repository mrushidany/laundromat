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
})->name('login');

//DashBoard Controller Routes
use App\Http\Controllers\DashBoardController;
Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard',[DashBoardController::class,'index'])->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';
