<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package s&c-partytunes
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!--    <link rel="stylesheet" href="print.css" type="text/css" media="print" />-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mbc_theme_alpha' ); ?></a>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="header-nav">
            <div class="container">
                <div class="center-nav">
                    <a class="navbar-brand" href="#">LOGO</a>
                    <?php /* Primary navigation */
                    wp_nav_menu( array(
                            'menu' => 'Primary Menu',
                            'depth' => 2,
                            'container' => false,
                            'menu_class' => 'nav navbar-nav'
                            //Process nav menu using our custom nav walker
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <?php if (!is_front_page()){ ?>

        <?php
        if (has_post_thumbnail()){ ?>
            <div class="col-md-12 post-featured-img" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
            </div>

        <?php } else { ?> <!-- end  thumbnail if -->

            <div class="col-md-12 post-featured-img">
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
            </div>
        <?php } ?>
    <?php } ?> <!-- Front page if-->


    <div id="content" class="site-content">
