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
            <div class="row">
                <div class="site-branding col-lg-4 col-md-12 col-sm-12">
                    <?php the_custom_logo(); ?>
                    <div class="logo_name">Tools&Dies</div>
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-dark bg-transparent col-lg-8 col-md-12 col-sm-12">
                    <span><span><a href="#" class="contact_link">Contact</a></span></span>
                    <div class="menu_btn">
                        <span class="navbar-text">Menu</span>
                        <button class="navbar-toggler navbar-toggler-right collapsed third-button" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                           <!-- <span class="my-1 mx-2 close">X</span>
                            <span class="navbar-toggler-icon"></span>-->
                            <div class="animated-icon3"><span></span><span></span><span></span></div>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </div>
                </nav><!-- #site-navigation -->
            </div>
        </div><!-- .contaner -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
