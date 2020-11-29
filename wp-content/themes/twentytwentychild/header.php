<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>

<header id="site-header" class="main-header" role="banner">
    <div class="d-none d-xl-block desktop-header">
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="header-logo">
                            <?php
                            twentytwenty_site_logo();
                            ?>
                        </div>
                    </div>
                    <div class="col-md-10">
                        <div class="header-navigation-wrapper">

                            <?php
                            if (has_nav_menu('primary')) {
                                ?>

                                <nav class="primary-menu-wrapper"
                                     aria-label="<?php esc_attr_e('Horizontal', 'twentytwenty'); ?>" role="navigation">

                                    <ul class="primary-menu reset-list-style">

                                        <?php

                                        wp_nav_menu(
                                            array(
                                                'container' => '',
                                                'items_wrap' => '%3$s',
                                                'theme_location' => 'primary',
                                            )
                                        );
                                        ?>

                                    </ul>

                                </nav><!-- .primary-menu-wrapper -->

                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-header d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="header-logo">
                        <?php
                        twentytwenty_site_logo();
                        ?>
                    </div>
                </div>
                <div class="col-6">
                    <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<span></span>
									<span></span>
									<span></span>
								</span>
							</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header><!-- #site-header -->

<?php
// Output the menu modal.
get_template_part('template-parts/modal-menu');
