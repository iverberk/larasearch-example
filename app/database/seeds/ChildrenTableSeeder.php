<?php

use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('children')->delete();

        $faker = Faker\Factory::create('en_US');

        $faker->seed(1234);

        for($i = 1; $i <= 10; $i++)
        {
            Child::create(array
                (
                    'id' => $i,
                    'name' => $faker->firstName,
                    'age' => $faker->numberBetween(1,18),
                    'father_id' => $i,
                    'mother_id' => $i
                )
            );
        }
	}

}
