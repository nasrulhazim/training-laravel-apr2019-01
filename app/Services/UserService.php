<?php 

namespace App\Services;

use App\Contracts\UserContract;

class UserService
{
	public $user;

	public function __construct(UserContract $user)
	{
		$this->user = $user;
	}

	public function profile()
	{
		return [
			'name' => $this->user->getName(),
			'email' => $this->user->getEmail(),
			'avatar' => gravatar($this->user->getEmail()),
			// 'social_media_accounts' => $this->user->getSocialMediaAccounts();
		];
	}
}