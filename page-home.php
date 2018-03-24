<?php
/**
 * Template Name: Homepage
 *
 */

get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="entry-content">

                    <?php the_content(); ?>

                    <?php get_template_part( 'partials/home-boxes' ); ?>

                </div><!-- .entry-content -->

            </article><!-- #post -->

        <?php endwhile; ?>

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
