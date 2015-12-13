<?php

// public info routes
Route::get('/home', function() { return Redirect::to('/'); });
Route::get('/about',  function () { return view('about'); });
Route::get('/contact',  function () { return view('contact'); });
Route::get('/partners',  function () { return view('partners'); });
Route::get('/', ['as' => 'welcome', function () {
    return view('welcome');
}]);

// UI routes
Route::get('/profile', ['middleware' => 'auth', function () { return view('ui.user_profile_ui'); }]);
Route::get('/admin',  ['middleware' => 'auth', function () { return view('ui.administrator_ui'); }]);
Route::get('/caregiver',  ['middleware' => 'auth', function () { return view('ui.caregiver_ui'); }]);
Route::get('/agent',  ['middleware' => 'auth', function () { return view('ui.agent_ui'); }]);

// registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


// authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('/auth/loginform', ['as' => 'welcome', function () {
    return view('auth.login');
}]);

