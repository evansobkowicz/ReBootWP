<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="<?php bloginfo('name'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/ico/apple-touch-icon-144-precomposed.png">

    <title><?php if (is_front_page()) { bloginfo('name'); echo ' | '; bloginfo('description'); } else { bloginfo('name'); wp_title('|', true, 'left'); } ?></title>

    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/reboot.css" rel="stylesheet">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <?php if (is_admin_bar_showing()) { ?>
	    <style>
	    	.navbar-fixed-top {
		    	padding-top: 32px !important;
	    	}
	    </style>
    <?php } ?>
    
    <?php wp_head(); ?>
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
        </div>
        <div class="collapse navbar-collapse">
          	<?php 
				wp_nav_menu( array( 
					'container' => '',
					'theme_location' => 'main-menu',
					'menu_class' => 'nav navbar-nav navbar-right',
					'walker' => new Bootstrap_Walker(),									
				) ); 
			?>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <div class="wrapper"> 