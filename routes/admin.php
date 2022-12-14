<?php

use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\careerlavelController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CircularController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\JobindustryController;
use App\Http\Controllers\Backend\JobtypeController;
use App\Http\Controllers\Backend\salaryperiodController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Backend\BlogcategoryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Backend\AdminsettingController;

// Auth::routes(['verify'=>true]);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard Start
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    // Project route start
    Route::resource('category', CategoryController::class);
    Route::resource('jobindustry', JobindustryController::class);
    Route::resource('education', EducationController::class);
    Route::resource('careerlavel', careerlavelController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('salaryperiod', salaryperiodController::class);
    Route::resource('jobtype', JobtypeController::class);
    Route::resource('circular', CircularController::class);
    // Route::resource('company', CompanyController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('user', UserProfileController::class);
    Route::resource('blogcategory', BlogcategoryController::class);

    // admin settings
    Route::get('/settings',[AdminsettingController::class, 'adminSetting'])->name('admin.settings');

    // Project route end
    // user update

    // Route::get('user/Profile',[UserController::class,'UserProfile'])->name('user.index');
    // Route::get('user/update/profile/{id}',[UserController::class,'userUpdate'])->name('user.update');

    Route::get('/', function () {
        return view('backend.dashboard');
    })->name('dashboard');

    Route::group(['prefix' => 'email'], function () {
        Route::get('inbox', function () {
            return view('backend.pages.email.inbox');
        });
        Route::get('read', function () {
            return view('backend.pages.email.read');
        });
        Route::get('compose', function () {
            return view('backend.pages.email.compose');
        });
    });

    Route::group(['prefix' => 'apps'], function () {
        Route::get('chat', function () {
            return view('backend.pages.apps.chat');
        });
        Route::get('calendar', function () {
            return view('backend.pages.apps.calendar');
        });
    });

    Route::group(['prefix' => 'ui-components'], function () {
        Route::get('accordion', function () {
            return view('backend.pages.ui-components.accordion');
        });
        Route::get('alerts', function () {
            return view('backend.pages.ui-components.alerts');
        });
        Route::get('badges', function () {
            return view('backend.pages.ui-components.badges');
        });
        Route::get('breadcrumbs', function () {
            return view('backend.pages.ui-components.breadcrumbs');
        });
        Route::get('buttons', function () {
            return view('backend.pages.ui-components.buttons');
        });
        Route::get('button-group', function () {
            return view('backend.pages.ui-components.button-group');
        });
        Route::get('cards', function () {
            return view('backend.pages.ui-components.cards');
        });
        Route::get('carousel', function () {
            return view('backend.pages.ui-components.carousel');
        });
        Route::get('collapse', function () {
            return view('backend.pages.ui-components.collapse');
        });
        Route::get('dropdowns', function () {
            return view('backend.pages.ui-components.dropdowns');
        });
        Route::get('list-group', function () {
            return view('backend.pages.ui-components.list-group');
        });
        Route::get('media-object', function () {
            return view('backend.pages.ui-components.media-object');
        });
        Route::get('modal', function () {
            return view('backend.pages.ui-components.modal');
        });
        Route::get('navs', function () {
            return view('backend.pages.ui-components.navs');
        });
        Route::get('navbar', function () {
            return view('backend.pages.ui-components.navbar');
        });
        Route::get('pagination', function () {
            return view('backend.pages.ui-components.pagination');
        });
        Route::get('popovers', function () {
            return view('backend.pages.ui-components.popovers');
        });
        Route::get('progress', function () {
            return view('backend.pages.ui-components.progress');
        });
        Route::get('scrollbar', function () {
            return view('backend.pages.ui-components.scrollbar');
        });
        Route::get('scrollspy', function () {
            return view('backend.pages.ui-components.scrollspy');
        });
        Route::get('spinners', function () {
            return view('backend.pages.ui-components.spinners');
        });
        Route::get('tabs', function () {
            return view('backend.pages.ui-components.tabs');
        });
        Route::get('tooltips', function () {
            return view('backend.pages.ui-components.tooltips');
        });
    });

    Route::group(['prefix' => 'advanced-ui'], function () {
        Route::get('cropper', function () {
            return view('backend.pages.advanced-ui.cropper');
        });
        Route::get('owl-carousel', function () {
            return view('backend.pages.advanced-ui.owl-carousel');
        });
        Route::get('sortablejs', function () {
            return view('backend.pages.advanced-ui.sortablejs');
        });
        Route::get('sweet-alert', function () {
            return view('backend.pages.advanced-ui.sweet-alert');
        });
    });

    Route::group(['prefix' => 'forms'], function () {
        Route::get('basic-elements', function () {
            return view('backend.pages.forms.basic-elements');
        });
        Route::get('advanced-elements', function () {
            return view('backend.pages.forms.advanced-elements');
        });
        Route::get('editors', function () {
            return view('backend.pages.forms.editors');
        });
        Route::get('wizard', function () {
            return view('backend.pages.forms.wizard');
        });
    });

    Route::group(['prefix' => 'charts'], function () {
        Route::get('apex', function () {
            return view('backend.pages.charts.apex');
        });
        Route::get('chartjs', function () {
            return view('backend.pages.charts.chartjs');
        });
        Route::get('flot', function () {
            return view('backend.pages.charts.flot');
        });
        Route::get('morrisjs', function () {
            return view('backend.pages.charts.morrisjs');
        });
        Route::get('peity', function () {
            return view('backend.pages.charts.peity');
        });
        Route::get('sparkline', function () {
            return view('backend.pages.charts.sparkline');
        });
    });

    Route::group(['prefix' => 'tables'], function () {
        Route::get('basic-tables', function () {
            return view('backend.pages.tables.basic-tables');
        });
        Route::get('data-table', function () {
            return view('backend.pages.tables.data-table');
        });
    });

    Route::group(['prefix' => 'icons'], function () {
        Route::get('feather-icons', function () {
            return view('backend.pages.icons.feather-icons');
        });
        Route::get('flag-icons', function () {
            return view('backend.pages.icons.flag-icons');
        });
        Route::get('mdi-icons', function () {
            return view('backend.pages.icons.mdi-icons');
        });
    });

    Route::group(['prefix' => 'general'], function () {
        Route::get('blank-page', function () {
            return view('backend.pages.general.blank-page');
        });
        Route::get('faq', function () {
            return view('backend.pages.general.faq');
        });
        Route::get('invoice', function () {
            return view('backend.pages.general.invoice');
        });
        Route::get('profile', function () {
            return view('backend.pages.general.profile');
        });
        Route::get('pricing', function () {
            return view('backend.pages.general.pricing');
        });
        Route::get('timeline', function () {
            return view('backend.pages.general.timeline');
        });
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', function () {
            return view('backend.pages.auth.login');
        });
        Route::get('register', function () {
            return view('backend.pages.auth.register');
        });
    });

    Route::group(['prefix' => 'error'], function () {
        Route::get('404', function () {
            return view('backend.pages.error.404');
        });
        Route::get('500', function () {
            return view('backend.pages.error.500');
        });
    });

    Route::get('/clear-cache', function () {
        Artisan::call('cache:clear');
        return "Cache is cleared";
    });

    // 404 for undefined routes
    Route::any('/{page?}', function () {
        return View::make('backend.pages.error.404');
    })->where('page', '.*');
});
