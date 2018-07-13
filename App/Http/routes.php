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
Route::get('/', function () {
    echo 123;die;
});
/*Route::any(
    '/createCode','Service\ValidateCodeController@create'
);
Route::any(
    '/register','View\MemberController@toregister'
);
Route::any(
    '/login','View\MemberController@tologin'
);*/

