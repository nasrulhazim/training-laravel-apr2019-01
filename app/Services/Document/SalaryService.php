<?php 

namespace App\Services\Document;

use App\Contracts\EmployeeContract;
use App\Contracts\DocumentServiceContract;

class SalaryService implements DocumentServiceContract 
{
	public function generate(EmployeeContract $employee)
	{
		return $employee->salary();
	}
}