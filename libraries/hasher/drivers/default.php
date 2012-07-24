<?php

/**
 * Part of the Septu Auth Bundle
 * 
 * @package   Septu
 * @license   MIT License
 * @author    Daniel Berry <daniel@danielberry.me>
 * @copyright 2012 - Daniel Berry
 */

namespace Septu\Libraries\Hasher\Drivers;

use Hash;

/**
 * Septu Hash Strategy
 * Uses the Bcrypt method found at https://gist.github.com/1053158
 */

class Default extends \Septu\Libraries\Hasher\Hasher
{
	public function __construct($options = array())
	{
		if (!empty($options) and is_array($options))
		{
			$this->options = $options;
		}
	}

	/**
	 * Creates a random salt and hashes the given password with the salt.
	 * String returned is prepended with a 16 character alpha-numeric salt.
	 *
	 * @param   string  Password to generate hash/salt for
	 * @return  string
	 */
 	public function create($password)
	{
		return Hash::make($password, $this->options['rounds']);
	}


 	/**
 	 * Check to make sure our passwords match
 	 * 
 	 * @param  string $password         password to test
 	 * @param  string $hashed_password  stored hashed password
 	 * @return bool                     true/false
 	 */
 	public function check($password, $hashed_password)
 	{
 		return Hash::check($password, $hashed_password);
 	}
}
