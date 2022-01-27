<?php

namespace App\Actions;

use App\Models\User;

class CreateAdmin
{
	const INFO = 'Admin name must be admin, email needs to be valid email and password needs to be at least 5 characters';

	const SUCCESS = 'Admin Created!';

	public static function execute(string $name, string $email, string $password)
	{
		User::create(['name' => $name, 'email' => $email, 'password' => bcrypt($password)]);
		return self::SUCCESS;
	}

	public static function hasValidCredentials(string $name, string $email, string $password)
	{
		return self::isAdminNameValid($name) && self::isValidEmail($email) && self::passwordHasValidLength($password);
	}

	private static function isAdminNameValid(string $name): bool
	{
		return strtolower($name) === 'admin';
	}

	private static function isValidEmail(string $email): bool
	{
		return preg_match('/^\S+@\S+$/', $email);
	}

	private static function passwordHasValidLength(string $password): bool
	{
		return strlen($password) >= 5;
	}
}
