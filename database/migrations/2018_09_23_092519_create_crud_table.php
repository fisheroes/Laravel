<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrudTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crud', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nama', 50);
			$table->string('email', 25);
			$table->date('tanggalLahir');
			$table->text('alamat', 65535);
			$table->text('filename', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crud');
	}

}
