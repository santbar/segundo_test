<?php
/**
 * Template Name: no_sidebar.php
 * The template for that displays pages with no sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

if( is_front_page()) :
	get_header('home');
	elseif(is_page('no_sidebar')):
		get_header('about');
	else:
		get_header();
	endif;

//get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>