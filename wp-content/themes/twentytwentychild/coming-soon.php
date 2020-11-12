<?php
/**
 *
 * Template Name: Coming-soon
 *
 **/

get_header('blank'); ?>

    <main id="site-content" class="coming_soon" role="main">

        <?php

        if (have_posts()) {

            while (have_posts()) {
                the_post();

                get_template_part('template-parts/content', get_post_type());
            }
        }

        ?>

    </main><!-- #site-content -->
<?php get_footer('blank'); ?>