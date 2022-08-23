<?php

use App\Http\Controllers\Backend\JobindustryController;
use App\Http\Controllers\Frontend\AboutpageController;
use App\Http\Controllers\Frontend\CircularpageController;
use App\Http\Controllers\Frontend\CompanydetailspageController;
use App\Http\Controllers\Frontend\CompanylistpageController;
use App\Http\Controllers\Frontend\ContactpageController;
use App\Http\Controllers\Frontend\FaqspageController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\JobdetailspageController;
use App\Http\Controllers\Frontend\JobindustrypageController;
use App\Http\Controllers\Frontend\PolicypageController;
use App\Http\Controllers\Frontend\ServicepageController;
use App\Http\Controllers\Frontend\SinglejobController;
use App\Http\Controllers\Userend\UserdashboardController;
use Illuminate\Support\Facades\Route;




Route::get('/',[HomepageController::class, 'homePage'])->name('homepage');
Route::get('/circular',[CircularpageController::class, 'circularPage'])->name('circular');
Route::get('/jobdetails/{id}',[JobdetailspageController::class, 'jobdetailsPage'])->name('jobdetails');
Route::get('/jobindustry',[JobindustrypageController::class, 'jobindustryPage'])->name('jobindustry');


Route::get('/contact',[ContactpageController::class, 'contactPage'])->name('contact');
Route::get('/company/details',[CompanydetailspageController::class, 'companydetailsPage'])->name('company.details');
Route::get('/company/list',[CompanylistpageController::class, 'companylistPage'])->name('company.list');
Route::get('/about',[AboutpageController::class, 'aboutPage'])->name('about');
Route::get('/service',[ServicepageController::class, 'servicePage'])->name('service');
Route::get('/policy',[PolicypageController::class, 'policyPage'])->name('policy');
Route::get('/faqs',[FaqspageController::class, 'faqsPage'])->name('faqs');



Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::get('/dashboard',[UserdashboardController::class, 'dashboard'])->name('userdashboard');
});

