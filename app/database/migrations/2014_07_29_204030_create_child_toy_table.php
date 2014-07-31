<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildToyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('child_toy', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('child_id')->index();
            $table->integer('toy_id')->index();
			$table->timestamps();

            $table->foreign('child_id')->references('id')->on('children');
            $table->foreign('toy_id')->references('id')->on('toys');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('child_toy');
	}

}
