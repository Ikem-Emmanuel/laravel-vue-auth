<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
    Route::post('login', 'SignInController');
    Route::post('logout', 'SignOutController');
    Route::post('register', 'RegisterController');


    Route::get('me', 'MeController');
});

// Route::prefix('auth')->group(function () {
//     Route::post('register', 'RegisterController');
//     Route::post('login', 'SignInController');
//     // Route::get('refresh', 'AuthController@refresh');
//     Route::group(['middleware' => 'auth:api'], function(){
//         // Route::get('user', 'AuthController@user');
//         Route::post('logout', 'SignOutController');
//     });
// });

