<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){return View::make('home');});
Route::get('login', function(){return View::make('login');});
Route::get('register', function(){return View::make('register');});
Route::get('forgot', function(){return View::make('forgot');});
Route::get('profile', function(){return View::make('profile');});
Route::get('profile_user', function(){return View::make('profile_user');});
Route::get('activity', function(){return View::make('activity');});
Route::get('event', function(){return View::make('event_invite');});
Route::get('event_list', function(){return View::make('event_list');});
Route::get('create_event', function(){return View::make('event_create');});
Route::get('group', function(){return View::make('group');});
Route::get('group_list', function(){return View::make('group_list');});
Route::get('directory', function(){return View::make('directory');});
Route::get('single', function(){return View::make('single');});
Route::get('contact', function(){return View::make('contact');});
Route::get('search', function(){return View::make('search');});
Route::post('search', function(){return View::make('search');});
