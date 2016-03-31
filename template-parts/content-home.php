<?php

global $post;


?>

<!-- Main Slider -->

<div id="sequence">
	<span class="sequence-prev glyphicon glyphicon-chevron-left" alt="Previous"></span>
	<span class="sequence-next glyphicon glyphicon-chevron-right" alt="Next"></span>

	<?php ninteen_slider_display('<ul class="sequence-canvas">','</ul>');?>

</div>
<div class="clearfix"></div>

<!-- End Main Slider -->

<!-- Start Highlights -->
<div class="container highlights">
  	<h1 class="header-underline-orange"><?php echo get_meta_data_singuler('nineteen_value_section_title');?></h1>
  		<div class="clearfix"></div>
		<?php ninteen_value_display();?> 	
</div>
<!-- End Highlights -->

<!-- Start Tab Panel -->
<div class="tab-viewed-wrapper">
	  <div class="container tabbed-view-info">
	    <h1 class="header-underline-light-blue"><?php echo get_meta_data_singuler( 'nineteen_tabs_section_title' );?></h1>
	    <p class="featured-text"><?php echo get_meta_data_singuler( 'nineteen_tabs_section_desc' );?></p>
	    <?php ninteen_tabs_display();?>
	    <!-- tab panel container end --> 
	  </div>
</div>
<!-- End Tab Panle -->

<!-- Pateners Slider -->
<div class="clearfix"></div>
<div class="slider-panel-partners">
  <div class="container">
    <h1 class="header-underline-dull-blue"><span>we have achieved</span>
    <label> trust by the top global players.</label>
    </h1>
    
    <!-- slider start -->
    
    <div class="demo">
      <div class="clearfix"></div>
      <div class="item">

      <?php

      ninteen_patners_display(' <ul id="responsive" class="content-slider">','</ul>');

      ?>
 
        <div class="lSAction">
        <a class="lSPrev"><span class="glyphicons glyphicon-chevron-left"></span></a>
        <a class="lSNext"><span class="glyphicons glyphicon-chevron-right"></span></a>
        </div>
      </div>
    </div>
    
    <!-- slider end--> 
  </div>
</div>