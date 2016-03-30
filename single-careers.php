<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MFI_Insights
 */

get_header(); ?>

	<div class="clearfix"></div>

	<h2 class="general-main-header"><?php the_title();?></h2>

		<div <?php post_class('container body-content'); ?> id="post-<?php the_ID(); ?>">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'career' );

				the_post_navigation();


			endwhile; // End of the loop.
			?>
		</div>


<?php
get_footer();
