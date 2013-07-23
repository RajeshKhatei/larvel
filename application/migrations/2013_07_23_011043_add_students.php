<?php

class Add_Students {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('students')->insert(array(
			'name'=>'ABC DEF GHI',
			'phone'=>'1234567890',
			'city'=>'xyz',
			'branch'=>'IT',
			'professor'=>'mkjds dfssa',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
			'name'=>'LOMNHJ HJBSDJS',
			'phone'=>'9836567233',
			'city'=>'oidsds',
			'branch'=>'CSE',
			'professor'=>'hjfskjfds dfs',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('students')->insert(array(
			'name'=>'dbkhfs sfesn',
			'phone'=>'9988776655',
			'city'=>'dpodfe',
			'branch'=>'EEE',
			'professor'=>'sfes eerek',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('students')->delete(1);
		DB::table('students')->delete(2);
		DB::table('students')->delete(3);
	}

}
