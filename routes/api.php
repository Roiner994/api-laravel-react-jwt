<?php
use Illuminate\Http\Request;
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => ['jwt-auth']], function () {
    Route::get('users','UserController@index');
    Route::put('users/{id}','UserController@update');
    Route::delete('users/{id}','UserController@delete');
});

// Route::group(['middleware' => 'api-header'], function () {
  
//     // The registration and login requests doesn't come with tokens 
//     // as users at that point have not been authenticated yet
//     // Therefore the jwtMiddleware will be exclusive of them
    Route::post('users/login', 'UserController@login');
    Route::post('users', 'UserController@register');
// });
