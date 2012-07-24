<?php

/**
 * Part of the Septu Auth Bundle
 * 
 * @package   Septu
 * @license   MIT License
 * @author    Daniel Berry <daniel@danielberry.me>
 * @copyright 2012 - Daniel Berry
 */

namespace Septu\Libraries\Hasher;

use Config;
use Septu\SeptuException;

/**
 * Septu Hash Driver
 */
abstract class Hasher
{
	public static function _init($strategy)
	{
		$strategy_file = path('bundle').'septu/libraries/hasher/drivers/'.$strategy.'.php';

		if (!file_exists($strategy_file))
		{
			throw new SeptuException(__('septu::septu.hash_strategy_no_exist ('.$strategy.')'));
		}

		// require the hashing class
		require_once($strategy_file);

		// fetch options for this strategy
		$options = Config::get('septu::septu.hasher.drivers.'.strtolower($strategy));

		// return a new instance of the hashing class
		$class = '\Septu\Libraries\Hasher\Drivers\\'.$strategy;

		return new $class($options);
	}

	// required constructor for passing options
	abstract public function __construct($options);

 	// creates the password
 	abstract public function create($password);

 	// checks the password
 	abstract public function check($password, $hashed_password);
}
