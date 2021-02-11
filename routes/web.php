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

Route::get('/', 'HomeController@index')->name('site_home');

Route::get('/investment', 'InvestorController@index')->name('investment');
Route::get('/registration', 'InvestorController@registration')->name('registration');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/findajob', 'HomeController@findajob')->name('findajob');
Route::get('/publication', 'HomeController@publication')->name('publication');
Route::get('/publicationDetails/{id}', 'HomeController@publicationDetails')->name('publicationDetails');
Route::get('/instruction', 'HomeController@instruction')->name('instruction');
Route::get('/policy', 'HomeController@policy')->name('policy');

Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');

Route::get('multiple-file', 'FileUploadController@multipleFilecreate');
Route::post('multiple-file', 'FileUploadController@multipleStore');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/inquiry', 'InquiryController@submit')->name('inquiry');
Route::get('/inquiry/download/{hash}', 'InquiryController@download')->name('inquiry');
Auth::routes();
