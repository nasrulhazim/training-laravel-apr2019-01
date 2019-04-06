<?php 

namespace App\Contracts;

interface UserContract
{
	public function getName(): string;
	
	public function getEmail(): string;
}