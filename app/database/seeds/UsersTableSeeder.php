<?php

class UsersTableSeeder extends Seeder {

	public function run() {
		$user = new User;
		$user->firstname = 'Jahid';
		$user->lastname = 'Mahmud';
		$user->email = 'jahid@gmail.com';
		$user->password = Hash::make('12345678');
		$user->telephone = '123456789';
		$user->admin = 1;
		$user->save();
	}
}