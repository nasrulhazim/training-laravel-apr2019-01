<?php 

namespace App\Contracts;

use App\Contracts\EmployeeContract;

interface DocumentServiceContract
{
	public function generate(EmployeeContract $employee);
}