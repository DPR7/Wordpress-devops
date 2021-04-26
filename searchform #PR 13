<?php
/**
 * The template for displaying search forms in thebox
 *
 * @package The Box
 * @since The Box 1.0
 */
?>

	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'the-box' ); ?></span>
			<input type="search" id="s" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'the-box' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		</label>
		<button type="submit" id="search-submit" class="search-submit">
			<span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'the-box' ); ?></span>
			<span class="icon-font icon-search"></span>
		</button>
	</form>
