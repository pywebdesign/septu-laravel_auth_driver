<?php

/**
 * Septu Auth Driver Bundle
 *
 * Septu is a simple to implement Auth Driver bundle for the Laravel auth system.
 * Current features include authentication, profiles, groups and group/user based
 * permissions.
 *
 * PHP 5.3+
 * Laravel 3.2+
 *
 * Copyright (c) 2012 Daniel Berry
 * 
 * LICENSE: This program is free software; you can redistribute it and/or modify 
 * it under the terms of the GNU General Public License as published by the Free 
 * Software Foundation; either version 2 of the License, or (at your option) any 
 * later version. If you did not receive a copy of the General Public License and 
 * are unable to obtain it through the web, please write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 * 
 * @package    Septu
 * @author     Daniel Berry <daniel@danielberry.me>
 * @copyright  2012, Daniel Berry
 * @license    http://mit-license.org/ MIT License  
 * @version    1.0
 * @link       https://github.com/dberry37388/septu-admin                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 xcccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
 *
 * HUGE thank you to Taylor Otwell and the rest of the Userscape/Laravel team for
 * creating this awesome framework (Laravel).
 *
 * Also HUGE thanks to Dayle Rees, whose book "Code Happy" got me through some long
 * nights!
 * 
 */


/**
 * Configuration File
 */
