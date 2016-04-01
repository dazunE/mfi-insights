<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MFI_Insights
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="container">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<div class="clearfix"></div>
</div>
