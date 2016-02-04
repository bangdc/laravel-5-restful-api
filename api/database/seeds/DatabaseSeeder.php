<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Maker;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		//Truncate statement of MySQL
		Maker::truncate();
		Model::unguard();

		// $this->call('UserTableSeeder');
		$this->call('MakerSeed');
		$this->call('VehicleSeed');
	}

}
