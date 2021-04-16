<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package The Box
 * @since The Box 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php if ( have_posts() ) : ?>
					
			<header class="page-header">
			
				<h1 class="page-title">
					<?php
						if ( is_category() ) {
							printf( __( 'Category Archives: %s', 'the-box' ), '<span>' . single_cat_title( '', false ) . '</span>' );

						} elseif ( is_tag() ) {
							printf( __( 'Tag Archives: %s', 'the-box' ), '<span>' . single_tag_title( '', false ) . '</span>' );

						} elseif ( is_author() ) {
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author Archives: %s', 'the-box' ), '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						} elseif ( is_day() ) {
							printf( __( 'Daily Archives: %s', 'the-box' ), '<span>' . get_the_date() . '</span>' );

						} elseif ( is_month() ) {
							printf( __( 'Monthly Archives: %s', 'the-box' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						} elseif ( is_year() ) {
							printf( __( 'Yearly Archives: %s', 'the-box' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						} else {
							printf( __( 'Archives: %s', 'the-box' ), '<span>' . $term->name . '</span>' );

						}
					?>
				</h1>
				<?php
					if ( is_category() ) {
						// show an optional category description
						$category_description = category_description();
						if ( ! empty( $category_description ) )
							echo apply_filters( 'category_archive_meta', '<div class="taxonomy-description">' . $category_description . '</div>' );

					} elseif ( is_tag() ) {
						// show an optional tag description
						$tag_description = tag_description();
						if ( ! empty( $tag_description ) )
							echo apply_filters( 'tag_archive_meta', '<div class="taxonomy-description">' . $tag_description . '</div>' );
					}
				?>
			</header><!-- .page-header -->
			
			<div class="posts-loop clearfix">
				<div class="row">
					
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="<?php thebox_grid(); ?>">
							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
						</div>
					<?php endwhile; ?>
				
				</div>
			</div><!-- .posts-loop -->
			
			<?php the_posts_pagination( array(
			'mid_size' => 2,
			'prev_text' => __( '&larr;', 'the-box' ),
			'next_text' => __( '&rarr;', 'the-box' ),
			) ); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php
$blog_layout = get_option( 'thebox_sidebar_settings' );
if ( $blog_layout != 'one-column' && $blog_layout != 'grid3' ) {
	get_sidebar();	
}
?>
<?php get_footer(); ?>
