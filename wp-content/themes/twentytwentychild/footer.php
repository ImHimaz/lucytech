<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer" role="contentinfo" class="header-footer-group">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-xl-8">
                <div class="row inner_row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <a href="<?php echo home_url(); ?>">
                                <?php dynamic_sidebar('sidebar-1'); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <?php
                        if (has_nav_menu('primary')) {
                            ?>

                            <nav class="footer_menu " aria-label="<?php esc_attr_e('Expanded', 'twentytwenty'); ?>"
                                 role="navigation">

                                <ul class="footer-menu reset-list-style">
                                    <?php
                                    if (has_nav_menu('expanded')) {
                                        wp_nav_menu(
                                            array(
                                                'container' => '',
                                                'items_wrap' => '%3$s',
                                                'show_toggles' => true,
                                                'theme_location' => 'expanded',
                                            )
                                        );
                                    }
                                    ?>
                                </ul>

                            </nav>

                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="row inner_row">
                    <div class="col-md-6 col-lg-5 credits">
                        <div class="footer-credits">

                            <p class="footer-copyright">&copy;
                                <?php
                                echo date_i18n(
                                /* translators: Copyright date format, see https://www.php.net/date */
                                    _x('Y', 'copyright date format', 'twentytwenty')
                                );
                                ?> </p><!-- .footer-copyright -->
                            <p><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>

                            <p class="powered-by-wordpress">
                                <?php _e('All Rights Reserved', 'twentytwenty'); ?>
                            </p><!-- .powered-by-wordpress -->

                        </div><!-- .footer-credits -->
                    </div>
                    <div class="col-md-3">
                        <div class="social-wrapper">

                            <nav aria-label="<?php esc_attr_e('Social links', 'twentytwenty'); ?>"
                                 class="footer-social-wrapper">
                                <ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'social',
                                            'container' => '',
                                            'container_class' => '',
                                            'items_wrap' => '%3$s',
                                            'menu_id' => '',
                                            'menu_class' => '',
                                            'depth' => 1,
                                            'link_before' => '<span class="screen-reader-text">',
                                            'link_after' => '</span>',
                                            'fallback_cb' => '',
                                        )
                                    );
                                    ?>
                                </ul><!-- .footer-social -->
                            </nav><!-- .footer-social-wrapper -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>
