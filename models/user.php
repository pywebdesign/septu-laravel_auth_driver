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

namespace Septu\Models;

use Septu\SeptuException;
use Septu\Libraries\Hasher\Hasher;
use Config;
use Str;
use Auth;
use Request;

/**
 * Septu User Model
 */
class User extends \Eloquent
{
    /**
     * @var  string  sets the table name
     */
    public static $table = 'auth_users'; 
	
	/**
	 *  Profile Table
	 *  @var string
	 */
	protected static $_table_profiles = '';

	/**
	 * Holds the current user
	 * @var string
	 */
	protected static $_user = '';

	/**
	 * Holds the current user's combined permissions
	 * @var string
	 */
	public static $_permissions = array();


	public static function make($identifier = '')
	{
		if ( ! empty($identifier))
		{
			// get the identifier type being used
			$identifier_field = static::_identifier_type($identifier);

			// let's try to find the use by using their identifier
			$user = static::where($identifier_field, '=', $identifier)->first();

			if ($user)
			{
				static::$_user = $user;
			}
			else
			{
				throw new SeptuException(__('septu::septu.user_does_not_exist'));
			}

			// fecth & save the user's permissions
			static::$_permissions = static::_fetch_permissions();

			// return the user object
			return $user;
		}

		// die('here looks like identifier is empty');

		return new self();
	}

	/********************************************************************************
	 * Setup Relationships
	 * *****************************************************************************/

    /**
     * Profile Relationship
     * @return SeptuProfile
     */
    public function profile()
    {
        return $this->has_one('SeptuProfile');
    }

    /**
     * Profile Relationship
     * @return SeptuProfile
     */
    public function logins()
    {
        return $this->has_many('SeptuLogins');
    }

    /**
	 * Setup group relationship - has many and belongs to
	 * 
	 * @return Group Eloquent Object
	 */
	public function group()
    {
        return $this->has_many_and_belongs_to('SeptuGroup', Config::get('septu::septu.table.group_user'));
    }

    /**
	 * Setup group relationship - has many and belongs to
	 * 
	 * @return Group Eloquent Object
	 */
	public function permissions()
    {
        return $this->has_many_and_belongs_to('SeptuPermission', Config::get('septu::septu.table.permissions_user'))->with(array('deny'));
    }


    /********************************************************************************
	 * CRUD Stuff :)
	 * *****************************************************************************/

    /**
     * Create a new user
     * @param  [type] $attributes [description]
     * @return [type]             [description]
     */
    public static function create($attributes)
    {
    	if (empty($attributes))
    	{
    		throw new SeptuException(__('septu::septu.no_data_provided'));
    	}

    	// email and password are required to create accounts
		if (empty($attributes['email']) or empty($attributes['password']))
		{
			// static::$create_errors[] = __('septu::septu.email_and_username_empty');
			throw new SeptuException(__('septu::septu.email_password_required'));
		}

		// make sure email is unique
		if ( ! empty($attributes['email']) and ! static::_unique_value($attributes['email'], 'email', static::$table))
		{
			// static::$create_errors[] = __('septu::septu.email_exists');
			throw new SeptuException(__('septu::septu.email_exists', array('field', $attributes['email'])));
		}

		// make sure username is unique
		if (!empty($attributes['username']) and ! static::_unique_value($attributes['username'], 'username', static::$table))
		{
			// static::$create_errors[] = __('septu::septu.username_exists');
			throw new SeptuException(__('septu::septu.username_exists', array('field', $attributes['username'])));
		}

		// set the activation
		if (empty($attributes['activate']))
		{
			$attributes['activate'] = Config::get('septu::septu.require_activation');					
		}

		// set the activation
		if (empty($attributes['enabled']))
		{
			$attributes['enabled'] = Config::get('septu::septu.default_enabled');					
		}

		// create the array containing the new user details
		$new_user = array(
			'username'   => ( ! empty($attributes['username'])) ? strtolower(trim($attributes['username'])) : null,
			'email'	     => strtolower(trim($attributes['email'])),
			'password'   => $attributes['password'],
			'activated'  => ($attributes['activate']) ? false : true,
			'enabled'     => ($attributes['enabled']) ? true : false,
		);

		if ($attributes['activate'])
		{
			$new_user['activation_hash'] = Str::random(18);
		}

		// insert the new user
		$user = new self($new_user);
		$user->save();

		// check for profile information
		if (array_key_exists('profile', $attributes))
		{
			$new_profile = new Profile($attributes['profile']);
			$user->profile()->insert($new_profile);
		}

		// this is the array we will pass back if successful
		$user_array = array(
			'id' 			  => $user->id,
		);

		if ( ! empty($new_user['activation_hash']))
		{
			$user_array['activation_hash'] = (($new_user['activation_hash'])) ? $new_user['activation_hash'] : null;
		}

		/**
		 * return the user object if successful, return false if not
		 */
		return (is_array($user_array)) ? $user_array : false;
    }

