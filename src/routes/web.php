<?php

Route::group( ['prefix' => 'genratenumber'], function (){
    Route::get('/' , 'Alm\GenerateNumber\Controllers\TestController@test');
});
