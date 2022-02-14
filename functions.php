<?php 
    add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_child_enqueue_styles' );
    function wp_bootstrap_starter_child_enqueue_styles() {
        $parenthandle = 'wp-bootstrap-starter-style';
        $theme = wp_get_theme();
        wp_enqueue_style( 
            $parenthandle, 
            get_template_directory_uri() . '/style.css',
            array(),
            $theme->parent()->get('Version') 
        ); 
        wp_enqueue_style(
            'child-theme-styles', 
            get_stylesheet_uri(), 
            $parenthandle,
            1.0
        );
        wp_enqueue_style(
            'style-hover-for-a-particular-button', 
            get_stylesheet_directory_uri() . "/assets/style-hover.css" ,
            array('child-theme-styles') ,
            1.0
        );
    }

    //Adds another footer widget spot (+1 footer widget)
    function wp_bootstrap_starter_child_widgets_init() {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer 4', 'wp-bootstrap-starter' ),
            'id'            => 'footer-4',
            'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-starter' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }
    add_action( 'widgets_init', 'wp_bootstrap_starter_child_widgets_init' );
    
    require_once("functions-folder/only-password.php");

    require_once("functions-folder/search-articles.php");

    require_once("functions-folder/thank-you-message.php");

    require_once("functions-folder/remove-footer-admin.php");

    require_once("functions-folder/disable-welcome-panel.php");

?>