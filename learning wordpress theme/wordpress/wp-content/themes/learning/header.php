<!DOCTYPE html>
<html <?php  language_attributes(); ?> >
    
    <head>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    
<body<?php body_class();?>>
    <div class="container">
    <!-- site-header -->
        <header class="site-header">
            
            <div class="header-search">
                <?php get_search_form(); ?>
            </div>
            
            <h1><a href=" <?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            <h5><?php bloginfo('decription'); ?>
                <?php 
                    if (is_page("home-page")){
                        echo " - Thank you for viewing our work.";
                    }
                ?>
            </h5>
            
            <nav class="site-nav">
                <?php wp_nav_menu(array('theme_location' => 'primary'));?>
            </nav>
        
        </header>