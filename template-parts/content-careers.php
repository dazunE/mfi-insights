<?php

global $post;

$user_image 	= get_featured_image();
$theme_color 	= get_meta_data_singuler('nineteen_career_color_theme');



?>
<div class="vacancy-alert <?php echo $theme_color; ?>">
    <h3 class="<?php echo $theme_color; ?>"><a href="<?php the_permalink();?>"><?php the_title();?> <span class="<?php echo $theme_color; ?>">MFi Insight Analytics is looking for a Business Analyst to take care of the following responsibilities.</span></a></h3>
</div>


