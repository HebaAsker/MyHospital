<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Doctor\DoctorController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Dashboard\Section\SectionController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/Admin/Dashboard',[DashboardController::class,'index'])->name('admin_dashboard');




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


        //////////////////////////////// User Dashboard /////////////////////////////////
        Route::get('User/Dashboard', function () {
            return view('Dashboard.user.user_dashboard');
        })->middleware(['auth'])->name('user_dashboard');
        //////////////////////////////// End User Dashboard /////////////////////////////////



        //////////////////////////////// Admin Dashboard /////////////////////////////////
        Route::get('Admin/Dashboard', function () {
            return view('Dashboard.admin.admin_dashboard');
        })->middleware(['auth:admin'])->name('admin_dashboard');
        //////////////////////////////// End Admin Dashboard /////////////////////////////////


//------------------------------------------------------------------------------------------------------------//


Route::middleware(['auth:admin'])->group(function(){

    //////////////////////////////// Sections route ////////////////////////////////

    Route::resource('Sections', SectionController::class);

    //////////////////////////////// End sections route ////////////////////////////////


    //////////////////////////////// Doctors route ////////////////////////////////

    Route::resource('Doctors', DoctorController::class);

    //////////////////////////////// End Doctors route ////////////////////////////////

});



require __DIR__.'/auth.php';
    });


