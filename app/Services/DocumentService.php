<?php 

namespace App\Services;

use App\Contracts\EmployeeContract;

class DocumentService
{
	public function generate(string $document_type, EmployeeContract $employee)
	{
		$service_name = '\\App\\Services\\Document\\' . $document_type . 'Service';

		if(!class_exists($service_name)) {
			throw new \Exception("{$service_name} Not Found", 404);
		}

		return (new $service_name)->generate($employee);
	}
}