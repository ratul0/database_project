<?php

Route::get('/', function(){
	return Redirect::route('dashboard');

});

/*before Login*/
Route::group(['before'=>'guest'],function(){
	/*AuthController*/
	Route::get('login',['as'=> 'login','uses'=>'AuthController@login']);
	Route::post('login',['as'=> 'doLogin','uses'=>'AuthController@doLogin']);


	Route::get('register',['as'=> 'register','uses'=>'AuthController@register']);
	Route::post('register',['as'=> 'doRegister','uses'=>'AuthController@doRegister']);
	/*AuthController*/
});

/*For All Logged In Users*/
Route::group(['before'=>'auth'],function(){
	/*AuthController*/
	Route::get('logout',['as'=> 'logout','uses'=>'AuthController@logout']);
	/*AuthController*/

	/*DashboardController*/
	Route::get('dashboard',['as'=> 'dashboard','uses'=>'DashboardController@home']);

    /*SiteSettingsController*/
    Route::get('settings',['as'=> 'settings','uses'=>'SiteSettingsController@index']);
    Route::put('settings',['as'=> 'settings.update','uses'=>'SiteSettingsController@update']);

	/*PageController*/
    Route::get('pages',['as'=> 'pages','uses'=>'PageController@index']);
    Route::get('pages/add',['as'=> 'pages.add','uses'=>'PageController@create']);
    Route::post('pages/add',['as'=> 'pages.add.do','uses'=>'PageController@store']);
    Route::get('pages/edit/{id}',['as'=> 'pages.edit','uses'=>'PageController@edit']);
    Route::delete('pages/{id}',['as'=> 'pages.destroy','uses'=>'PageController@destroy']);
    Route::put('pages/edit/{id}',['as'=> 'pages.edit.do','uses'=>'PageController@update']);
    Route::get('pages/manageOrder',['as'=> 'pages.manageOrder','uses'=>'PageController@manageOrder']);



    Route::get('password-reset',['as'=> 'passwordReset','uses'=>'AuthController@resetPassword']);
	Route::post('password-reset',['as'=> 'doPasswordReset','uses'=>'AuthController@doPasswordReset']);
	/*DashboardController*/

	/*UserController*/

	/*UserController*/


});

