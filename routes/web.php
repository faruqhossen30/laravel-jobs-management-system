<?php

use App\Http\Controllers\Frontend\CircularpageController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\JobdetailspageController;
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

Route::get('/',[HomepageController::class, 'homepage'])->name('homepage');
Route::get('/circular',[CircularpageController::class, 'circularpage'])->name('circularpage');
Route::get('/jobdetails',[JobdetailspageController::class, 'jobdetailspage'])->name('jobdetailspage');


