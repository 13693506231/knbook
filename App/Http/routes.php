<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get(
    '/createCode','Service\ValidateCodeController@create'
);
Route::get(
    '/','Service\ValidateCodeController@create'
);
Route::get(
    '/register','View\MemberController@toregister'
);
Route::get(
    '/login','View\MemberController@tologin'
);

