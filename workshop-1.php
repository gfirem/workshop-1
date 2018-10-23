<?php
/*
Plugin Name:  WorkShop 1
Plugin URI:   https://www.gfirem.com
Description:  WorkShop for WordPress development
Version:      1.0.0
Author:       GFireM Team
Author URI:   https://www.gfirem.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'admin_menu', 'workshop_1_add_new_menu_option' );

function workshop_1_add_new_menu_option() {
	add_management_page( 'WorkShop 1', 'WorkShop 1', 'install_plugins', 'workshop1', 'workshop_1_admin_page' );
}

function workshop_1_admin_page() {
	$text = 'Hello';
	echo '<h1>' . $text . '</h1>';
}