<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$password = Hash::make('Welkom0611');
		$marijn = User::create([
			'name' => 'marijn',
			'email' => 'marijn@transitlounge.one',
			'email_verified_at' => now(),
			'password' => $password,
			'remember_token' => Str::random(10),
		]);
	}
}
