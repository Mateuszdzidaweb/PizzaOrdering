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

//Route::get('/', function () {
//    return view('shop.index');
//});

Route::get('/', [
    'uses' => 'PagesController@home',
    'as' => 'product.index'
]);

Route::get('shop.pizza', [
   'uses' => 'ProductController@getPizza',
    'as' => 'product.view'
]);

Route::get('product.add-to-cart/{id}',[
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('shop.shopping-cart',[
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('shop.create-your-own',[
    'uses' => 'ToppingController@getCreateYourOnw',
    'as' => 'create-own-test'
]);

Route::post ('shop.create-your-own',[
   'uses' => 'ToppingController@postAddToCart',
   'as' => 'createOwn.view'
]);

Route::group(['middleware' => 'auth'], function(){

    Route::get('user.profile',[
        'uses' => 'PagesController@getProfile',
        'as' => 'user.profile',
    ]);

    Route::get('user.logout',[
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout',
    ]);

});


Route::group(['middleware' => 'guest'], function (){

    Route::get('user.singup',[
        'uses'=> 'PagesController@getSingup',
        'as' => 'user.singup',
    ]);

    Route::post('user.singup',[
        'uses' => 'UserController@postSingup',
        'as' => 'user.singup',
    ]);

    Route::get('user.singin',[
        'uses' => 'PagesController@getSingin',
        'as' => 'user.singin',
    ]);

    Route::post('user.singin',[
        'uses' => 'UserController@postSingin',
        'as' => 'user.singin',
    ]);

});








