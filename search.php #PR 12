<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package The Box
 * @since The Box 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<?php if ( have_posts() ) : ?>
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'the-box' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php else : ?>
					<h1 class="page-title"><?php _e( 'Nothing Found', 'the-box' ); ?></h1>
				<?php endif; ?>
			</header><!-- .page-header -->
		
			<?php if ( have_posts() ) : ?>
	
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
	
				<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'the-box' ); ?></p>
				<?php get_search_form(); ?>
	
			<?php endif; ?>

		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

<?php
$blog_layout = get_option( 'thebox_sidebar_settings' );
if ( $blog_layout != 'one-column' && $blog_layout != 'grid3' ) {
	get_sidebar();	
} ?>
<?php get_footer(); ?>
