<?php
/**
 * Template Name: Home
 * @author: Dasun Edirisinghe
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MFI_Insights
 */

get_header(); ?>

<!-- Main Slider -->

<div id="sequence">
	<span class="sequence-prev glyphicon glyphicon-chevron-left" alt="Previous"></span>
	<span class="sequence-next glyphicon glyphicon-chevron-right" alt="Next"></span>

	 <ul class="sequence-canvas">
		 <li class="animate-in slider-set-1">
		 	<div class="info">
		 		<h2>The Proven Leader in Analytics</h2>
		 		<p>MFI- Insight Analytics is powered by INES-IT.sprl (INtegrated & Efficient Solutions - IT), which is a Belgium based consultancy company. We deliver high quality BI and analytics solutions and services to financial institutions and specially Microfinance Institutions in order to improve their operational performance and increase probabilities of sustainability. </p>
		  	</div>
		 	<img class="sky" src="<?php print IMAGES; ?>/banners/banner-01.jpg" alt="Blue Sky" /> <img class="balloon" src="<?php print IMAGES; ?>/banners/banner-slider-parts-01.png" alt="Balloon" /> 
		 </li>

		 <li class="animate-in slider-set-1">
		   <div class="info">
		 	<h2>OUTREACH</h2>
		 	<p>MFI- Insight Analytics is powered by INES-IT.sprl (INtegrated & Efficient Solutions - IT), which is a Belgium based consultancy company. We deliver high quality BI and analytics solutions and services to financial institutions and specially Microfinance Institutions in order to improve their operational performance and increase probabilities of sustainability. </p>
		  </div>
		 	<img class="sky" src="<?php print IMAGES; ?>/banners/banner-02.jpg" alt="Blue Sky" /> <img class="balloon" src="<?php print IMAGES; ?>/banners/banner-slider-parts-02.png" alt="Balloon" /> 
		 </li>

		<li class="animate-in slider-set-1">
		   <div class="info">
		 	<h2>SERVICES</h2>
		 	<p>Our services include program and project management for our clients, consultancy services including business and research consultancy. In addition, we have use cases, agile technology and data mining services that can provide a better understanding and a clear picture of your business.</p>
		  </div>
		 <img class="sky" src="<?php print IMAGES; ?>/banners/banner-03.jpg" alt="Blue Sky" /> <img class="balloon" src="<?php print IMAGES; ?>/banners/banner-slider-parts-03.png" alt="Balloon" /> 
		 </li>

		<li class="animate-in slider-set-1">
		   <div class="info">
		 	<h2>SOLUTIONS</h2>
		 	<p>Our solutions provide our clients with enhanced portfolio management by monitoring their performance and operations. With the help of our solutions, MFIs and other financial institutions and are able to identify the problem areas enabling them to decrease their delinquency rates and improve performance and outreach.</p>
		  </div>
		 <img class="sky" src="<?php print IMAGES; ?>/banners/banner-04.jpg" alt="Blue Sky" /> <img class="balloon" src="<?php print IMAGES; ?>/banners/banner-slider-parts-04.png" alt="Balloon" /> 
		 </li>
	 </ul>
</div>
<div class="clearfix"></div>

<!-- End Main Slider -->

<!-- Start Highlights -->
<div class="container highlights">
  	<h1 class="header-underline-orange"><span>Our Value</span> Proposition</h1>
  		<div class="clearfix"></div>

		  	<div class="col-md-3 col-xs-12 highlights-panel section-01">
		  		<img src="images/highlights-01.png" class="featured-img" />
    			<h3>Frequent business insight</h3>
		    	<p class="highlights-panel-paragraph">MFI Insight Analytics’s  Financial Analytics Platform<sup>SM</sup> (FAP<sup>SM</sup>) is an end-to-end Solution as a Service (SaaS) that gives you an up-to-date holistic view of your <label>...</label> business on a day-to-day basis. The processes have been automated in such a way that tasks such as Loan Portfolio Aging, Vintage Analysis and Cash Flow Management are quick and effortless. Additionally, it allows you to set and achieve frequent targets for the KPIs that matter to you, such as, PaR, Customer Churn Rate, Financial Ratios and Operating Cost Ratio.
		    	</p>
		    	<span class="highlights-panel-paragraph-more  glyphicon glyphicon-chevron-right set-4-info-more"></span>
		    </div>

		  	<div class="col-md-3 col-xs-12  highlights-panel section-02">
		  		<img src="images/highlights-02.png" class="featured-img" />
		    	<h3>Quick deployment</h3>
		    	<p class="highlights-panel-paragraph">FAP<sup>SM</sup> comes with predefined KPIs and insights based on industry-standard metrics, which can be tailored to your business. In total, we aim for an end-to-end <label>...</label>  implementation period of 3 – 4 months. The result of this quick deployment is drastic time-savings and a quicker return on investment.
		    	</p>
		    	<span class="highlights-panel-paragraph-more  glyphicon glyphicon-chevron-right set-4-info-more"></span>
		  	</div>

	  		<div class="col-md-3 col-xs-12 highlights-panel section-03">
	  			<img src="images/highlights-03.png" class="featured-img" />
	    		<h3>Flexibility</h3>
	    		<p class="highlights-panel-paragraph">FAP<sup>SM</sup> is both architecture agnostic and cloud ready. It runs on a highly-configurable core that plugs seamlessly into whichever enterprise architecture you have <label>...</label> installed. This saves you the additional cost and human resource requirement that comes with installing a new architecture. Alternatively, MFI Insight Analytics offers a cloud-hosted solution that takes the stress of managing the infrastructure off your hands so you can focus on running your business.
	    		</p>
	    		<span class="highlights-panel-paragraph-more  glyphicon glyphicon-chevron-right set-4-info-more"></span>
	  		</div>

  			<div class="col-md-3 col-xs-12 highlights-panel section-04">
  			    <img src="images/highlights-04.png" class="featured-img" />
    		   <h3>Extensibility</h3>
    			<p class="highlights-panel-paragraph">FAP<sup>SM</sup> is broken up into four loosely coupled modules, The Finance Analytics Module FAM<sup>SM</sup>, The Channel & Network Performance Module CNM<sup>SM</sup>, <label>...</label> The 360 Customer Centricity Module CCM<sup>SM</sup>and finally The Product Performance Module PPM<sup>SM</sup> .We can deploy the module that suits your business and budget. Should you require additional functionality in the future, activation of additional modules is fast and simple.
    		   </p>
				<span class="highlights-panel-paragraph-more  glyphicon glyphicon-chevron-right set-4-info-more"></span>
  			</div>
 
</div>
<!-- End Highlights -->

<?php
get_footer();