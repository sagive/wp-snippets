<?php
// EASILY CHANGE THE LOWER FOOTER TEXT IN WP-ADMIN
function custom_admin_footer_text( $default_text ) {
	// change to your text
	return '<span id="footer-thankyou">Website by <a href="http://www.sagive.co.il">Sagive SEO</a></span>';
}
add_filter('admin_footer_text', 'custom_admin_footer_text');
?>