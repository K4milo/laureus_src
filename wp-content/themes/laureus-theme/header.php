<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top main-navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="side-links visible-xs">
        <?php
        //Menu Call
          wp_nav_menu( 
            array(
              'theme_location'    => 'navbar-top',
              'menu_class'        => 'nav navbar-side'
            )
          );
        ?>
      </div>
      <a class="navbar-brand visible-xs logo-mobile" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <div class="menu-desktop">
        <?php
        //Menu Call
          wp_nav_menu( 
            array(
              'theme_location'    => 'navbar-top',
              'menu_class'        => 'nav navbar-side'
            )
          );
        ?>

        <a class="navbar-brand logo-desktop" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
        <?php
  			//Menu Call
          wp_nav_menu( 
    				array(
    					'theme_location'    => 'navbar-main',
    					'depth'             => 2,
    					'menu_class'        => 'nav navbar-nav'
    				)
    			);
        ?>
      </div>
      <div class="menu-mobile">
        <a class="navbar-brand visible-xs logo-mobile" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>

        <?php
        //Menu Call
          wp_nav_menu( 
            array(
              'theme_location'    => 'navbar-main',
              'depth'             => 2,
              'menu_class'        => 'nav navbar-nav'
            )
          );
        ?>

        <?php
        //Menu Call
          wp_nav_menu( 
            array(
              'theme_location'    => 'navbar-top',
              'menu_class'        => 'nav navbar-side'
            )
          );
        ?>

        <?php
          // Follow us block Vars
          $facebook = get_option("facebook_url");
          $twitter = get_option("twitter_url");
          $instagram = get_option("instagram_url");
          $youtube = get_option("youtube_url");
        ?>  

        <div id="socialmenu" class="container-fluid">
          <div class="row follow-menu">
            <h3>Follow Us</h3>
            <ul>
              <?php if($facebook):?>
                <li><a href="<?php echo $facebook; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <?php endif;?>
              <?php if($twitter):?>
                <li><a href="<?php echo $twitter; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <?php endif;?>
              <?php if($instagram):?>
                <li><a href="<?php echo $instagram; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <?php endif;?>
              <?php if($youtube):?>
                <li><a href="<?php echo $youtube; ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
              <?php endif;?>
            </ul>
          </div>
        </div>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>