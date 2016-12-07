<?php

Route::group(['middleware' => 'auth', 'prefix' => 'sprockets', 'namespace' => 'Modules\Sprockets\Http\Controllers'], function()
{
    Route::get('/', 'SprocketsController@index');
});
