<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MFI_Insights
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
 
  </div>
  <div class="header-bottom">
    <div class="container">
      <div class="col-md-3 visible-md visible-lg imf-logo"> <img src="<?php print IMAGES; ?>/mfi-logo.png" class="img-responsive" /> </div>
      <div class="col-md-9 col-xs-12"> 
      
      <nav class="navbar mfi-menu">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header visible-sm visible-xs">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="#"> <img src="images/mfi-logo.png" class="img-responsive" /></a>
    </div>


    <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

</nav>

    
    <!-- header-bottom end --> 
  </div>
</header>


<div class="mobile-header-welcome visible-xs visible-sm">

 <div class="info">
 <h2>The Proven Leader in Analytics</h2>
 <p>MFI- Insight Analytics is powered by INES-IT.sprl (INtegrated & Efficient Solutions - IT), which is a Belgium based consultancy company. We deliver high quality BI and analytics solutions and services to financial institutions and specially Microfinance Institutions in order to improve their operational performance and increase probabilities of sustainability. </p>
  </div>
  
</div>
