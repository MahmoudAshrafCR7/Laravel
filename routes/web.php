<?php

use App\Http\Middleware\checkAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){


        Route::group(["middleware"=>"checkAdmin"],function(){
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/order', 'OrderController@index')->name('order');
            Route::get('/section', 'SectionsController@index')->name('section');
        });

            //crud operation
            Route::get('/orders.show/{id}' , 'OrderController@show')->name('orders.show');
            Route::get('/orders.delete/{id}' , 'OrderController@delete')->name('orders.delete');
            Route::get('/orders.create' , 'OrderController@create')->name('orders.create');
            Route::post('/orders.store' , 'OrderController@store')->name('orders.savenew');
            Route::get('/orders.edit/{id}' , 'OrderController@edit')->name('orders.edit');
            Route::post('/orders.update' , 'OrderController@update')->name('orders.update');
            Route::get('/sections.show/{id}' , 'SectionsController@show')->name('sections.show');
            Route::get('/sections.delete/{id}' , 'SectionsController@delete')->name('sections.delete');
            Route::get('/sections.create' , 'SectionsController@create')->name('sections.create');
            Route::post('/sections.store' , 'SectionsController@store')->name('sections.savenew');
            Route::get('/sections.edit/{id}' , 'SectionsController@edit')->name('sections.edit');
            Route::post('/sections.update' , 'SectionsController@update')->name('sections.update');



    });









