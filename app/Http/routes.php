<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('pages.user.login');
});
Route::get('/member', function () {
    return view('pages.user.member');
});
Route::get('/gantt', function () {
    return view('pages.user.gantt');
});
Route::get('/setting', function () {
    return view('pages.user.setting');
});
Route::get('/profile', function () {
    return view('pages.user.profile');
});
Route::get('/template', function () {
    return view('pages.user.template');
});