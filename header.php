<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
    
    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : 
       wp_title(); ?> 
       </title>
       <!-- Bootstrap core CSS -->
       <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
       <!-- Custom styles for this template -->
       <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
       <link rel=“stylesheet” href=“https://use.fontawesome.com/releases/v5.0.10/css/all.css”
       integrity=“sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg” crossorigin=“anonymous”>
       <?php wp_head(); ?>

   

  </head>
  <body>

      <nav class="navbar navbar-default" role="navigation">
	    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		  <div class="navbar-header">
      <div class="navbar-button">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
            <span class="icon-bar"></span>

                <!-- optional brand -->
      </button>

      

      </div>
      
      <!-- <div style="max-width:720px;">
      <a href="/" target=""><img class="logo-head" src="<?php bloginfo('template_directory'); ?>/img/LoyalsLogo_forSite.jpg" alt="logo"/></a>
      </div> -->

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
      </div>
    </div>

    <div class="container">
      <div class="blog-header">
        <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        <p class="lead blog-description"><?php bloginfo('description'); ?></p>
      </div>