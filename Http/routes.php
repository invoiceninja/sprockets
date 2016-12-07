<?php

Route::group(['middleware' => 'web', 'prefix' => 'sprokets', 'namespace' => 'Modules\Sprokets\Http\Controllers'], function()
{
    Route::get('/', 'SproketsController@index');
});
