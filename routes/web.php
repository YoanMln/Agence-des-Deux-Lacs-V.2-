<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LastOfferController;


// Accueil //
Route::get('/',[HomeController::class, 'index']);

//BACKOFFICE //
Route::prefix('admin')->group(function () {
    route::get('/', function(){
        return view('backoffice.admin-dashboard');
    })->name('admin.dashboard');
    Route::resource('last-offers',LastOfferController::class);

    Route::get('edit',function(){
        return view(('backoffice.Edit'));
        
    })->name('backoffice.Edit');

    Route::get('edit-news',function(){
        return view('backoffice.Edit-news');
    })->name('backoffice.Edit-news');

    Route::get('/edit-selection',function(){
        return view('backoffice.Edit-selection');
    })->name('backoffice.Edit-selection');
});
