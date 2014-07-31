<?php

use Illuminate\Database\Seeder;

class HusbandsAndWivesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('husbands')->delete();

        $faker = Faker\Factory::create('en_US');

        $faker->seed(1234);

        for($i = 1; $i <= 10; $i++)
        {
            Husband::create(array('id' => $i, 'name' => $faker->firstName('male')));
            Wife::create(array('id' => $i, 'husband_id' => $i, 'name' => $faker->firstName('female')));
        }
	}

}
