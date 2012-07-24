<?php

return array(
	/**
	 *  General Errors
	 */
	'field_empty' 			   => 'Oops, you forgot to specify a(n) :field_name!',

	/**
	 * Users
	 */
	'no_data_provided'            => 'Oops, it looks like you forgot to provide data.',
	'email_password_required'     => 'An email and password are required to create or update an account.',
	'email_exists'            	  => 'Email address already exists.',
	'username_exists'         	  => 'Username already exists.',
	'attempt_invalid_user'    	  => 'Sorry, we could not find your account. Please try again.',
	'attempt_bad_password'    	  => 'Sorry, the username/password combination you entered was incorrect!',
	'account_not_activated'       => 'You must activate your account to continue',
	'user_does_not_exist'         => 'Oops, we could not find the user you requested.',
	'password_reset_hash_invalid' => 'Oops, we could not verify your reset code.',
	'account_disabled'            => 'Your account is currently disabled. Please see your system administrator.',
	'common_password'			  => 'Please choose a more difficult password.',
	'password_length'             => 'Your password must be between :min and :max characters.',

	/**
	 * Groups
	 */
	'no_group_selected'		 	   => 'Sorry, no group has been selected',
	'no_group_data_provided' 	   => 'Oops, you forgot to add new group information. At a minimum, group name is required.',
	'parent_group_does_not_exist'  => 'The parent group you specified does not exist.',
	'group_does_not_exist' 		   => 'The group does not exist.',
	'group_already_exists'   	   => 'The group already exists.',

	/**
	 * Permissions
	 */
	'no_permission_selected'		   => 'Sorry, no permission has been selected',
	'no_permission_resource_provided'  => 'Oops, you forgot to provide a resource.',
	'permission_does_not_exist' 	   => 'The permission does not exist.',
	'permission_already_exists'   	   => 'The permission already exists.',

);