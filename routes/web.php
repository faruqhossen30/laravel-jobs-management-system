<?php

use App\Http\Controllers\Backend\JobindustryController;
use App\Http\Controllers\Frontend\AboutpageController;
use App\Http\Controllers\Frontend\CircularpageController;
use App\Http\Controllers\Frontend\CompanydetailspageController;
use App\Http\Controllers\Frontend\ContactpageController;
use App\Http\Controllers\Frontend\FaqspageController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\JobdetailspageController;
use App\Http\Controllers\Frontend\JobindustrypageController;
use App\Http\Controllers\Frontend\PolicypageController;
use App\Http\Controllers\Frontend\ServicepageController;
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

// important backend route and frontend !same check

Route::get('/',[HomepageController::class, 'homePage'])->name('home');
Route::get('/circular',[CircularpageController::class, 'circularPage'])->name('circular');
Route::get('/jobdetails',[JobdetailspageController::class, 'jobdetailsPage'])->name('jobdetails');
Route::get('/jobindustry',[JobindustrypageController::class, 'jobindustryPage'])->name('jobindustry');


Route::get('/contact',[ContactpageController::class, 'contactPage'])->name('contact');
Route::get('/company/details',[CompanydetailspageController::class, 'companydetailsPage'])->name('company.details');
Route::get('/about',[AboutpageController::class, 'aboutPage'])->name('about');
Route::get('/service',[ServicepageController::class, 'servicePage'])->name('service');
Route::get('/policy',[PolicypageController::class, 'policyPage'])->name('policy');
Route::get('/faqs',[FaqspageController::class, 'faqsPage'])->name('faqs');


