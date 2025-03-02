<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;


Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);
   

Route::get('/hello', [WelcomeController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}' , [ArticleController::class, 'articles']);

Route::get('/greeting', function () {
    return view('hello', ['name' => 'Vincentius']);
    });

    Route::get('/greeting', function () {
        return view('blog.hello', ['name' => 'Andi']);
        });
        
        Route::get('/greeting', [WelcomeController::class,
        'greeting']);
        