    /**
	 * Update a model instance in the database.
	 *
	 * @param  mixed  $id
	 * @param  array  $attributes
	 * @return int
	 */
	public static function update_user($attributes)
	{
		// make sure we have a user selected
		if ( ! static::$_user)
		{
			throw new SeptuUserException(__('septu::septu.user_does_not_exist'));
		}

		// update the email address
		if (array_key_exists('email', $attributes))
		{
			if (empty($attributes['email']))
			{
				throw new SeptuException(__('septu::septu.field_email_empty'));
			}

			if ($attributes['email'] != static::$_user->email and ! static::_unique_value($fields['email'], 'email', static::$_table_users))
			{
				throw new SeptuException(__('septu::septu.email_exists'));
			}
			
			static::$_user->email = trim($attributes['email']);

			// unset the email field since we no longer need it
			unset($attributes['email']);
		}

		// update the username
		if (array_key_exists('username', $attributes))
		{
			if (empty($fields['username']))
			{
				throw new SeptuException(__('septu::septu.field_username_empty'));
			}

			if ($attributes['username'] != static::$_user->username and ! static::_unique_value($attributes['username'], 'username', static::$_table_users))
			{
				throw new SeptuException(__('septu::septu.username_exists'));
			}
			
			static::$_user->username = trim($attributes['username']);

			// unset the username field since we no longer need it
			unset($attributes['username']);
		}

		// update the password
		if (array_key_exists('password', $attributes))
		{
			if (empty($attributes['password']))
			{
				throw new SeptuException(__('septu::septu.field_password_empty'));
			}

			static::$_user->password = $attributes['password'];

			// unset the password field since we no longer need it
			unset($attributes['password']);
		}

		// update the last_login
		if (array_key_exists('last_login', $attributes) and is_int($attributes['last_login']))
		{
			static::$_user->last_login = $attributes['last_login'];

			// unset the password field since we no longer need it
			unset($attributes['last_login']);
		}

		// update the last ip address
		if (array_key_exists('ip_address', $attributes) and ! empty($attributes['ip_address']))
		{
			static::$_user->ip_address = $attributes['ip_address'];

			// unset the password field since we no longer need it
			unset($attributes['ip_address']);
		}

		// update activated
		if (array_key_exists('activated', $attributes) and is_int($attributes['activated']))
		{
			static::$_user->activated = $attributes['activated'];

			// unset the activated field since we no longer need it
			unset($attributes['activated']);
		}

		// activation hash
		if (array_key_exists('activation_hash', $attributes))
		{
			static::$_user->activation_hash = $attributes['activation_hash'];

			// unset the activation hash field since we no longer need it.
			unset($attributes['activation_hash']);
		}

		// password reset hash
		if (array_key_exists('password_reset_hash', $attributes))
		{
			static::$_user->password_reset_hash = $attributes['password_reset_hash'];
			
			// unset the remember me hash field since we no longer need it.
			unset($attributes['password_reset_hash']);
		}

		// update the user's status
		if (array_key_exists('enabled', $attributes))
		{
			static::$_user->enabled = $attributes['enabled'];
			
			// unset the status field since we no longer need it.
			unset($attributes['enabled']);
		}

		// update the user's
		static::$_user->save();

		// now let's do the profile information
		if ( ! empty($fields['profile']))
		{
			foreach ($fields['profile'] as $field=>$value)
			{
				static::$_user->profile->$field = $value;
			}

			static::$_user->profile->save();

			unset($fields['profile']);
		}

		return true;
	}

	/********************************************************************************
	 * Activate & Enable/Disable
	 * *****************************************************************************/

