<?php

Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'article', 'namespace' => 'Modules\Article\Http\Controllers'], function () {
    Route::resource('category', 'CategoryController');
});


//content-route
Route::group(
    ['middleware' => ['web', 'auth:admin'], 'prefix' => 'article', 'namespace' => "Modules\Article\Http\\Controllers"],
    function () {
        Route::resource('content', 'ContentController');
    }
);
