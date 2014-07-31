<?php

use Illuminate\Database\Seeder;

class ToysTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('toys')->delete();
        DB::table('child_toy')->delete();

        $faker = Faker\Factory::create('en_US');

        $faker->seed(1234);

        for($i = 1; $i <= 10; $i++)
        {
            Toy::create(array
                (
                    'id' => $i,
                    'name' => $faker->word
                )
            );
        }

        for($i = 1; $i <= 10; $i++)
        {
            DB::table('child_toy')->insert(array(
                'id' => $i,
                'child_id' => $faker->numberBetween(1,10),
                'toy_id' => $faker->numberBetween(1,10),
                'created_at' =>'now',
                'updated_at' => 'now'
            ));
        }

	}

}
