<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Actions\CreateAdmin as CreateAdminUser;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:admin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create admin';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$this->info(CreateAdminUser::INFO);

		$name = $email = $password = '';

		try
		{
			while (!CreateAdminUser::hasValidCredentials($name, $email, $password))
			{
				$name = $this->ask('Enter name');
				$email = $this->ask('Enter email');
				$password = $this->secret('Enter password');
			}
			$info = CreateAdminUser::execute($name, $email, $password);
			$this->info($info);
		}
		catch (\Throwable $th)
		{
			$this->info("Can't create admin");
		}
	}
}
