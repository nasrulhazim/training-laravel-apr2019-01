<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \App\User::observe(\App\Observers\UserObserver::class);

        $this->registerMacros();
    }

    private function registerMacros()
    {
        $this->registerResponseMacros();
        $this->registerRouteMacros();
    }

    private function registerResponseMacros()
    {

        // register all macros here...
        Response::macro('hello', function () {
            return 'hello';
        });
        Response::macro('profile', function(\App\Contracts\UserContract $user) {
            return (new \App\Services\UserService($user))->profile();
        });

        Response::macro('document', function($type, \App\Contracts\EmployeeContract $employee) {
            return (new \App\Services\DocumentService())->generate($type, $employee);
        });

        Response::macro('salary', function($employee, int $month, int $year) {

            // $salary = (new \App\Services\SalaryService($employee))->calculate($month, $year);

            // return [
            //     'year' => $year,
            //     'month' => $month,
            //     'salary' => $salary->toPdf(),
            // ];
        });
        // response()->json();
        // response()->hello();
    }

    private function registerRouteMacros()
    {
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
    }
}
