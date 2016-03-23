<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MFI_Insights
 */

?>

<footer>
	<div class="container">
		<div class="col-md-4">
			<div class="inner-wrap">
			  	<h5>Belgian Office</h5>
			  	<p>South Station Titanium<br />
				Marcel Broodthaersplein 8/5, 1060<br />
				Brussels South Station<br />
				Brussel, Belgium
				</p>  
			    <p>T +32 (0)2 892 39 00 | F +32 (0)2 892 39 01  </p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="inner-wrap">
				<h5>We are looking for professionals </h5>
				<p>with expertise in the areas of Data Warehousing and Business Intelligence. 
				  Please send your CV with details of your experience to: </p>
			  	<a href="#">info@mfianalytics.com</a> 
			 </div>
		</div>
		<div class="col-md-4 last-child">
			<div class="inner-wrap">
				<img src="images/footer-logo.png" class="footer-logo" alt="IMF Insight footer" />
			</div>
			<div class="footer-social-icons">
			        <a href="https://www.linkedin.com/company/10050711?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A1-1-1%2CtarId%3A1437291800057%2Ctas%3Amfi%20insight" target="blank"><i class="fa fa-linkedin"></i></a>
			        <a href="#"><i class="fa fa-facebook"></i></a>
			        <a href="#"><i class="fa fa-twitter"></i></a>
			        <a href="mailto:info@mfianalytics.com"><i class="fa fa-envelope"></i></a>
			          <div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

</footer>

<?php wp_footer(); ?>

<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Anton::latin', 'Source+Sans+Pro:400,400italic,300,600:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); 
  
</script> 

</body>
</html>
