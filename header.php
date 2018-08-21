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

                    <style>
                        .in{
                            display: block;
                        }
                    </style>
                </div>
            </div>
        </div>
    </nav>


    <nav class="navbar navbar-inverse navbar-fixed-top site-header mobile-menu-sc">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fas fa-bars"></i>
                </button>

                <div class="navbar-brand-mobile">
                    <a class="navbar-brand-mobile-link" href="/">
                        <!--                    <img src="###" id="brand-image" alt="--><?php //bloginfo( 'name' ); ?><!--"/>-->
                        LOGO</a>
                </div>



                <div id="navbar" class="navbar-collapse collapse">

                    <div class="nav navbar-nav navbar-mobile">
                        <div class="sc-toggle-drop-menu">

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


            </div><!--/.nav-collapse -->
        </div>
    </nav>



    <div id="content" class="site-content">
