<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('wives', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('husband_id')->index();
            $table->string('name');
			$table->timestamps();

            $table->foreign('husband_id')->references('id')->on('husbands');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('wives');
	}

}
