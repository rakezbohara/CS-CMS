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

Route::get('/','FrontEndController@index');
Route::get('aboutus','FrontEndController@aboutus');
Route::get('orgchart','FrontEndController@orgchart');
Route::get('staff','FrontEndController@staff');
Route::get('budget','FrontEndController@budget');
Route::get('plans','FrontEndController@plans');
Route::get('reports','FrontEndController@reports');
Route::get('gallery','FrontEndController@gallery');
Route::get('blog', 'FrontEndController@blog');
Route::get('suggestion', 'FrontEndController@career');
Route::post('suggestion', 'FrontEndController@savecareer');
Route::get('download','FrontEndController@downloads');
Route::get('blogitem/{postid}','FrontEndController@blogitem');

Route::get('welcome', function () {
    return view('firstpage');
});
Route::get('en','FrontEndController@en');
Route::get('np','FrontEndController@np');

Route::get('sample', function () {
    App::setLocale(Session::get('applocale'));
    return view('samplepage' );
    //
});
Route::get('/admin',function(){
    return view('admin_home.dashboard' );
})->middleware('auth');

Route::post('/ckdata','DataController@store');

Route::auth();

Route::get('/home', 'HomeController@index');

//Admin Routes



//Blog
Route::get('/blogpost','AdminHomeController@blogpost')->middleware('auth');
Route::get('/createblogpost','AdminHomeController@createblogpost')->middleware('auth');
Route::post('/createblogpost','AdminHomeController@savecreateblogpost')->middleware('auth');
Route::post('editblog/{blogitem}','AdminHomeController@saveeditblogpost')->middleware('auth');
Route::get('/editblog/{blogitem}','AdminHomeController@editblogpost')->middleware('auth');
Route::get('/deleteblog/{blogitem}','AdminHomeController@deleteblogpost')->middleware('auth');

//Slideshow
Route::get('slide','AdminSlideController@slideshow')->middleware('auth');
Route::get('createslide','AdminSlideController@createslide')->middleware('auth');
Route::post('createslide','AdminSlideController@savecreateslide')->middleware('auth');
Route::get('editslide/{slideitem}','AdminSlideController@editslide')->middleware('auth');
Route::post('editslide/{slideitem}','AdminSlideController@saveeditslide')->middleware('auth');
Route::get('/deleteslide/{slideitem}','AdminSlideController@deleteslide')->middleware('auth');

//Org/tech head
Route::get('orghead','AdminStaffController@orghead')->middleware('auth');
Route::post('orghead','AdminStaffController@saveorghead')->middleware('auth');
Route::get('orgtechhead','AdminStaffController@orgtechhead')->middleware('auth');
Route::post('orgtechhead','AdminStaffController@saveorgtechhead')->middleware('auth');

//MARQUEE
Route::get('marquee','AdminMarqueeController@marquee')->middleware('auth');
Route::post('marquee','AdminMarqueeController@savemarquee')->middleware('auth');

//HOMECONTENT
Route::get('homecontent','AdminHomeController@homecontent')->middleware('auth');
Route::post('homecontent','AdminHomeController@savehomecontent')->middleware('auth');

//IMPORTANT LINKS
Route::get('implink','AdminImplinkController@implink')->middleware('auth');
Route::post('implink','AdminImplinkController@saveimplink')->middleware('auth');

//IMPORTANT LINKS
Route::get('impPhone','AdminImpPhoneController@index')->middleware('auth');
Route::post('createPhone','AdminImpPhoneController@saveNumber')->middleware('auth');
Route::get('editPhone/{id}','AdminImpPhoneController@edit')->middleware('auth');
Route::post('editPhone/{id}','AdminImpPhoneController@upload')->middleware('auth');
Route::get('/deletePhone/{id}','AdminImpPhoneController@delete')->middleware('auth');


//ABOUT US
Route::get('adminaboutus','AdminAboutUsController@aboutus')->middleware('auth');
Route::post('adminaboutus','AdminAboutUsController@saveaboutus')->middleware('auth');

//GALLERY
Route::get('admingallery',function(){
   return view('admin_home.gallery');
})->middleware('auth');

//CAREER
Route::get('/admincareer','AdminCareerController@career')->middleware('auth');
Route::get('/createcareerpost','AdminCareerController@createcareerpost')->middleware('auth');
Route::post('/createcareerpost','AdminCareerController@savecreatecareerpost')->middleware('auth');
Route::post('editcareer/{blogitem}','AdminCareerController@saveeditcareerpost')->middleware('auth');
Route::get('/editcareer/{blogitem}','AdminCareerController@editcareerpost')->middleware('auth');
Route::get('/deletecareer/{blogitem}','AdminCareerController@deletecareerpost')->middleware('auth');


//DOWNLOADS
Route::get('/admindownloads','AdminDownloadController@downloads')->middleware('auth');
Route::get('/createdownload','AdminDownloadController@createdownload')->middleware('auth');
Route::post('/createdownload','AdminDownloadController@savecreatedownload')->middleware('auth');
Route::post('editdownload/{downloaditem}','AdminDownloadController@saveeditdownload')->middleware('auth');
Route::get('/editdownload/{downloaditem}','AdminDownloadController@editdownload')->middleware('auth');
Route::get('/deletedownload/{downloaditem}','AdminDownloadController@deletedownload')->middleware('auth');


//Career Application
Route::get('suggestionreceived','AdminJobApplication@jobs')->middleware('auth');
Route::get('deletecv/{cvid}','AdminJobApplication@deletejobs')->middleware('auth');

//OFFICE STAFFS
Route::get('/adminstaff','AdminStaffController@staff')->middleware('auth');
Route::get('/createstaff','AdminStaffController@createstaff')->middleware('auth');
Route::post('/createstaff','AdminStaffController@savecreatestaff')->middleware('auth');
Route::post('editstaff/{staffitem}','AdminStaffController@saveeditstaff')->middleware('auth');
Route::get('/editstaff/{staffitem}','AdminStaffController@editstaff')->middleware('auth');
Route::get('/deletestaff/{staffitem}','AdminStaffController@deletestaff')->middleware('auth');

//WASTE ROUTINE
Route::get('/adminwaste','AdminWasteController@wasteroutine')->middleware('auth');
Route::post('/adminwaste','AdminWasteController@savewasteroutine')->middleware('auth');

//SETTING
Route::get('/setting','AdminSettingController@setting')->middleware('auth');
Route::post('/setting','AdminSettingController@savesetting')->middleware('auth');



