<header>
   <h2>this is the header</h2>

   <?php wp_nav_menu(array('theme_location' => 'primary_menu')); ?>
   <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>"
            width="<?php echo get_custom_header() -> width; ?>" alt=""/>

   <hr>
   <hr>
</header>
