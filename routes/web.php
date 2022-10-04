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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('products', 'App\Http\Controllers\ProductController@index')->name('products.index');
  
Route::get('products/create-step-one', 'App\Http\Controllers\ProductController@createStepOne')->name('products.create.step.one');
Route::post('products/create-step-one', 'App\Http\Controllers\ProductController@postCreateStepOne')->name('products.create.step.one.post');
  
Route::get('products/create-step-two', 'App\Http\Controllers\ProductController@createStepTwo')->name('products.create.step.two');
Route::post('products/create-step-two', 'App\Http\Controllers\ProductController@postCreateStepTwo')->name('products.create.step.two.post');
  
Route::get('products/create-step-three', 'App\Http\Controllers\ProductController@createStepThree')->name('products.create.step.three');
Route::post('products/create-step-three', 'App\Http\Controllers\ProductController@postCreateStepThree')->name('products.create.step.three.post');