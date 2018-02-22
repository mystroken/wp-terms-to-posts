<?php
/*
Plugin Name: Terms to Posts
Description: Convert some terms to posts
Author: Mystro Ken
Author URI: http://mystroken.com/
Version: 1.0.0
License:

  Copyright 2017 Mystro Ken ( njume48@gmail.com )

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

/*
|------------------------------------------------------------------------
| Load Translation Domain
|------------------------------------------------------------------------
|
| Adds i18 Language Support
*/

load_plugin_textdomain('riffeac', false, basename( dirname( __FILE__ ) ) . '/languages/');


/**
|------------------------------------------------------------------------
| Includes core files
|------------------------------------------------------------------------
|
| 
*/
require_once dirname(__FILE__) . '/functions.php';


/*
|--------------------------------------------------------------------------
| Attaches Plugin LifeCycle Hooks.
|--------------------------------------------------------------------------
|
*/

$activation_file   = dirname(__FILE__) . '/activate.php';
$deactivation_file = dirname(__FILE__) . '/deactivate.php';

if(
	   !file_exists( $activation_file )
	OR !file_exists( $deactivation_file )
){
	throw new Exception("Please check that activate.php and deactivate.php files are present and well written under the root directory of your plugin");
} else{
	register_activation_hook(  __FILE__, function() { include_once dirname(__FILE__) . '/activate.php'; });
	register_deactivation_hook(__FILE__, function() { include_once dirname(__FILE__) . '/deactivate.php'; });
}
