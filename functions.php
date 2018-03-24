<?php

function mh_styles() {
    wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css.min', array(), '3.3.7', 'all' );
    wp_register_style( 'google-fonts',
        'https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic|Roboto+Slab:400,700', array(), 1.0, 'all' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'google-fonts' );
}
add_action( 'wp_enqueue_scripts', 'mh_styles' );

if (function_exists('register_sidebar')) {
     register_sidebar(array(
      'name' => 'Shop Widget',
      'id'   => 'shop-widget',
      'description'   => 'Widget Area',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h1 class="entry-title">',
      'after_title'   => '</h1>'
     ));
    }

// Password Protected Page Message

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    ' . __( "Welcome to the Members Area." ) . '
	<p>This shop is password protected. To view it please enter your password below:</p>
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
	<p><strong>Free freight</strong> for orders of 6 bottles or more.</p>
	<p><strong>You must be 18 years or older to enter the Mount Horrocks online shop. By clicking ‘Submit’ you are verifying this.</strong></p>
	<p>Having trouble logging in to purchase? Just phone us on (08) 8849 2243, or email <a href="mailto:sales@mounthorrocks.com">sales@mounthorrocks.com</a> and we can help.</p>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

