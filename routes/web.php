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
Route::get('/','FrontendController@home')->name('homepage');

Route::get('filteritem','FrontendController@filter_item')->name('filter_itempage');

Route::get('checkout','FrontendController@checkout')->name('checkoutpage');

Route::get('profile','FrontendController@profile')->name('profilepage');

Route::get('detail/{id}','FrontendController@detail')->name('detailpage');





//Backend -------------------------------------
Route::middleware('role:admin')->group(function(){



Route::get('dashboard', 'BackendController@dashboard'
)->name('dashboard');

Route::resource('items','ItemController');//7 (get4)(post1)(put1)(delete1)

Route::resource('brands','BrandController');
});

Route::resource('categories',"CategoryController");

Route::resource('subcategories',"SubcategoryController");





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/getitems','FrontendController@getItems')->name('getitems');

Route::resource('orders','OrderController');