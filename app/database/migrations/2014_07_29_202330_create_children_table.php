<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('children', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->integer('age');
            $table->integer('mother_id')->index();
            $table->integer('father_id')->index();
			$table->timestamps();

            $table->foreign('mother_id')->references('id')->on('wives');
            $table->foreign('father_id')->references('id')->on('husbands');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('children');
	}

}
