<?php

/**
 * Septu Start File
 *
 * @package  Septu
 * @license  MIT License
 * 
 */


/**
 * Setup the septu namespace
 */
Autoloader::namespaces(array(
	'Septu' => Bundle::path('septu'),
));

/**
 * Setup aliased for Septu Classes
 */
Autoloader::alias("\\Septu\\Septu", 'Septu');
Autoloader::alias("\\Septu\\Models\\User", 'SeptuUser');
Autoloader::alias("\\Septu\\Models\\Login", 'SeptuLogins');
Autoloader::alias("\\Septu\\Models\\Profile", 'SeptuProfile');
Autoloader::alias("\\Septu\\Models\\Group", 'SeptuGroup');
Autoloader::alias("\\Septu\\Models\\Permission", 'SeptuPermission');

/**
 * Extend the Auth Class to Include this Driver
 */
Auth::extend('septu', function() {
	
	// Again, the class name should be the name you chose
	return new Septu;
});
