add_action( 'wp_enqueue_scripts', 'spcp_login_stylesheet' );
/**
 * Load plugin styles.
 *
 */
function spcp_login_stylesheet() {

	if ( apply_filters( 'spcp_load_styles', true ) ) {
		wp_enqueue_style( 'spcp-custom-stylesheet', plugin_dir_url(__FILE__) . 'spcp-styles.css' );
	}
}
