<?php

Route::group(['middleware' => 'web', 'prefix' => 'sprockets', 'namespace' => 'Modules\Sprockets\Http\Controllers'], function()
{
    Route::get('/', 'SprocketsController@index');
});
