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

Route::get('/', 'PagesController@getIndex')->name('home');

//Authentication routes
Route::get('auth/login', 'Auth\LoginController@getLogin')->name('login');

Route::post('auth/login', 'Auth\LoginController@postLogin')->name('login-redirect');

Route::post('auth/logout', 'Auth\LoginController@getLogout')->name('logout');
//end of authentication routes

//Registration routes
Route::get('auth/register', 'Auth\RegisterController@getRegister')->name('register');

Route::post('auth/register', 'Auth\RegisterController@create')->name('register-redirect');
//end of registration routes

Route::get('man', 'PagesController@getMan')->name('man');

Route::get('woman', 'PagesController@getWoman')->name('woman');

Route::get('kids', 'PagesController@getKids')->name('kids');

Route::get('privacy', 'PagesController@getPrivacy')->name('privacy');

Route::get('faq', 'PagesController@getFaq')->name('faq');

Route::get('size-table', 'PagesController@getSizetable')->name('size-table');

Route::get('forms-of-payment', 'PagesController@getFormsofpayment')->name('forms-of-payment');

Route::get('shipping-cost-delivery', 'PagesController@getShippingcostdelivery')->name('shipping-cost-delivery');

Route::get('return-and-exchange', 'PagesController@getReturnandexchange')->name('return-and-exchange');

Route::get('complaints', 'PagesController@getComplaints')->name('complaints');

Route::get('full-privacy-policy', 'PagesController@getFullprivacypolicy')->name('full-privacy-policy');

Route::get('contact-us', 'PagesController@getContacts')->name('contact-us');

Route::resource('new', 'NewitemController');

Route::resource('settings', 'SettingController');

Route::get('admin', 'PagesController@getAdmin')->name('admin');