return array(

	/*
	|--------------------------------------------------------------------------
	| Database Connection
	|--------------------------------------------------------------------------
	|
	| Here you may specify the database connection that should be used. If this
	| is left blank, your default database connection will be used.
	|
	*/

	'db_connection' => '',

	/*
	|--------------------------------------------------------------------------
	| Authentication Username
	|--------------------------------------------------------------------------
	|
	| Here you may specify the database column that should be considered the
	| "username" for your users. Typically, this will either be "username"
	| or "email". Of course, you're free to change the value to anything.
	|
	*/

	'username' => array(
		'field'        => 'username',
		'min_length'   => 8,
		'max_length'   => 32,
	), 

	/*
	|--------------------------------------------------------------------------
	| Authentication Password
	|--------------------------------------------------------------------------
	|
	| Here you may specify the database column that should be considered the
	| "password" for your users. Typically, this will be "password" but, 
	| again, you're free to change the value to anything you see fit.
	|
	*/

	'password' => array(
		'field'            => 'password',
		'min_length'       => 8,
		'max_length'   	   => 32,
		'allow_common'     => false,
		'common_passwords' => array('111111','11111111','112233','121212','123123','123456','1234567','12345678','131313','232323','654321','666666','696969','777777','7777777','8675309','987654','aaaaaa','abc123','abc123','abcdef',
									'abgrtyu','access','access14','action','albert','alexis','amanda','amateur','andrea','andrew','angela','angels','animal','anthony','apollo','apples','arsenal','arthur','asdfgh','asdfgh','ashley',
									'august','austin','badboy','bailey','banana','barney','baseball','batman','beaver','beavis','bigdaddy','bigdog','birdie','bitches','biteme','blazer','blonde','blondes','bond007','bonnie','booboo',
									'booger','boomer','boston','brandon','brandy','braves','brazil','bronco','broncos','bulldog','buster','butter','butthead','calvin','camaro','cameron','canada','captain','carlos','carter','casper',
									'charles','charlie','cheese','chelsea','chester','chicago','chicken','cocacola','coffee','college','compaq','computer','cookie','cooper','corvette','cowboy','cowboys','crystal','dakota','dallas',
									'daniel','danielle','debbie','dennis','diablo','diamond','doctor','doggie','dolphin','dolphins','donald','dragon','dreams','driver','eagle1','eagles','edward','einstein','erotic','extreme','falcon',
									'fender','ferrari','firebird','fishing','florida','flower','flyers','football','forever','freddy','freedom','gandalf','gateway','gators','gemini','george','giants','ginger','golden','golfer','gordon',
									'gregory','guitar','gunner','hammer','hannah','hardcore','harley','heather','helpme','hockey','hooters','horney','hotdog','hunter','hunting','iceman','iloveyou','internet','iwantu','jackie','jackson',
									'jaguar','jasmine','jasper','jennifer','jeremy','jessica','johnny','johnson','jordan','joseph','joshua','junior','justin','killer','knight','ladies','lakers','lauren','leather','legend','letmein',
									'little','london','lovers','maddog','madison','maggie','magnum','marine','marlboro','martin','marvin','master','matrix','matthew','maverick','maxwell','melissa','member','mercedes','merlin','michael',
									'michelle','mickey','midnight','miller','mistress','monica','monkey','monkey','monster','morgan','mother','mountain','muffin','murphy','mustang','naked','nascar','nathan','naughty','ncc1701','newyork',
									'nicholas','nicole','nipple','nipples','oliver','orange','packers','panther','panties','parker','password','password','password1','password12','password123','patrick','peaches','peanut','pepper',
									'phantom','phoenix','player','please','pookie','porsche','prince','princess','private','purple','pussies','qazwsx','qwerty','qwertyui','rabbit','rachel','racing','raiders','rainbow','ranger','rangers',
									'rebecca','redskins','redsox','redwings','richard','robert','rocket','rosebud','runner','rush2112','russia','samantha','sammy','samson','sandra','saturn','scooby','scooter','scorpio','scorpion','secret',
									'sexsex','shadow','shannon','shaved','sierra','silver','skippy','slayer','smokey','snoopy','soccer','sophie','spanky','sparky','spider','squirt','srinivas','startrek','starwars','steelers','steven',
									'sticky','stupid','success','summer','sunshine','superman','surfer','swimming','sydney','taylor','tennis','teresa','tester','testing','theman','thomas','thunder','thx1138','tiffany','tigers','tigger',
									'tomcat','topgun','toyota','travis','trouble','trustno1','tucker','turtle','twitter','united','vagina','victor','victoria','viking','voodoo','voyager','walter','warrior','welcome','whatever','william',
									'willie','wilson','winner','winston','winter','wizard','xavier','xxxxxx','xxxxxxxx','yamaha','yankee','yankees','yellow','zxcvbn','zxcvbnm','zzzzzz')
	), 

	/*
	|--------------------------------------------------------------------------
	| Table Names
	|--------------------------------------------------------------------------
	|
	| Here you may specify the names of the individual tables.
	|
	*/

	'table' => array(
		'users'   			 => 'auth_users',
		'logins'             => 'auth_logins',
		'profiles' 			 => 'auth_profiles',
		'groups'   			 => 'auth_groups',
		'group_user' 		 => 'auth_group_user',
		'permissions'	     => 'auth_permissions',
		'permissions_user'   => 'auth_permission_user',
		'permissions_group'  => 'auth_permission_group',
	),

	/*
	|--------------------------------------------------------------------------
	| Models to Use
	|--------------------------------------------------------------------------
	|
	| Here you may specify what models you want to use.  Enabling these will
	| create the necessary tables when the migration runs.
	|
	*/

	'use' => array(
		'logins'      => true, // store user logins in a table
		'profiles'    => true, // use profiles
		'groups'      => true, // use groups
		'permissions' => true  // use permissions
	),

	/*
	|--------------------------------------------------------------------------
	| Permissions Options
	|--------------------------------------------------------------------------
	|
	| Specify options for the permissions feature.
	|
	*/

	'permissions' => array(
		'superuser' => 'superuser' // define rule for super user access.
	),

	/*
	|--------------------------------------------------------------------------
	| Activation Required
	|--------------------------------------------------------------------------
	|
	| Here you may specify whether or not you want to require the user to activate
	| their account before they are able to log in.
	|
	*/

	'require_activation' => false,

	/*
	|--------------------------------------------------------------------------
	| Default Login Status
	|--------------------------------------------------------------------------
	|
	| If set to 0, the user's account login will be disabled.
	|
	*/
	'default_enabled' =>  true,


	/*
	|--------------------------------------------------------------------------
	| CUstom Profile Fields
	|--------------------------------------------------------------------------
	|
	| Here you may specify your own custom profile fields.  Field types must
	| match the Schema types found here http://admin.dev/docs/database/schema#adding-columns
	| 
	| FORMAT:
	| =======
	|
	| array(
	|  'name' => 'the name of the field',
	|  'type' => 'type of field, use the Schema Builder types.',
	|  'length' => 'Used for the String type. Can be left blank for the other types.'
	| )
	|
	*/

	'profile_fields' => array(
		array('name' => 'first_name', 'type' => 'string', 'length' => 100),
		array('name' => 'last_name', 'type' => 'string', 'length' => 100),
		array('name' => 'description', 'type' => 'text')
	),


	/*
	|--------------------------------------------------------------------------
	| Hashing Library
	|--------------------------------------------------------------------------
	|
	| Septu Hashing library allows you to choose from the existing hash schemes or
	| your own custom hashing driver used for pasword hashing, activation codes, etc.
	| 
	| Browse through Septu/Libraries/Hasher to view the different available driver,
	| and for instructions on creating your own driver.
	|
	*/
	'hasher' => array(
		
		/**
		 * The hashing strategy you want to use.
		 * 
		 * This should be defined below with any options required
		 * by the hashing strategy.
		 */
		'use' => 'septu',

		/**
		 * Define your drivers below.
		 *
		 * The name below should match the class name of the driver.
		 * Please see the provided drivers as an example.
		 */
		'drivers' => array(

			/**
			 * options for the Septu default strategy.
			 */
			'septu' => array(
				'rounds' => 4
			),

			/**
			 * options for the SHA strategy
			 */
			'sha' => array(
				'type' => 'sha512' // sha256 or sha512
			)
		)
	)

);