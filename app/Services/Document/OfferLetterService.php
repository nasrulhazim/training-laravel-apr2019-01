<?php 

namespace App\Services\Document;

use App\Contracts\EmployeeContract;
use App\Contracts\DocumentServiceContract;

class OfferLetterService implements DocumentServiceContract 
{
	public function generate(EmployeeContract $employee)
	{
		// do logic to generate the pdf document
		return $employee->offerLetter();
	}
}