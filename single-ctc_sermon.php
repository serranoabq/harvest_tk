<?php
/**
 * The template for displaying a single sermon
 *
 * @package harvest_tk
 */

get_header(); 
?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'components/ctc-sermon', 'single' ); ?>
		
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

	<?php endwhile; // End of the loop. ?>

	<?php get_template_part( 'components/content', 'related-sermons' ); ?>
		
<?php get_footer(); ?>
