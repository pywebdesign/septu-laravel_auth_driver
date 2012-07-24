<?php

class Septu_Generate_Task
{
 
    public function run($arguments)
    {
        // create the array containing the new user details
		$new_user_details = array(
			'username' => 'admin',
        	'email'	   => 'daniel@danielberry.me',
        	'password' => 'Welcome2012*',
        	'profile'  => array(
	        	'first_name'  => 'Daniel',
	        	'last_name'   => 'Berry',
	        	'description' => 'This is the Primary Admin User!'
	        )
		);

		// // insert the new user
		// $new_user = new SeptuUser($new_user_details);
		// $new_user->save();

		// $profile_data = array(
  //       	'first_name'  => 'Daniel',
  //       	'last_name'   => 'Berry',
  //       	'description' => 'This is the Primary Admin User!'
  //       );

		// $new_profile = new SeptuProfile($profile_data);
		// $new_user->profile()->insert($new_profile);
    }
 
}