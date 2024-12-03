<?php
function theme_setup () {
//	ADMIN-BAR
	add_filter('show_admin_bar', '__return_false');
//	REGISTER MENU
	register_nav_menu('top nav', 'منوی اصلی سایت');
//  ADD THIMBNAIL
	add_theme_support('post-thumbnails');

//	TIME ZONE
	date_default_timezone_set('Asia/Tehran');
}
add_action('after_setup_theme', 'theme_setup');