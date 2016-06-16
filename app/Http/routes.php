<?php

/*
* frontend views
*/

Route::get('/', array('as' => 'home', function () {
    return View::make('welcome');
}));

Route::get('timeline', 'FrontEndController@showTimeline');
Route::get('feature', 'FrontEndController@showFeature');
Route::get('portfolio', 'FrontEndController@showPortfolio');
Route::get('new', 'FrontEndController@showNew');
Route::post('subscribe', array('as' => 'subscribe', 'uses' => 'FrontEndController@postSubscribe'));


/*
* backend
*/
Route::group(array('prefix' => 'backend'), function () {
    //All basic routes defined here
    Route::get('login', array('as' => 'backend-login', 'uses' => 'BackAuthController@getLogin'));
    Route::post('login', 'BackAuthController@postLogin');
    Route::get('logout', array('as' => 'logout', 'uses' => 'BackAuthController@getLogout'));
    Route::get('lockscreen', 'BackAuthController@getLockscreen');
});


Route::group(array('prefix' => 'backend', 'middleware' => 'SentinelAdmin'), function () {
    Route::get('/', array('as' => 'dashboard', 'uses' => 'BackendController@showDashboard'));

# Users
    Route::group(array('prefix' => 'users'), function () {
        Route::get('/', array('as' => 'users', 'uses' => 'UsersController@getIndex'));
    });
# News
    Route::group(array('prefix' => 'news'), function () {
        Route::get('/', array('as' => 'newses', 'uses' => 'NewsController@getIndex'));
        Route::get('create', array('as' => 'create/news', 'uses' => 'NewsController@getCreate'));
        Route::post('create', 'NewsController@postCreate');
        Route::get('{news}/edit', array('as' => 'update/news', 'uses' => 'NewsController@getEdit'));
        Route::post('{news}/edit', 'NewsController@postEdit');
        Route::get('{news}/delete', array('as' => 'delete/news', 'uses' => 'NewsController@getDelete'));
        Route::get('{news}/confirm-delete', array('as' => 'confirm-delete/news', 'uses' => 'NewsController@getModalDelete'));
        Route::get('{news}/restore', array('as' => 'restore/news', 'uses' => 'NewsController@getRestore'));
        Route::get('{news}/show', array('as' => 'news/show', 'uses' => 'NewsController@show'));
    });

    Route::get('{name?}', 'BackendController@showView');

});

/*
* API
*/
Route::group(['prefix' => 'api'], function () {
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
    Route::get('phones', [
        'as' => 'phones', 'middleware' => 'jwt.auth', 'uses' => 'PhoneController@index'
    ]);
});

Route::get('{name?}', 'FrontEndController@showFrontEndView');

