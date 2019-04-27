<?php

Route::group(['middleware' => 'web', 'prefix' => 'info', 'namespace' => 'Modules\Info\Http\Controllers'], function()
{
    Route::get('/', 'InfoController@index');
});
