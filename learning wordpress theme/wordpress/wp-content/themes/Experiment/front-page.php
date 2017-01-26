<?php

    get_header();?>

    <div class='fixed-bkg bkg-panel-1'></div>
    <?php
    if(have_posts()) :
        while(have_posts()) : the_post(); ?>
            <article class="post page">
                <?php the_content();?>
            </article>
        <?php 
        endwhile;
    else :
        echo '<p> No content found</p>';
    endif;

    //opinion post loop

    $opinionPosts = new WP_Query('cat=1&posts_per_page=2');

    if($opinionPosts -> have_posts()) :
        while($opinionPosts -> have_posts()) : 
            $opinionPosts -> the_post(); ?>

            <h2><?php the_title(); ?></h2>

        <?php endwhile;
    else :
        
    endif;
    wp_reset_postdata();

    get_footer();
?>
