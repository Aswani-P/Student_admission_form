<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Psy\Readline\HoaConsole;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("form",[HomeController::class,'index'])->name('index');
Route::get('/',[HomeController::class,'showDetails'])->name('view');
Route::post('submitted',[HomeController::class,'store'])->name('storeDetails');
Route::get('viewAll/{id}',[HomeController::class,'viewAllDetails'])->name('viewAll');
