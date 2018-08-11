<?php 

    if ( ! is_active_sidebar( 'blog_sidebar' ) ) {
        return;
    }

    dynamic_sidebar( 'blog_sidebar' );
?>