    /**
     * Activate a User's Account
     * 
     * @param  mixed   $identifier        activation code
     * @param  string  $activation_code  user supplied activation code
     * 
     * @return boolean
     */
    public function activate($activation_code)
	{
		// make sure the user is logged out
		Auth::logout();

		// make sure the activation hash matchers
		if ((static::$_user) and $this->_hasher()->check($activation_code, static::$_user->activation_hash))
		{
			$attributes = array(
				'activation_hash' => '',
				'activated'       => 1
			);

			if (static::update_user($attributes))
			{
				return true;
			}
		}

		return false;
	}

	/**
     * Disable User's Account
     * 
     * @return boolean
     */
    public function disable()
	{
		// make sure the activation hash matchers
		if ((static::$_user))
		{
			$attributes = array(
				'enabled' => false
			);

			if (static::update_user($attributes))
			{
				return true;
			}
		}

		return false;
	}

	/**
     * Enable User's Account
     * 
     * @return boolean
     */
    public function enable()
	{
		// make sure the activation hash matchers
		if ((static::$_user))
		{
			$attributes = array(
				'enabled' => 1
			);

			if (static::update_user($attributes))
			{
				return true;
			}
		}

		return false;
	}


	/********************************************************************************
	 * Password Reset
	 * *****************************************************************************/

	/**
	 * Reset user's password
	 * 
	 * @param  string  $identifier  user's email, id or username
	 * @return boolean
	 */
	public function reset_password()
	{
		// make sure the user is logged out
		Auth::logout();

		// if we don't have a user, then let's get one!
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.user_does_not_exist'));
		}

		// create a random string to use for hash
		$reset_hash = Str::random(18);

		// create the update array
		$update = array(
			'password_reset_hash' => $reset_hash,
		);

		if ($this->update_user($update))
		{
			// create array to send back to on successful update
			$results = array(
				'password_reset_hash' => $reset_hash,
				'email'               => static::$_user->email,
			);

			return $results;
		}

