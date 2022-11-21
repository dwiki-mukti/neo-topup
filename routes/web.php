<?php

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ItemController as AdminItemController;
use App\Http\Controllers\Client\AuthController;
use App\Http\Controllers\Client\LandingController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ProfileController;
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

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin'
], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('/product', AdminProductController::class);
    Route::resource('/item', AdminItemController::class);
    Route::get('/item/create/{slug}', [AdminItemController::class, 'create'])->name('item.recreate');
});





Route::group([
    'as' => 'client.'
], function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
    Route::resource('/product', ProductController::class)->only('show');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    Route::group([
        'prefix' => 'auth'
    ], function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'methodLogin']);
        Route::get('/register', [AuthController::class, 'register'])->name('register');
        Route::post('/register', [AuthController::class, 'methodRegister']);
        Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('forgot');
    });
});



Route::group([
    'as' => 'sample.',
    'prefix' => 'sample'
], function () {
    Route::get('/form', function () {
        return view('sample.form');
    })->name('form');
    Route::get('/basic-table', function () {
        return view('sample.basic_table');
    })->name('basic_table');
    Route::get('/data-table', function () {
        return view('sample.data_table');
    })->name('data_table');
});
