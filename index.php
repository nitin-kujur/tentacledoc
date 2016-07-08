<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */

//--------------------------------------------------------------------

$role = isset($_GET["role"]) ? $_GET["role"] : ''; 
$token = isset($_GET["token"]) ? $_GET["token"] : '';

// $role = isset($_POST["role"]) ? $_POST["role"] : ''; 
// $token = isset($_POST["token"]) ? $_POST["token"] : '';

// $role = 'TeleCaller';
$check = (strcasecmp($token, 'oLH2uvgLT5DbHz8gUaCB8KSade8MkGuAwvTkHG4S') == 0) ? 'pass' : 'fail' ;
// $check = 'pass';

//--------------------------------------------------------------------

define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
