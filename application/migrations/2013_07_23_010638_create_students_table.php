<?php

class Create_Students_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function($table){
			$table->increments('id');
			$table->string('name');
			$table->bigint('phone');
			$table->text('city');
			$table->text('branch');
			$table->text('professor');
			$table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}
}
