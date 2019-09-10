<?php

Route::group(['middleware' => ['web', 'auth:admin'], 'prefix' => 'article', 'namespace' => 'Modules\Article\Http\Controllers'], function () {
    Route::resource('category', 'CategoryController');
    Route::get('/', 'ContentController@index');
});


//content-route
Route::group(
    ['middleware' => ['web'], 'prefix' => 'article', 'namespace' => "Modules\Article\Http\Controllers"],
    function () {
        Route::get('lists/{category}.html', 'HomeController@lists');
        Route::get('content/{content}.html', 'HomeController@content');
    }
);
Route::group(
    ['middleware' => ['web', 'auth:admin'], 'prefix' => 'article', 'namespace' => "Modules\Article\Http\\Controllers"],
    function () {
        Route::resource('content', 'ContentController');
        Route::get('template', 'TemplateController@index');
        Route::get('template/set/{name}', 'TemplateController@setDefaultTemplate');
    }
);


//slide-route
Route::group(
    ['middleware' => ['web', 'auth:admin'], 'prefix' => 'article', 'namespace' => "Modules\Article\Http\\Controllers"],
    function () {
        Route::resource('slide', 'SlideController');
    }
);