		return false;
	}


	/**
	 * Reset user's password
	 * 
	 * @param  string  $identifier  user's email, id or username
	 * @return boolean
	 */
	public function reset_password_confirm($hash_code, $new_password)
	{
		// make sure the user is logged out
		Auth::logout();

		// if we don't have a user, then let's get one!
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.user_does_not_exist'));
		}

		// check the user's hash
		if ($this->_hasher()->check($hash_code, static::$_user->password_reset_hash))
		{
			// create the update array
			$update = array(
				'password_reset_hash' => '',
				'password'            => $new_password
			);

			if ($this->update_user($update))
			{
				return true;
			}
		}
		else
		{
			throw new SeptuException('septu::septu.password_reset_hash_invalid');
		}

		return false;
	}


	 /****************************************************************************************************
	 * GROUP METHODS
	 * *************************************************************************************************/

	 /**
	 * Adds a user to a group
	 * 
	 * @param integer  $group_id  id of the group
	 *
	 * @return boolean
	 */
	public function add_to_group($group_id)
	{

		// make sure a user has been selected.
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.user_does_not_exist'));
		}

		// make sure we have a group id
		if (empty($group_id))
		{
			throw new SeptuException(__('septu::septu.field_empty', array('Group Id')));
		}

		// check to see if the user is already in the group
		if ( $this->in_group($group_id))
		{
			// there is no need to kill it here, so just return true.
			return true;
		}

		return static::$_user->group()->attach($group_id);
	}

	public function remove_from_group($group_id)
	{
		// make sure a user has been selected.
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.user_does_not_exist'));
		}

		// make sure we have a group id
		if (empty($group_id))
		{
			throw new SeptuException(__('septu::septu.field_empty', array('Group Id')));
		}

		// check to see if the user is actually in the group
		if ( ! $this->in_group($group_id))
		{
			// there is no need to kill it here, so just return true.
			return true;
		}

		// $query =  static::find(static::$_user->id)->group()->where('id'get();
		$query = $this->group()->pivot()->where_user_id(static::$_user->id)->where_group_id($group_id)->delete();

		if ($query)
		{
			return true;
		}

		return false; 
	}

	/**
	 * Check to see if a user is in a group
	 * 
	 * @param  integer  $group_id  id of the group
	 * 
	 * @return boolean
	 */
	public function in_group($group_id)
	{
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.user_does_not_exist'));
		}

		if (empty($group_id))
		{
			throw new SeptuException(__('septu::septu.field_empty', array('Group Id')));
		}

		// $query =  static::find(static::$_user->id)->group()->where('id'get();
		$query = $this->group()->where_user_id(static::$_user->id)->where_group_id($group_id)->first();

		if ($query and $query->count() > 0)
		{
			return true;
		}

		return false;
	}


	/****************************************************************************************************
	 * PERMISSIONS
	 * *************************************************************************************************/

	protected static function _fetch_permissions()
	{
		// make sure a user has been selected.
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.no_user_selected'));
		}

		// holds the permissions
		$permissions = array();
		
		/**
		 * First Get all of the Groups Permissions
		 */
		// get all groups
		$groups = static::$_user->group()->get();


		// loop through all of the groups
		foreach($groups as $group)
		{
			$group_permissions = $group->permissions()->get();

			foreach ($group_permissions as $val)
			{
				if ( ! in_array($val->resource, $permissions))
				{
					$permissions[] = $val->resource;
				}
			}
		}

		// now let's get all of the user's special permissions
		$user_permissions = static::$_user->permissions()->get();

		if ($user_permissions)
		{
			foreach ($user_permissions as $val)
			{
				if ( ! in_array($val->resource, $permissions) and $val->pivot->deny != 1)
				{
					$permissions[] = $val->resource;
				}
				elseif ($val->pivot->deny == 1)
				{
					$permissions = array_diff($permissions, array($val->resource));
				}
			}
		}

		return $permissions;
	}

	public static function view_permissions()
	{
		return static::$_permissions;
	}

	/**
	 * Adds a user to a group
	 * 
	 * @param integer  $group_id  id of the group
	 *
	 * @return boolean
	 */
	public function add_permission($permission_id, $deny = false)
	{

		// make sure a user has been selected.
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.no_user_selected'));
		}

		// make sure we have a group id
		if (empty($permission_id))
		{
			throw new SeptuException(__('septu::septu.field_empty', array('Permissions Id')));
		}

		// check to see if the user is already in the group
		if ( $this->has_permission($permission_id))
		{
			// there is no need to kill it here, so just return true.
			return true;
		}

		$attributes = array(
			'deny'          => $deny,
		);

		return static::$_user->permissions()->attach($permission_id, $attributes);
	}

	public function remove_permission($permission_id)
	{
		// make sure a user has been selected.
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.no_user_selected'));
		}

		// make sure we have a group id
		if (empty($permission_id))
		{
			throw new SeptuException(__('septu::septu.field_empty', array('Group Id')));
		}

		// check to see if the user is actually in the group
		if ( ! $this->has_permission($permission_id))
		{
			// there is no need to kill it here, so just return true.
			return true;
		}

		// $query =  static::find(static::$_user->id)->group()->where('id'get();
		$query = $this->permissions()->pivot()->where_user_id(static::$_user->id)->where_permission_id($permission_id)->delete();

		if ($query)
		{
			return true;
		}

		return false; 
	}

	/**
	 * Check to see if a user has a permission
	 * 
	 * @param  integer  $permission_id  id of the group
	 * 
	 * @return boolean
	 */
	public function has_permission($permission_id)
	{
		if ( ! static::$_user)
		{
			throw new SeptuException(__('septu::septu.no_user_selected'));
		}

		if (empty($permission_id))
		{
			throw new SeptuException(__('septu::septu.field_empty', array('Permission Id')));
		}

		// $query =  static::find(static::$_user->id)->group()->where('id'get();
		$query = $this->permissions()->where_user_id(static::$_user->id)->where_permission_id($permission_id)->first();

		if ($query and $query->count() > 0)
		{
			return true;
		}

		return false;
	}

	/**
	 * Check to see if the user has access to a resource
	 *
	 * The user can specify a specific resource. If no resource is provided,
	 * then Sentry will generate the resource automatically. If the resource
	 * is found in the configured rules provided in the config file then the
	 * user's current merged permissions array will be checked.
	 *
	 * @param   null $resource
	 * @return  bool
	 */
	public function has_access($resource = null)
	{
		/**
		 * If we have a super user (this is the global administrator,
		 * than just return true and skip checks
		 */
		if (in_array(Config::get('septu::septu.permissions.superuser'), $this->permissions))
		{
			return true;
		}

		if (empty(static::$_permissions))
		{
			return false;
		}

		/**
		 * Get the current page in our rule format
		 * We'll use this if there is no $resource set and to check our array against.
		 */
		$bundle     = Request::route()->bundle;
		$controller = Request::route()->controller;
		$action     = Request::route()->controller_action;

		// build this resource string
		$current_resource = $bundle;
		if ($controller)
		{
			$current_resource .= '::'.$controller;

			if ($action)
			{
				$current_resource .= '@'.$action;
			}
		}

		// lets make the resource an array by default
		$resource = ($resource) ?: $current_resource;

		if ( ! is_array($resource))
		{
			$resource = array($resource);
		}

		// Loop through the resources and check if it exists in the rules/permissions
		foreach ($resource as $rule)
		{
			// if it is in the config rules & not in the array rules, than we don't have access.
			if (! in_array($rule, static::$_permissions))
			{
				return false;
			}
		}

		return true;
	}


	/****************************************************************************************************
	 * HELPER METHODS
	 * *************************************************************************************************/

    /**
	 * Check for a unique value
	 * 
	 * @param  string $value value to search for
	 * @param  string $field field to search
	 * @param  string $table table to search in
	 * @return bool          returns true if it exsits, false if not exists
	 */
	protected static function _unique_value($value, $field, $table)
	{
		$query = self::where($field, '=', $value);

		return $query->count() == 0;
	}

	/**
	 * Creates an instance of the Hash Driver
	 * @return Hasher
	 */
	protected static function _hasher()
	{
		return Hasher::_init(Config::get('septu::septu.hasher.use'));
	}

	/**
	 * decide what type of user identifier we are working with
	 * @param  mixed   $identifier either the user id, email address or username
	 * @return string  type of identifier
	 */
	protected static function _identifier_type($identifier)
	{
		if (filter_var($identifier, FILTER_VALIDATE_INT) !== false)
		{
			return 'id';
		}
		elseif (filter_var($identifier, FILTER_VALIDATE_EMAIL) !== false)
		{
			return 'email';
		}
		else
		{
			return Config::get('septu::septu.username.field', 'username');
		}
	}

	/****************************************************************************************************
	 * SETTER METHODS
	 * *************************************************************************************************/

	/**
	 *  Setter Method for Password
	 *  
	 *  @param string $password
	 */
	public function set_password($password)
	{
	    // check for common password
	    $allow_common = Config::get('septu::septu.password.allow_common');
	    $common_passwords = Config::get('septu::septu.password.common_passwords');
	    
	    if (! $allow_common and in_array($password, $common_passwords))
	    {
	    	throw new SeptuException(__('septu::septu.common_password'));
	    }

	    // check minimum length
	    $min_length = Config::get('septu::septu.password.min_length');
	    $max_length = Config::get('septu::septu.password.max_length');
	    $password_length = strlen($password);

	    if ($password_length < $min_length or $password_length > $max_length)
	    {
	    	throw new SeptuException(__('septu::septu.password_length', array('min' => $min_length, 'max' => $max_length)));
	    }

	    $this->set_attribute('password', $this->_hasher()->create($password));
	}

	/**
	 *  Setter Method for Username
	 *  
	 *  @param string $username
	 */
	public function set_username($username)
	{
	    // check minimum length
	    $min_length = Config::get('septu::septu.username.min_length');
	    $max_length = Config::get('septu::septu.username.max_length');
	    $username_length = strlen($username);

	    if ($username_length < $min_length or $username_length > $max_length)
	    {
	    	throw new SeptuException(__('septu::septu.username_length', array('min' => $min_length, 'max' => $max_length)));
	    }

	    $this->set_attribute('username', $this->_hasher()->create($username));
	}

	/**
	 *  Setter Method for Activation Hash
	 *  
	 *  @param string $password
	 */
	public function set_activation_hash($activation_hash)
	{
	    if ( ! empty($activation_hash))
	    {
	    	$activation_hash = $this->_hasher()->create($activation_hash);
	    }

	    $this->set_attribute('activation_hash', $activation_hash);
	}

	/**
	 *  Setter Method for Activation Hash
	 *  
	 *  @param string $password
	 */
	public function set_password_reset_hash($password_reset_hash)
	{
	    if ( ! empty($password_reset_hash))
	    {
	    	$password_reset_hash = $this->_hasher()->create($password_reset_hash);
	    }

	    $this->set_attribute('password_reset_hash', $password_reset_hash);
	}
}