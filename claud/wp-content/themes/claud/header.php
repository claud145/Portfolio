<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
          <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/materialize.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">       
    
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body id="start"<?php body_class(); ?>>
    <header class="navHeader ">
             <nav>
                <div class="nav-wrapper container grey darken-3">
                  <a href="<?php echo esc_url( home_url('/'));?>" class="brand-logo nav-logo">
                        <img src="<?php bloginfo('template_url')?>/img/c.png">
                  </a>
                  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                  <?php if(has_nav_menu('primary')):?>
                            <?php wp_nav_menu(
                            array(
                             'theme_location' => 'primary',   
                            'container' => 'nav',
                            'items_wrap' => '<ul id="" class="right hide-on-med-and-down"">%3$s</ul>',
                            )); ?>                   
                    <?php endif;?>
                    <div class="head-menu-collapse">
                      
                    <?php if(has_nav_menu('primary')):?>
                            <?php wp_nav_menu(
                            array(
                             'theme_location' => 'primary',   
                            'container' => ' ',
                            'items_wrap' => '<ul id="mobile-demo" class="side-nav"">%3$s</ul>',
                            )); ?>                   
                    <?php endif;?>

                    </div>
                </div>
              </nav>
        </header>
