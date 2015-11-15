<?php
/**
 * Plugin Name: Culture Object
 * Plugin URI: http://www.gladdy.co.uk/projects/culture-object-sync
 * Description: A framework as a plugin to enable sync of culture objects into WordPress.
 * Version: 2.0.0
 * Author: Liam Gladdy / Thirty8 Digital
 * Author URI: https://www.gladdy.uk / http://www.thirty8digital.co.uk
 * GitHub Plugin URI: Thirty8Digital/CultureObject
 * License: Apache 2 License
 */

if (version_compare(PHP_VERSION, '5.3.0') >= 0) {
	require('culture-object-init.php');
} else {
	$ver = phpversion();
	trigger_error("Culture Object requires at least PHP 5.3. You're on an unsupported and unmaintained version of PHP (".$ver.") which could contain major security holes and should upgrade immediately. Please contact your webhost for further assistance in this.", E_USER_ERROR);
	exit();
}