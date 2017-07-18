<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['web'])->group(function () {
    Route::namespace('Brackets\AdminAuth\Http\Controllers\Auth')->group(function () {
        Route::get('/admin/login',                      'LoginController@showLoginForm')->name('brackets/admin-auth:admin/showLoginForm');
        Route::post('/admin/login',                     'LoginController@login')->name('brackets/admin-auth:admin/login');

        Route::get('/admin/password',                   'ForgotPasswordController@showLinkRequestForm')->name('brackets/admin-auth:admin/showLinkRequestForm');
        Route::post('/admin/password/send',             'ForgotPasswordController@sendResetLinkEmail')->name('brackets/admin-auth:admin/sendResetLinkEmail');

        Route::get('/admin/password/{token}',      'ResetPasswordController@showResetForm')->name('brackets/admin-auth:admin/showResetForm');
        Route::post('/admin/password/reset',            'ResetPasswordController@reset')->name('brackets/admin-auth:admin/reset');

        Route::any('/admin/logout',                     'LoginController@logout')->name('brackets/admin-auth:admin/logout');
    });
});