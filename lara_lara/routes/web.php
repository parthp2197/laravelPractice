<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//clouser function routing
Route::any('login', function(){
    return view('parth');
});
Route::any('Registration','HomeController@registration');
Route::POST('insert','HomeController@store');

Route::any('ParthRegistration','ParthController@ParthRegistration');
Route::any('ParthInsert','ParthController@ParthInsert');

Route::get('parthshowdata','ParthController@Parthshow');
Route::DELETE('pdelete/{id}','ParthController@pdelete');


Route::get('Showdata','HomeController@show');
Route::DELETE('delete/{id}','HomeController@delete');
Route::GET('update/{id}','HomeController@update');

Route::POST('edit/{id}','HomeController@edit');

//Admim routes started
Route::get('Admin/dashboard','AdminController@dashboard');

//Admin_new routes started
Route::get('Admin_new/dashboard','Admin_newController@dashboard');

//ormcontroller1 routes started
Route::get('view/registration','ormcontroller1@ShowReg');
Route::any('orminsert','ormcontroller1@store');

//Tcontroller routes started
Route::get('Taskreg','Tcontroller@Show');
Route::post('Insert','Tcontroller@Insert');
Route::get('dispdata','Tcontroller@dispdata');
Route::DELETE('tdelete/{id}','Tcontroller@tdelete');
Route::any('tupdate/{id}','Tcontroller@tupdate');
Route::any('tedit/{id}','Tcontroller@tedit');

//ormcontroller routes started
Route::get('orm','ormcontroller@index');
Route::POST('orm_insert','ormcontroller@store');
Route::get('orm_show','ormcontroller@show');
Route::delete('orm_delete/{id}','ormcontroller@delete');
Route::get('orm_update/{id}','ormcontroller@edit');
Route::POST('orm_edit/{id}','ormcontroller@update');

//Auth routes started
Route::get('index','AuthController@index');
Route::post('custom_reg','AuthController@register');
Route::get('custom_login','AuthController@showlogin');
Route::get('authenticate','AuthController@auth');
Route::get('profile','AuthController@profile')->middleware('Mwareparth');
Route::get('custom_logout','AuthController@logout');

//AuthParth routes started
Route::get('AuthIndex','AuthParth@show');
Route::POST('AuthReg','AuthParth@register');
Route::get('AuthLogin','AuthParth@login');
Route::get('submit','AuthParth@authenticate');

//SocialAuthGoogleController routes started
Route::get('redirect','SocialAuthGoogleController@redirect');
Route::get('callback','SocialAuthGoogleController@callback');
Route::get('google/login','SocialAuthGoogleController@showpage');

//AdminCont routes started
Route::get('adminindex','AdminCont@index');
Route::get('admin1','Admincont@showadmin');

// apiController routes started
Route::get('country_data','apiController@get_name');
Route::get('get_users/{token}','apiController@get_users');
Route::POST('store','apiController@store');

//StripePaymentController
Route::get('stripe','StripePaymentController@stripe');
Route::post('stripe','StripePaymentController@stripepost')->name('stripe.post');

//seedingController routes started
Route::get('pagination','seedingController@showSeeding');
Route::get('datatable','seedingController@dataTable');
Route::get('testEach','seedingController@testEach');





// ->middleware('Mwareparth')
// get
// put
// post
// patch
// delete
//resource
//any
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');