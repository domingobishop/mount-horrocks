<?php
/**
 * Template Name: Homepage
 *
 */

get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div id="primary" class="content-area">
                <main id="content" class="site-content" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <div class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </div>

                            <div class="entry-content">

                                <?php the_content(); ?>

                                <?php get_template_part( 'partials/home-boxes' ); ?>

                            </div><!-- .entry-content -->

                        </article><!-- #post -->

                    <?php endwhile; ?>

                </main><!-- #content -->
            </div><!-- #primary -->

        </div>
    </div>
</div>

<?php get_footer(); ?>
