<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class AdminTableSeeder extends DatabaseSeeder {

	public function run()
	{
		Model::unguard();

		DB::table('users')->delete(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->delete();
		DB::table('role_users')->delete();

		$admin = Sentinel::registerAndActivate(array(
			'email'       => 'admin@admin.com',
			'password'    => "admin",
			'first_name'  => 'John',
			'last_name'   => 'Doe',
		));

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'name' => 'Admin',
			'slug' => 'admin',
            'permissions' => array('admin' => 1),
		]);



		Sentinel::getRoleRepository()->createModel()->create([
			'name'  => 'User',
            'slug'  => 'user',
		]);

		$admin->roles()->attach($adminRole);
	}

}