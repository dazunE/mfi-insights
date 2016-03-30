<?php

global $post;

$user_image 	= get_featured_image();
$theme_color 	= get_meta_data_singuler('nineteen_career_color_theme');
$sub_title		= get_meta_data_singuler( 'nineteen_career_sub_title' );
$responsibilities = get_meta_data_singuler( 'nineteen_career_responsibilities' );
$qualifications = get_meta_data_singuler( 'nineteen_career_qualifications' );



?>
<div class="vacancy-alert <?php echo $theme_color; ?>">

    <h3 class="<?php echo $theme_color; ?>">
    	<a href="<?php the_permalink();?>">
    		<?php the_title();?>
    		<span class="<?php echo $theme_color; ?>"><?php echo $sub_title; ?></span>
    	</a>
    </h3>

    <div class="vacancy-content">
    <div class="theme-image"><img src="<?php echo $user_image;?>" /></div>
    <div class="details">
      <div class="clearfix"></div>
      <h4>RESPONSIBILITIES</h4>
      <?php echo $responsibilities; ?>
      <h4>IDEAL QUALIFICATIONS</h4>
      <?php echo $qualifications ; ?>
      </ul>
      <a class="applynow" href="mailto:info@mfianalytics.com">Apply Now!</a> 
      
      </div>
       <div class="clearfix"></div>
      </div>
    <div class="clearfix"></div>
</div>


