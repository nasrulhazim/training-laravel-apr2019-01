<?php 

use Illuminate\Support\Facades\Response;

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