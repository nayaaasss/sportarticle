<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index');
    
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::controller(DashboardController::class)->group(function() {
        Route::get('/dashboard', 'index')->name('dashboard-admin');
    });

    //articles
    Route::controller(ArticlesController::class)->group(function(){
        Route::get('/articles', 'index')->name('articles-index');
        Route::get('/articles/create', 'create')->name('articles-create');
        Route::post('articles/store', 'store')->name('articles-store');
        Route::get('articles/edit/{id}', 'edit')->name('articles-edit');
        Route::put('articles/update/{id}', 'update')->name('articles-update');
        Route::get('articles/delete/{id}', 'destroy')->name('articles-delete');
    });

    Route::controller(FrontendController::class)->group(function() {
        Route::get('/', 'index')->name('index');
    });

    

});