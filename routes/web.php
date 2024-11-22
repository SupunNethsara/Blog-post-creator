<?php

use App\Http\Controllers\posts\post_controller;
use Illuminate\Http\Request; // Use Laravel's Request class
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts\PostController;
use Faker\Guesser\Name;

Route::get('/',[App\Http\Controllers\posts\post_controller::class,"showhomepage"]);

Route::get('/create-new-post' ,[post_controller::class,'showcreatepost'])->name('crate-post-form');

Route::post('/create-post',[post_controller::class,'createpost' ])->name('create');

