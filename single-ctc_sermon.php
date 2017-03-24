<?php
/**
 * The template for displaying all single sermon posts.
 *
 * @package harvest_tk
 */

get_header(); 
?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'components/content', 'single-sermon' ); ?>

		<div class="col-12">
		<?php /*
			$meta_args = array(
				'order' 		=> 'DESC',
				'orderby' 	=> 'date',
			);
			harvest_tk_link_pages_by_meta( array(
				'prev_text' => '<i class="fa fa-arrow-left"></i> &nbsp; Previous ',
				'next_text' => 'Next &nbsp; <i class="fa fa-arrow-right"></i> ',
			), $meta_args );

		*/ ?>
		</div>
		
		<?php
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		?>

	<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
