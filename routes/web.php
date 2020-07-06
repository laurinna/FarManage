<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('animal/index', 'AnimalController@index')->name('indexAnimal');
Route::get('animal/create', 'AnimalController@create')->name('createAnimal');
Route::post('animal/store', 'AnimalController@store')->name('storeAnimal'); 
Route::any('order/asc/type', 'SortController@typeAscending')->name('typeAscending'); 
Route::any('order/desc/type', 'SortController@typeDescending')->name('typeDescending'); 
Route::any('order/asc/breed', 'SortController@breedAscending')->name('breedAscending'); 
Route::any('order/desc/breed', 'SortController@breedDescending')->name('breedDescending'); 
Route::any('order/asc/fName', 'SortController@fNameAscending')->name('fNameAscending'); 
Route::any('order/desc/fName', 'SortController@fNameDescending')->name('fNameDescending'); 
Route::any('order/asc/mName', 'SortController@mNameAscending')->name('mNameAscending'); 
Route::any('order/desc/mName', 'SortController@mNameDescending')->name('mNameDescending'); 
Route::any('order/asc/lName', 'SortController@lNameAscending')->name('lNameAscending'); 
Route::any('order/desc/lName', 'SortController@lNameDescending')->name('lNameDescending'); 
Route::any('order/asc/county', 'SortController@countyAscending')->name('countyAscending'); 
Route::any('order/desc/county', 'SortController@countyDescending')->name('countyDescending'); 
Route::get('/typeAscPDF','PDFExportController@typeAscPDF')->name('typeAscPDF');
Route::get('/typeDescPDF','PDFExportController@typeDescPDF')->name('typeDescPDF');
Route::get('/breedAscPDF','PDFExportController@breedAscPDF')->name('breedAscPDF');
Route::get('/breedDescPDF','PDFExportController@breedDescPDF')->name('breedDescPDF');
Route::get('/fnameAscPDF','PDFExportController@fnameAscPDF')->name('fnameAscPDF');
Route::get('/fnameDescPDF','PDFExportController@fnameDescPDF')->name('fnameDescPDF');
Route::get('/mnameAscPDF','PDFExportController@mnameAscPDF')->name('mnameAscPDF');
Route::get('/mnameDescPDF','PDFExportController@mnameDescPDF')->name('mnameDescPDF');
Route::get('/lnameAscPDF','PDFExportController@lnameAscPDF')->name('lnameAscPDF');
Route::get('/lnameDescPDF','PDFExportController@lnameDescPDF')->name('lnameDescPDF');
Route::get('/countyAscPDF','PDFExportController@countyAscPDF')->name('countyAscPDF');
Route::get('/countyDescPDF','PDFExportController@countyDescPDF')->name('countyDescPDF');

Route::get('countyasc', 'HomeController@countyAscExport')->name('countyAscExport');

Route::post('/searchfarmer', 'HomeController@searchFarmer')->name('searchFarmer');
Route::post('/searchanimal', 'AnimalController@searchAnimal')->name('searchAnimal');