<?php



register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'html-reset' ),
    'sidebar' => __( 'SideBar Menu', 'html-reset' ),
    'footer' => __( 'Footer Menu', 'html-reset' ),
) );
function jms_primary_menu() {
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'navbar',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );

}
function jms_sidebar_menu() {
            wp_nav_menu( array(
                'menu'              => 'sidebar',
                'theme_location'    => 'sidebar',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );

}
function jms_footer_menu() {
            wp_nav_menu( array(
                'menu'              => 'footer',
                'theme_location'    => 'footer',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );

}



?>
