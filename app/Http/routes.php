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

Route::get('/aboutus', function () {
    App::setLocale(Session::get('applocale'));
    return view('aboutus');
});
Route::get('blog', function () {
    App::setLocale(Session::get('applocale'));
    return view('blog');
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
});

Route::get('/admin',function(){
    return view('admin_home.dashboard' );
})->middleware('auth');

Route::get('/ck',function(){
    return view('admin_home.ckfinder' );
});
Route::post('/ckdata','DataController@store');

Route::auth();

Route::get('/home', 'HomeController@index');

//Admin Routes

//Blog
Route::get('/blogpost','AdminHomeController@blogpost');
<<<<<<< HEAD

Route::get('/images', 'HomeController@image');
=======
Route::get('/createblogpost','AdminHomeController@createblogpost');
Route::post('/createblogpost','AdminHomeController@savecreateblogpost');
Route::post('editblog/{blogitem}','AdminHomeController@saveeditblogpost');
Route::get('/editblog/{blogitem}','AdminHomeController@editblogpost');
Route::get('/deleteblog/{blogitem}','AdminHomeController@deleteblogpost');

//Slideshow
Route::get('slide','AdminSlideController@slideshow');
Route::get('createslide','AdminSlideController@createslide');
Route::post('createslide','AdminSlideController@savecreateslide');
Route::get('editslide/{slideitem}','AdminSlideController@editslide');
Route::post('editslide/{slideitem}','AdminSlideController@saveeditslide');
Route::get('/deleteslide/{slideitem}','AdminSlideController@deleteslide');



>>>>>>> a882c16116a031013a8390f54b50868e7a79edad
