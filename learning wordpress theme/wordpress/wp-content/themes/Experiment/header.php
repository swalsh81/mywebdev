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
            
            <div class='header-bar'>
                <div class='site-title'>
                    <h2><a href=" <?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
                    <h5><?php bloginfo('decription'); ?>
                        <?php 
                            if (is_page("home-page")){
                                echo " - Thank you for viewing our work.";
                            }
                        ?>
                    </h5>
                </div>
                
                <nav class="site-nav">
                    <?php wp_nav_menu(array('theme_location' => 'primary'));?>
                </nav>
                
                <div class="header-search">
                    <?php get_search_form(); ?>
                </div>
            </div>
        </header>