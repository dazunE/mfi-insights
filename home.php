<?php
/**
 * Template Name: Home
 * @author: Dasun Edirisinghe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MFI_Insights
 */

get_header(); 

	while ( have_posts() ) : the_post() {

		get_template_part( 'template-parts/content', 'home' );
	}	
	
get_footer();

?>
