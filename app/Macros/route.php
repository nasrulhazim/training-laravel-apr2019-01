<?php 

use Illuminate\Support\Facades\Route;

Route::macro('setting', function($name) {
// Route::get('setting/user', 'UserController@edit')->name('setting.user.edit');
Route::get(
    'setting/' . \Illuminate\Support\Str::kebab($name), 
    'Setting\\' . \Illuminate\Support\Str::studly($name) . 'Controller@edit'
)->name('setting.' . \Illuminate\Support\Str::kebab($name) . '.edit');

// Route::put('setting/user', 'UserController@update')->name('setting.user.update');
Route::put(
    'setting/' . \Illuminate\Support\Str::kebab($name), 
    'Setting\\' . \Illuminate\Support\Str::studly($name) . 'Controller@update'
)->name('setting.' . \Illuminate\Support\Str::kebab($name) . '.update');
});

// Route::setting('User');

// Route::get('setting/billing', 'Setting\BillingController@edit')->name('setting.billing.edit');
// Route::put('setting/billing', 'Setting\BillingController@update')->name('setting.billing.update');
// Route::setting('Billing');

// Route::get('setting/security', 'Setting\SecurityController@edit')->name('setting.security.edit');
// Route::put('setting/security', 'Setting\SecurityController@update')->name('setting.security.update');
// Route::setting('Security');