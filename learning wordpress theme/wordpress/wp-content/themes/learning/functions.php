<?php

function learningWordPress_resources(){
    
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'learningWordPress_resources');


//Get Top Ancestor

function get_top_ancestor_id(){
    
    global $post;
    
    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    
    return $post -> ID;
}

// Does page have children

function has_children(){
    
    global $post;
    
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

/*
 Replace the_excerpt "more" text with a link
 */
function new_excerpt_more($more) {
    global $post;
    return '... <a class="more-link" href="'. get_permalink($post->ID) . '"> Continue Reading &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');


//Custom excerpt length

function custom_excerpt_length(){
    return 75;
}

add_filter('excerpt_length', 'custom_excerpt_length');

//add supports

function learning_setup(){
    
    register_nav_menus(array('primary' => __('Primary Menu'),
                            'footer' => __('Footer Menu')
                    ));

    //Images
    add_theme_support( 'post-thumbnails' , array('post'));
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));

    //Post Formats 
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'learning_setup');

// add widget locations

function widget_loc_init(){
    
    register_sidebar(array('name' => 'Sidebar', 'id' => 'sidebar1'));
    register_sidebar(array('name' => 'Footer Area 1', 'id' => 'footer1'));
    register_sidebar(array('name' => 'Footer Area 2', 'id' => 'footer2'));
    register_sidebar(array('name' => 'Footer Area 3', 'id' => 'footer3'));
    register_sidebar(array('name' => 'Footer Area 4', 'id' => 'footer4'));
}

add_action('widgets_init', 'widget_loc_init');

//Custom Apearance

function learn_customize_register($wp_customize){
    
    $wp_customize -> add_section('learn_standard_colors', array('title' => __('Standard Colors', 'Learning'),
                                                               'priority' => 30));
    
    $wp_customize -> add_setting('learn_link_color', array('default' => '#006ec3', 
                                                          'transport' => 'refresh'));
    
    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'Learning Link Color Control', array('label' => __('Link Color', 'Learning'), 
                                                                                                                   'section' => 'learn_standard_colors',
                                                                                                                   'settings' =>'learn_link_color')));

    $wp_customize -> add_setting('learn_button_color', array('default' => '#006ec3', 
                                                          'transport' => 'refresh'));
    
    
    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'Learning Button Color Control', array('label' => __('Button Color', 'Learning'), 
                                                                                                                   'section' => 'learn_standard_colors',
                                                                                                                   'settings' =>'learn_button_color')));
}

add_action('customize_register', 'learn_customize_register');

//Output customize css

function learning_customize_css(){ ?>
    <style type="text/css">
        a:link, a:visited{
            color: <?php echo get_theme_mod('learn_link_color'); ?>;
        }
        
        .site-header nav ul li.current-menu-item a:link,
        .site-header nav ul li.current-menu-item a:visited,
        .site-header nav ul li.current-page-ancestor a:link,
        .site-header nav ul li.current-page-ancestor a:visited{
            background-color: <?php echo get_theme_mod('learn_link_color'); ?>;
        }
    </style>
<?php }

add_action('wp_head', 'learning_customize_css');

//add footer callout to customize

function learning_footer_callout($wp_customize){
    $wp_customize -> add_section('learning_footer_callout_section', array('title' => 'Footer Callout'));

    $wp_customize -> add_setting('learning_footer_callout_display', array('default' => 'No'));
    
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'learning-footer-callout-display-control', array('label' => 'Display Section?', 
                                                                                                                          'section' => 'learning_footer_callout_section',
                                                                                                                          'settings' => 'learning_footer_callout_display',
                                                                                                                          'type' => 'select',
                                                                                                                          'choices' => array('No' => 'No', 'Yes' => 'Yes'))));
    
    
    $wp_customize -> add_setting('learning_footer_callout_headline', array('default' => 'Headline Text'));
    
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'learning-footer-callout-headline-control', array('label' => 'Headline', 
                                                                                                                          'section' => 'learning_footer_callout_section',
                                                                                                                          'settings' => 'learning_footer_callout_headline')));
    
    $wp_customize -> add_setting('learning_footer_callout_paragraph', array('default' => 'Paragraph Text'));
    
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'learning-footer-callout-paragraph-control', array('label' => 'Paragraph', 
                                                                                                                          'section' => 'learning_footer_callout_section',
                                                                                                                          'settings' => 'learning_footer_callout_paragraph',
                                                                                                                          'type' => 'textarea')));
    
    $wp_customize -> add_setting('learning_footer_callout_link');
    
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, 'learning-footer-callout-link-control', array('label' => 'Link', 
                                                                                                                          'section' => 'learning_footer_callout_section',
                                                                                                                          'settings' => 'learning_footer_callout_link',
                                                                                                                            'type' => 'dropdown-pages')));
    
    $wp_customize -> add_setting('learning_footer_callout_image');
    
    $wp_customize -> add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'learning-footer-callout-image-control', array('label' => 'Image', 
                                                                                                                          'section' => 'learning_footer_callout_section',
                                                                                                                          'settings' => 'learning_footer_callout_image',
                                                                                                                            'width' => 750,
                                                                                                                            'height' => 500)));

}

add_action('customize_register', 'learning_footer_callout');


































?>