<?php

global $post;

$user_image 	= get_featured_image();
$user_position 	= get_meta_data_singuler( 'nineteen_member_postition' );
$user_linkdin 	= get_meta_data_singuler( 'nineteen_member_linkdin' );
$user_skype 	= get_meta_data_singuler( 'nineteen_member_skype' );
$user_email 	= get_meta_data_singuler( 'nineteen_member_email' );
$user_bio		= get_meta_data_singuler( 'nineteen_member_bio');

?>

<div class="member col-md-4">
	<div class="member-image">
		<img src="<?php echo $user_image; ?>"></div>
	<div class="member-titiles">
	  <h3><?php the_title();?></h3>
	  <p><?php echo $user_position; ?></p>
	</div>
	<div class="member-social">
		<a href="https://fr.linkedin.com/pub/frederic-le-pottier-pmp-executive-mba/0/168/648/fr" class="first-child">
			<img src="<?php print IMAGES; ?>/LinkedIn-128.png">
		</a>
		<a href="skype:Frederic.lepottier">
			<img src="<?php print IMAGES; ?>/Skype-128.png">
		</a>
		<a href="mailto:frederic.lepottier@mfianalytics.com">
			<img src="<?php print IMAGES; ?>/647403-email-128.png">
		</a>
	  <div class="clearfix"></div>
	</div>
	<div class="member-readmore federic">Read More</div>
</div>
<div class="member-description federic visible-sm visible-xs"><?php echo $user_bio;?></div>
