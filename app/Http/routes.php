<?php


Route::group(['middleware' => ['web']], function(){

    Route::auth();

    Route::group(['middleware' => 'auth'], function(){

        Route::get('/', 'HomeController@index');

        // routes for the words
        Route::resource('word','WordController');
        Route::post('word/store','WordController@store');
        Route::get('word/{id}/show', 'WordController@show');
        Route::get('word/{id}/update', 'WordController@update');
        Route::get('word/{id}/delete', 'WordController@destroy');

    });

});

