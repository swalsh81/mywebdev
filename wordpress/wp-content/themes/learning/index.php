<?php
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            <?php the_title();?>
            <?php the_author(); ?>
        
        <?php 
        endwhile;
    else :
        echo '<p> No content found</p>';
    endif;

?>
