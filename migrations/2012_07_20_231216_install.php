<?php

/**
 * Septu - Auth Drivcer Bundle for Laravel 
 *                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           * @package    Septu
 * @author     Daniel Berry <daniel@danielberry.me>
 * @version    1.0
 * @license    http://mit-license.org/ MIT License  
 * @link       https://github.com/dberry37388/septu-admin                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      xcccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
 *
 * HUGE thank you to Taylor Otwell and the rest of the Userscape/Laravel team for
 * creating this awesome framework (Laravel).
 *
 * Also HUGE thanks to Dayle Rees, whose book "Code Happy" got me through some long
 * nights! http://codehappy.daylerees.com/
 * 
 */


/**
 * Migrations Script
 */
class Septu_Install {

	/**
	 * Class Constructor
	 *
	 * Here we are just setting up some vars that we will use throughout, so that we can be lazy and not have
	 * to keep typing the same thing over and over.
	 */
	public function __construct()
	{
		// check to make sure the db connection exists. If not than just use the default.
		if ( ! in_array(Config::get('septu::septu.db_connection'), Config::get('database.connections')))
		{
			Config::set('septu::septu.db_connection', Config::get('db.default'));
		}
		
	}

	/**
	 * Create the Users Table.
	 *
	 * @return void
	 */
	public function up()
	{
		/**
		 * User Table
		 *
		 * Holds the user's account information
		 */
		Schema::create(Config::get('septu::septu.table.users'), function($table)
		{
		    // make sure we are creating this in the correct DB
		    $table->on(Config::get('septu::septu.db_connection'));

		    // create our fields
		    $table->increments('id');
		    $table->timestamps();
		    $table->string('username', 100); // can be null, so can't make unique
		    $table->string('email', 100)->unique();
		    $table->string('password', 150);
        	$table->string('password_reset_hash', 150);
        	$table->string('temporary_password', 150);
        	$table->string('activation_hash', 100);
        	$table->integer('last_login');
        	$table->string('ip_address', 100);
        	$table->boolean('activated');
        	$table->boolean('enabled');
		});


		//------------------------------------------------------------------------------------
		// Profiles
		// -----------------------------------------------------------------------------------

		if (Config::get('septu::septu.use.profiles'))
		{
			/**
			 * Profile Table
			 *
			 * Holds the user's profile information
			 */
			Schema::create(Config::get('septu::septu.table.profiles'), function($table)
			{
			    // make sure we are creating this in the correct DB
			    $table->on(Config::get('septu::septu.db_connection'));

			    // these are fields we have to have
			    $table->increments('id');
		    	$table->timestamps();
		    	$table->integer('user_id');

		    	// loop through the config array to add custom profile fields.
			    foreach (Config::get('septu::septu.profile_fields') as $fields)
			    {
			    	switch ($fields['type'])
			    	{
			    		case 'string':
			    			$table->string($fields['name'], $fields['length']);
			    			break;

			    		default:
			    			$type = $fields['type'];
			    			$name = $fields['name'];

			    			$table->$type($name);
			    			break;
			    	}
			    }

			    // add foreign keys
	       		$table->foreign('user_id')->references('id')
	        							  ->on(Config::get('septu::septu.table.users'))
	        							  ->on_delete('cascade')
	        							  ->on_update('cascade');
			});
		}

		//------------------------------------------------------------------------------------
		// Profiles
		// -----------------------------------------------------------------------------------

		if (Config::get('septu::septu.use.logins'))
		{
			/**
			 * Profile Table
			 *
			 * Holds the user's profile information
			 */
			Schema::create(Config::get('septu::septu.table.logins'), function($table)
			{
			    // make sure we are creating this in the correct DB
			    $table->on(Config::get('septu::septu.db_connection'));

			    // these are fields we have to have
			    $table->increments('id');
		    	$table->timestamps();
		    	$table->integer('user_id');
		    	$table->string('ip_address', 15);

		    	// add foreign keys
	        	$table->foreign('user_id')->references('id')
	        							  ->on(Config::get('septu::septu.table.users'))
	        							  ->on_delete('cascade')
	        							  ->on_update('cascade');
			});
		}


		//------------------------------------------------------------------------------------
		// Groups
		// -----------------------------------------------------------------------------------

		/**
		 * If Groups are enabled, let's create the groups tables
		 */
		if (Config::get('septu::septu.use.groups'))
		{
			/**
			 * Create the Groups Table
			 */
			Schema::create(Config::get('septu::septu.table.groups'), function($table)
			{
				$table->on(Config::get('septu::septu.db_connection'));

				$table->increments('id', 11);
				$table->timestamps();
	        	$table->string('name', 255);
	        	$table->string('description', 255);
	        	$table->integer('parent');
			});

			/**
			 * Create the group_user pivot table
			 */
			Schema::create(Config::get('septu::septu.table.group_user'), function($table)
			{
				$table->on(Config::get('septu::septu.db_connection'));
				$table->increments('id', 11);
				$table->integer('user_id');
	        	$table->integer('group_id');
	        	$table->timestamps();

	        	// add foreign keys
	        	$table->foreign('user_id')->references('id')
	        							  ->on(Config::get('septu::septu.table.users'))
	        							  ->on_delete('cascade')
	        							  ->on_update('cascade');

	        	$table->foreign('group_id')->references('id')
	        							   ->on(Config::get('septu::septu.table.groups'))
	        							   ->on_delete('cascade')
	        							   ->on_update('cascade');
			});
		}


		//------------------------------------------------------------------------------------
		// Permissions
		// -----------------------------------------------------------------------------------

		/**
		 * If Permissions are enabled, create the permissions tables.
		 */
		if (Config::get('septu::septu.use.permissions'))
		{
			/**
			 * Create the Permissions Table
			 */
			Schema::create(Config::get('septu::septu.table.permissions'), function($table)
			{
				$table->on(Config::get('septu::septu.db_connection'));
				$table->increments('id', 11);
				$table->timestamps();
	        	$table->string('resource', 255);
	        	$table->string('description', 255);
			});

			/**
			 * Create the permissions/groups pivot table
			 */
			Schema::create(Config::get('septu::septu.table.permissions_group'), function($table)
			{
				$table->on(Config::get('septu::septu.db_connection'));
				$table->increments('id', 11);
				$table->integer('permission_id');
	        	$table->integer('group_id');
	        	$table->timestamps();

	        	// add foreign keys
	        	$table->foreign('permission_id')->references('id')
	        							  ->on(Config::get('septu::septu.table.permissions'))
	        							  ->on_delete('cascade')
	        							  ->on_update('cascade');

	        	$table->foreign('group_id')->references('id')
	        							   ->on(Config::get('septu::septu.table.groups'))
	        							   ->on_delete('cascade')
	        							   ->on_update('cascade');
			});

			/**
			 * Create the users/permissions pivot table
			 */
			Schema::create(Config::get('septu::septu.table.permissions_user'), function($table)
			{
				$table->on(Config::get('septu::septu.db_connection'));
				$table->increments('id', 11);
				$table->integer('permission_id');
	        	$table->integer('user_id');
	        	$table->boolean('deny');
	        	$table->timestamps();

	        	// add foreign keys
	        	$table->foreign('permission_id')->references('id')
	        							  ->on(Config::get('septu::septu.table.permissions'))
	        							  ->on_delete('cascade')
	        							  ->on_update('cascade');

	        	$table->foreign('user_id')->references('id')
	        							   ->on(Config::get('septu::septu.table.users'))
	        							   ->on_delete('cascade')
	        							   ->on_update('cascade');
			});
		}
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop tables
		Schema::drop(Config::get('septu::septu.table.profiles'), Config::get('septu::septu.db_connection'));
		Schema::drop(Config::get('septu::septu.table.group_user'), Config::get('septu::septu.db_connection'));
		Schema::drop(Config::get('septu::septu.table.permissions_group'), Config::get('septu::septu.db_connection'));
		Schema::drop(Config::get('septu::septu.table.permissions_user'), Config::get('septu::septu.db_connection'));
		Schema::drop(Config::get('septu::septu.table.logins'), Config::get('septu::septu.db_connection'));
		Schema::drop(Config::get('septu::septu.table.permissions'), Config::get('septu::septu.db_connection'));
		Schema::drop(Config::get('septu::septu.table.groups'), Config::get('septu::septu.db_connection'));
		Schema::drop(Config::get('septu::septu.table.users'), Config::get('septu::septu.db_connection'));
	}
}