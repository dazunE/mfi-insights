<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MFI_Insights
 */

?>
<div class="clearfix"></div>
	<div class="our-services-section">
		<h2><?php the_title();?></h2>
		<div <?php post_class('container body-content'); ?> id="post-<?php the_ID(); ?>">
		  <?php the_content( ); ?>
		</div>
	</div>
<div class="clearfix"></div>  
