<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');

Route::get('posts', 'PostController@index');
Route::get('posts/{post:slug}', 'PostController@show');


Route::view('contact', 'contact');
Route::view('about', 'about');
