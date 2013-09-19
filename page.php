<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage gstlt_eleven
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</article><!-- #post-<?php the_ID(); ?> -->

		<?php //comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>