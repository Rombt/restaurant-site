<?php
/* Template Name: Full Width Template */
?>




<?php get_header(); ?>


		<?php
		while ( have_posts() ) : the_post();

         echo '<main>' . the_content() . '</main>';


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>



<?php 
// get_sidebar();

get_footer();