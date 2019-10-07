<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta http-equiv='X-UA-Compatible' content='IE=Edge' />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">


        <div class="container">
            <div class="head row">
                <div class="site-branding col-lg-4 col-md-12 col-sm-12 col-12">
                    <?php the_custom_logo(); ?>
                    <div class="logo_name">Tools&Dies</div>
                </div><!-- .site-branding -->
                    <div id="site-navigation" class="menu-wrap col-lg-8 col-md-12 col-sm-12 col-12">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </div>
            </div>
        </div><!-- .contaner -->
        <div class="mobile-menu">
            <span class="menu_mob_contact"><span><a class="contact_link" href="http://toolsndies.loc/contact/">Contact</a></span></span>
            <span class="menu_mob_txt">Menu</span>
            <a href="" class="menu-btn">
                <span></span>
            </a>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
