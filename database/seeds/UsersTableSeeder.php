<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		User::create([
			'name'           => 'Mystore User',
			'email'          => 'no-reply@mystore.no',
			'password'       => Hash::make('password'),
			'remember_token' => 0
		]);
	}
}
