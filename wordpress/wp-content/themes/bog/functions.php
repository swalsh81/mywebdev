<?php
    function enqueue_files(){
      // header
        wp_enqueue_style("bog_style", get_template_directory_uri() . "/css/bog.css", array(), '0.0.1', 'all');

      // footer
        wp_enqueue_script("bog_script", get_template_directory_uri() . "/js/bog.js", array(), '0.0.1', true);
    }

    add_action('wp_enqueue_scripts', 'enqueue_files');

    function theme_setup(){
        add_theme_support('menu');

        register_nav_menu('primary_menu', 'Primary Menu');
        register_nav_menu('footer_menu', 'Footer Menu');
    }

    add_action('after_setup_theme', 'theme_setup');

    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnail');
?>
