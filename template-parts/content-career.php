<?php

global $post;

$user_image 	= get_featured_image();
$theme_color 	= get_meta_data_singuler('nineteen_career_color_theme');



?>
<div class="vacancy-alert <?php echo $theme_color; ?>">
    <h3 class="<?php echo $theme_color; ?>"><a href="<?php the_permalink();?>"><?php the_title();?> <span class="<?php echo $theme_color; ?>">MFi Insight Analytics is looking for a Business Analyst to take care of the following responsibilities.</span></a></h3>
    <div class="vacancy-content">
    <div class="theme-image"><img src="<?php echo $user_image;?>" /></div>
    <div class="details">
      <div class="clearfix"></div>
      <h4>RESPONSIBILITIES</h4>
      <ul>
        <li>Determine, implement, and evaluate business metrics to meet ongoing organizational or 
          customer information needs.</li>
        <li>Analyze and report on complex data to meet customer needs.</li>
        <li>Communicate complex data in comprehensible ways.</li>
        <li>Identify user needs from user requests and develop strategies by which to meet those 
          
          needs.</li>
        <li>Critically evaluate information from multiple sources and clearly indicate quality of final 
          
          analysis.</li>
        <li>Proactively communicate and collaborate with users to analyze information needs and 
          
          functional requirements</li>
      </ul>
      <h4>IDEAL QUALIFICATIONS</h4>
      <ul>
        <li>Master's degree in Business in Management, Economics or Microfinance</li>
        <li>Experience in business process documentation, design, and analysis; business process </li>
        workflow preferable (additional experience in lieu of degree would be considered)
        <li>Proven ability to handle multiple tasks, set priorities, and schedule and meet deadlines</li>
        <li>Strong analytical and product management skills required, including a thorough 
          
          understanding of how to interpret needs and translate them into application and operational 
          
          requirements</li>
        <li>Proven ability to work with users, offshore business team, and developers to define and 
          
          document solutions to business requirements</li>
        <li>Strong communication skills (written and verbal) in English and French</li>
      </ul>
      <a class="applynow" href="mailto:info@mfianalytics.com">Apply Now!</a> 
      
      </div>
       <div class="clearfix"></div>
      </div>
    <div class="clearfix"></div>
</div>


