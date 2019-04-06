<?php

namespace App\Providers;

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
}
