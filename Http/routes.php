<?php

Route::group(['middleware' => 'auth', 'prefix' => 'sprokets', 'namespace' => 'Modules\Sprokets\Http\Controllers'], function()
{
    Route::get('/', 'SproketsController@index');
});
