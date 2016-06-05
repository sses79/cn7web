<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Phone;

class UserSeeder extends DatabaseSeeder {

	public function run()
	{
		Model::unguard();

		DB::table('users')->delete();

		$users = array(
			['name' => 'sses79', 'email' => 'sses79', 'password' => Hash::make('sses79')],
			['name' => 'timlu', 'email' => 'timlu@126.com', 'password' => Hash::make('timlu')],
			['name' => 'testAdmin', 'email' => 'testAdmin', 'password' => Hash::make('testAdmin')],
		);

		// Loop through each user above and create the record for them in the database
		foreach ($users as $user)
		{
			User::create($user);
		}

		Model::reguard();
	}
}