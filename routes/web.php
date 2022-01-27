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

//admin
Route::get('admin/index','Admin\AdminController@index')->name('index');

//product
Route::get('admin/product/index','Admin\ProductController@index')->name('product.index');
Route::get('admin/product/add','Admin\ProductController@add');
Route::get('admin/product/edit/{id}','Admin\ProductController@edit');
Route::post('admin/product/store','Admin\ProductController@store');
Route::post('admin/product/update/{id}','Admin\ProductController@do_update');
Route::get('admin/product/delete/{id}','Admin\ProductController@do_delete');

//typeproduct
Route::get('admin/typeproduct/index','Admin\TypeproductController@index')->name('typeproduct.index');
Route::get('admin/typeproduct/add','Admin\TypeproductController@add');
Route::get('admin/typeproduct/edit/{id}','Admin\TypeproductController@edit');
Route::post('admin/typeproduct/store','Admin\TypeproductController@store');
Route::post('admin/typeproduct/update','Admin\TypeproductController@do_update');
Route::get('admin/typeproduct/delete/{id}','Admin\TypeproductController@do_delete');


//user
Route::get('admin/user/index','Admin\UserController@index')->name('user.index');
Route::get('admin/user/add','Admin\UserController@add');
Route::get('admin/user/edit/{id}','Admin\UserController@edit');
Route::post('admin/user/store','Admin\UserController@store');
Route::post('admin/user/update','Admin\UserController@do_update');
Route::get('admin/user/delete/{id}','Admin\UserController@do_delete');


//background
Route::get('admin/background/index','Admin\BackgroundController@index')->name('background.index');

//content
Route::get('admin/content/index','Admin\ContentController@index')->name('content.index');

//homepage
Route::get('admin/homepage/index','Admin\HomepageController@index')->name('homepage.index');

//welcome
Route::get('/layouts/front_end/index', function () {
    return view('/layouts/front_end/index');
    });

// Route::get('/layouts/front_end/menu', function () {
//     return view('/layouts/front_end/menu');
//     });

Route::get('/layouts/front_end/menu','MenuController@index');

// Route::get('admin/product/index','Admin\ProductController@index')->name('product.index');



Route::get('/layouts/front_end/contact', function () {
    return view('/layouts/front_end/contact');
    });

Route::get('/layouts/front_end/login', function () {
    return view('/layouts/front_end/login');
    });

            


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
