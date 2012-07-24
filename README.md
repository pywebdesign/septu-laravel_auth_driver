Septu - an Auth Driver for Laravel
==================================
Welcome to Septu!  Hopefully you will find this bundle simple and easy to use. I'm not very creative when it comes to writing docs, so I'll just go ahead and dive right into the details.

Getting Septu:
--------------
Clone or Download Septu into your Laravel installation's bundles directory. You can download the latest version zipped version of Septu [here](https://github.com/dberry37388/septu-laravel_auth_driver/zipball/master) or go into your laravel/bundles directory and run the following git command:

    git clone -b master git@github.com:dberry37388/septu-laravel_auth_driver.git septu

You should now have the latest stable version of Septu in your laravel bundles directory... Now it's time to make this thing work!

Installing Septu
----------------
Okay, so now that we have the latest version of Septu downloaded, it's time to get it up and running.  

**Auto-Start Septu**
Start by opening up your *application/bundle.php* file and add the following lines to the bundle array:

    'septu' => array('auto' => true)

This will make sure that Septu is auto-started and we don't run into any initialization issues.

**Make Septu Your Auth Driver**
Next, let's go ahead and tell the Laravel Auth package that we want to use Septu as the default driver. So let's open up *application/config/auth.php* and make the following changes:

    'driver' => 'septu',

We won't be using any of the other configurations in the auth.php config file. Septu comes with it's own configuration (we'll be diving into that in a little bit).

**Migrations!**
Now it's time to hook up Septu with your database.  First make sure you have an existing (working) connection.  You can use your default connection or go into the septu/config/septu.php file and on the first line set your db connection to whatever you wish.

Once you've made sure your database connection is working, go ahead and run this migration command:

    php artisan migrate septu

This will install all of the necessary tables to get Septu up and running.  Table names, profile fields and features can all be configured using the Septu config file.  We will look into that in further detail in a little bit.  For right now this installs everything.

That's it!  You should now have Septu installed as your default Laravel Auth driver.

What's Next?
------------
[Configuring Septu](git clone -b git@github.com:dberry37388/septu-laravel_auth_driver.git septu) - Learn more about configuring Septu