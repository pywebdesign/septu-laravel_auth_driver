<?php

/**
 * Part of the Guardian Auth Bundle
 * 
 * @package   Guardian
 * @license   MIT License
 * @author    Daniel Berry <daniel@danielberry.me>
 * @copyright 2012 - Daniel Berry
 */

namespace Septu\Libraries\Hasher\Drivers;

/**
 * Sha256 Hash Strategy
 * Uses the Bcrypt method found at https://gist.github.com/1053158
 */

class Sha extends Hasher
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
	 *
	 * @param   string  Password to generate hash/salt for
	 * @return  string
	 */
 	public function create($password)
	{
		$salt = Str::random(20);

		return $salt.$this->hash($password, $salt);
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
 		// grabs the salt from the current password
		$salt = substr($hashed_password, 0, 20);

		// hash the inputted password
		$password = $salt.$this->hash($password, $salt);

		// check to see if passwords match
		return $password == $hashed_password;
 	}


 	/**
 	 * Hash the given password
 	 * 
 	 * @param  string $password    password provided
 	 * @param  int $work_factor    work factor for hashing
 	 * @return string              hashed password
 	 */
 	protected function hash($password, $salt)
 	{
 		return hash($this->options['type'], $salt.$password);
 	}
}
