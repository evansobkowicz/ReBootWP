<?php

function wpc_url_login(){
	return bloginfo('url');
}
add_filter('login_headerurl', 'wpc_url_login');


function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/assets/css/login.css' );
}
add_action('login_head', 'login_css');


function remove_footer_admin () {
	echo '&copy;' . date('Y') . ' Assabet Photography | Web Development by <a href="http://evtikawebdesign.com/" target="_blank">Evtika Web Design</a>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


?>