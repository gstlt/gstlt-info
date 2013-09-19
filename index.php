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
	<?php if (have_posts()) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title('<h1>', '</h1>'); ?></a>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content("Click to read more &raquo;", false); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<p><?php the_tags(); ?></p>
		<?php edit_post_link( __( 'Edit'), '<p>Meta: <span class="edit-link">', '</span></p>' ); ?>
	</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; // end of the loop. ?>

		<div class="older-newer">
			<div class="alignleft"><?php next_posts_link('&larr; Older entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer entries &rarr;') ?></div>
			<div class="clearfix"></div>
		</div>
		
			</div><!-- #content -->		

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php //get_search_form(); ?>

	<?php endif; ?>

		</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>