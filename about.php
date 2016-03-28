<?php
/**
 * Template Name: About us
 * @author: Dasun Edirisinghe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MFI_Insights
 */

get_header(); 

	while ( have_posts() ) { the_post() ;

		get_template_part( 'template-parts/content', 'about' );
	}	
	
get_footer();

?>
