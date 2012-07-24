<?php

Route::get('(:bundle)/create', function()
{
	$arguments = array(
		'username' => 'admin',
		'password' => 'Welcome2012',
		'email'    => 'daniel@danielberry.me',
		'profile'  => array(
			'first_name' => 'Daniel',
			'last_name'  => 'Berry'
		)
	);
	
    $user = Auth::user()->create($arguments);

    var_dump($user);
});

Route::get('(:bundle)/attempt', function()
{
	$arguments = array(
		'username' => 'admin',
		'password' => 'Welcome2012',
		'remember' => false
	);

	$user = Auth::attempt($arguments);

    if ($user)
    {
    	$user = Auth::user();

    	return($user->profile->last_name.' You are logged in!');
    }
    else
    {
    	return('You are not logged in!');
    }
});

Route::get('(:bundle)/check', function()
{
    if (Auth::check())
    {
    	$user = Auth::user();

    	return($user->username.' You are logged in!');
    }
    else
    {
    	return('You are not logged in!');
    }
});

Route::get('(:bundle)/logout', function()
{
    Auth::logout();
});

Route::get('(:bundle)/profile', function()
{
    $user = Auth::user();

    var_dump($user);
});

Route::get('(:bundle)/activate/(:any)/(:any)', function($identifier, $code)
{
    if (Auth::user($identifier)->activate($code))
    {
        return('User has been activated');
    }
    else
    {
        return('Oops, could not activate user.');
    }
});

Route::get('(:bundle)/reset_password/(:any)', function($identifier)
{
    if ($details = Auth::user($identifier)->reset_password())
    {
        var_dump($details);
    }
    else
    {
        return('Oops, could not reset your password.');
    }
});


Route::get('(:bundle)/reset_password_confirm/(:any)/(:any)/(:any)', function($identifier, $code, $new_password)
{
    if (Auth::user($identifier)->reset_password_confirm($code, $new_password))
    {
        return('You have successfully reset your password!');
    }
    else
    {
        return('Oops, could not reset your password.');
    }
});

Route::get('(:bundle)/enable/(:any)', function($identifier)
{
    if (Auth::user($identifier)->enable())
    {
        return('You have successfully enabled this account!');
    }
    else
    {
        return('Oops, counld not enable this account.');
    }
});

Route::get('(:bundle)/disable/(:any)', function($identifier)
{
    if (Auth::user($identifier)->disable())
    {
        return('You have successfully didabled this account!');
    }
    else
    {
        return('Oops, counld not disable this account.');
    }
});

Route::get('(:bundle)/group/create', function()
{
    // $attributes = array(
    //     'name'        => 'superadmin',
    //     'description' => 'This is the superadmin group',
    // );
    
    $attributes = array(
        'name'        => 'useradmin',
        'description' => 'This group has access to the user management system',
    );
    
    $group = Auth::group()->create_group($attributes);
    
    var_dump($group);
});

Route::get('(:bundle)/group/update/(:any)', function($identifier)
{
    // $attributes = array(
    //     'name'        => 'superadmin',
    //     'description' => 'This is the superadmin group',
    // );
    
    $attributes = array(
        'name'        => 'nonuseradmin',
        'description' => 'This group does not have access to the user management system',
        'parent'      => false
    );
    
    $group = Auth::group($identifier)->update_group($attributes);
    
    var_dump($group);
});

/**
 * try to update a group
 */
Route::get('(:bundle)/group/adduser/(:any)/(:any)', function($group_id, $user_id)
{  
    if ($group = Auth::user($user_id)->add_to_group($group_id))
    {
        return var_dump($group);
    }
    else
    {
        return 'The user could not be added to the group.';
    }
});

/**
 * try to update a group
 */
Route::get('(:bundle)/group/removeuser/(:any)/(:any)', function($group_id, $user_id)
{  
    if ($group = Auth::user($user_id)->remove_from_group($group_id))
    {
        return var_dump($group);
    }
    else
    {
        return 'The user could not be removed from the group.';
    }
});

/*******************************************************************
  * PERMISSIONS
  * ***************************************************************/

/**
 * try to create a permission
 */
Route::get('(:bundle)/permissions/create', function($resource = null)
{  
    $fields = array(
        'resource'        => 'instruments/view',
        'description' => 'Description for instruments/view'
    );

    if ($permission = Auth::permissions()->create_permission($fields))
    {
        return var_dump($permission);
    }
    else
    {
        return 'The permission could not be created.';
    }
});

/**
 * try to create a group
 */
Route::get('(:bundle)/permissions/update/(:any)', function($resource = null)
{  
    $fields = array(
        'resource'        => 'instruments/edit',
        'description' => 'Description for instruments/edit'
    );

    if ($permission = Auth::permissions($resource)->update_permission($fields))
    {
        return var_dump($permission);
    }
    else
    {
        return 'The permission could not be updated.';
    }
});


Route::get('(:bundle)/group/permissions/add/(:num)/(:num)', function($group_id, $resource){

    if ($permission = Auth::group($group_id)->add_permission($resource))
    {
        return 'Hell Yeah it worked...';
    }
    else
    {
        return 'Damn...';
    }
});

Route::get('(:bundle)/group/permissions/delete/(:num)/(:num)', function($group_id, $resource){

    if ($permission = Auth::group($group_id)->remove_permission($resource))
    {
        return 'Permission Removed!';
    }
    else
    {
        return 'Damn...';
    }
});


Route::get('(:bundle)/user/permissions/add/(:num)/(:num)', function($user_id, $resource){

    if ($permission = Auth::user($user_id)->add_permission($resource))
    {
        return 'Hell Yeah it worked...';
    }
    else
    {
        return 'Damn...';
    }
});

Route::get('(:bundle)/user/permissions/delete/(:num)/(:num)', function($user_id, $resource){

    if ($permission = Auth::user($user_id)->remove_permission($resource))
    {
        return 'Permission Removed!';
    }
    else
    {
        return 'Damn...';
    }
});

Route::get('(:bundle)/user/permissions/(:any)', function($user_id){

    $permission = Auth::user($user_id)->has_access();

    var_dump($permission);
});
