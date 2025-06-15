<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

// Website routes
Route::middleware(['web'])->controller('\Bishopm\Learningchurch\Http\Controllers\HomeController')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/blog', 'blogs')->name('blogs');
    Route::get('/blog/{year}/{month}/{slug}', 'blog')->name('blog');
    Route::get('/liturgy', 'liturgies')->name('liturgies');
    Route::get('/liturgy/{year}/{month}/{slug}', 'liturgy')->name('liturgy');
    Route::get('/subjects/{tag}', 'tag')->name('tag');
    Route::get('/videos', 'videos')->name('videos');
    Route::get('/videos/{year}/{month}/{slug}', 'video')->name('video');
});


