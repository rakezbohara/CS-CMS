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

Route::get('/', function () {
    Session::set('applocale', 'np');
    return view('index');
});

Route::get('welcome', function () {
    return view('firstpage');
    //
});

Route::get('en/{page}', function ($page) {
    App::setLocale('en');
    Route::currentRouteName();
    Session::set('applocale', 'en');
    return view($page);
});
Route::get('np/{page}', function ($page) {
    App::setLocale('np');
    Session::set('applocale', 'np');
    return view($page);
    //
});

Route::get('sample', function () {
    App::setLocale(Session::get('applocale'));
    return view('samplepage' );
    //
});

Route::get('/admin',function(){
    return view('admin_home.dashboard' );
});

Route::get('/ck',function(){
    return view('admin_home.ckfinder' );
});