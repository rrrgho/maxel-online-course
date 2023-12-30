<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\Web\WebBasicClassController;
use App\Http\Controllers\User\ClassController;
use App\Http\Controllers\User\UserAuthController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminSubscriberController;

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

Route::get('/', [WebController::class, 'index']);
Route::get('basic-class', [WebBasicClassController::class, 'index']);

Route::get('/user/login', [UserAuthController::class, 'login'])->name('login-user');
Route::get('/user/signup', [UserAuthController::class, 'signup'])->name('user-signup');
Route::post('/user/signup', [UserAuthController::class, 'signup']);
Route::get('/user/logout', [UserAuthController::class, 'logout'])->name('logout-user');
Route::post('/user/authenticate', [UserAuthController::class, 'authenticate'])->name('user-authenticate');

Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin-login');
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin-logout');
Route::post('/admin/authenticate', [AdminAuthController::class, 'authenticate'])->name('admin-authenticate');

Route::post('ckeditor-upload', [AdminController::class, 'ckEditorUpload'])->name('ckeditor-upload');




Route::middleware('auth:web')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/dashboard', [ClassController::class, 'dashboard'])->name('user-dashboard');
        Route::get('/basic-class', [ClassController::class, 'basicClass'])->name('user-basic-class');
        Route::post('/basic-class/subscribe', [ClassController::class, 'basicClassSubscribe'])->name('user-basic-class-subscribe');
        Route::get('/special-class', [ClassController::class, 'specialClass'])->name('user-special-class');
        Route::get('/class/{id}', [ClassController::class, 'classDetail']);
        Route::get('/leasson/{class_id}/{leasson_id}', [ClassController::class, 'classLeassonList']);
        Route::post('/leason/complete', [ClassController::class, 'basicClassLeassonComplete'])->name('complete-basic-leasson');

        Route::get('your-purchase', [ClassController::class, 'yourPurchase'])->name('user-your-purchase');
    });
});

Route::middleware('auth:teachers')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin-dashboard');
        Route::prefix('master')->group(function () {
            Route::get('class-category', [AdminController::class, 'classCategory'])->name('admin-master-class-category');
            Route::get('class-category-datatable', [AdminController::class, 'classCategoryDatatable'])->name('admin-master-class-category-datatable');
            Route::post('class-category', [AdminController::class, 'classCategory']);

            Route::get('basic-class/pricelist', [AdminController::class, 'basicClassPriceList'])->name('admin-basic-class-pricelist');
            Route::post('basic-class/pricelist', [AdminController::class, 'basicClassPriceList']);
        });

        Route::get('classes', [AdminController::class, 'classes'])->name('admin-classes');
        Route::get('classes/basic', [AdminController::class, 'basicClassesDatatable'])->name('admin-basic-class-datatable');
        Route::get('classes/special', [AdminController::class, 'specialClassesDatatable'])->name('admin-special-class-datatable');
        Route::post('classes/add', [AdminController::class, 'classAdd'])->name('admin-add-class');
        Route::get('class/{id}', [AdminController::class, 'classDetail'])->name('admin-class-detail');
        
        Route::get('subscribers/special-class', [AdminSubscriberController::class, 'subscriberSpecialClass'])->name('admin-subscriber-special-class');
        Route::get('subscribers/datatable/special-class', [AdminSubscriberController::class, 'specialClass'])->name('admin-subscriber-special-class-datatable');
        Route::get('subscribers/approval-special-class/{id}/{status}', [AdminSubscriberController::class, 'approvalSpecialClass']);

        Route::get('subscribers/basic-class', [AdminSubscriberController::class, 'subscriberBasicClass'])->name('admin-subscriber-basic-class');
        Route::get('subscribers/datatable/basic-class', [AdminSubscriberController::class, 'basicClass'])->name('admin-subscriber-basic-class-datatable');
        Route::get('subscribers/approval-basic-class/{id}/{status}', [AdminSubscriberController::class, 'approvalBasicClass']);

    });
});
