<div id="navbar" class="navbar">
    <nav id="site-navigation" class="navigation main-navigation" role="navigation">
        <div class="logo-box"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mh_logo.png"></div>
        <h3 class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></h3>
        <a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
    </nav><!-- #site-navigation -->
</div><!-- #navbar -->