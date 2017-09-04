<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Huenisys\Tpl\Http\Controllers'], function () {

  // Route::get('/', 'TplPageController@getWelcome');
  Route::get('dashboard', 'TplPageController@getDashboard')->name('dashboard')->middleware('auth');
  Route::get('logout', 'TplPageController@getLogout')->middleware('guest');

  Route::get('contact', 'TplPageController@getContact');
  Route::get('features', 'TplPageController@getFeatures');
  Route::get('terms-and-privacy', 'TplPageController@getLegal')->name('legal');

  Route::get('tpl-test', function(){
    return Tpl::display();
  });

  // welcome page for this package
  Route::view('tpl-welcome', 'tpl::welcome');
  Route::view('tpl1', 'tpl::welcome');
});

Tpl::authRoutes();


