<?php
/**
 *  gstlt.info WP theme
 *
 * @package     gstlt-info
 * @author      Grzegorz Adamowicz (gadamowicz@gstlt.info)
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
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