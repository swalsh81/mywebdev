<!DOCTYPE html>

<html>

<?php include("head.php"); ?>
<?php get_header(); ?>

    <?php
      if(is_home()){
        $bodyClasses = array();
      }
    ?>

    <body <?php body_class($bodyClasses); ?>>
        <?php
            if(have_posts()):
                while(have_posts()): the_post(); ?>
                    <h1> <?php the_title(); ?> </h1>
                    <div> <?php the_category(); ?></div>
                    <div> <?php the_time();  ?></div>
                    <div class='thumbnail-img'><?php the_post_thumbnail(); ?></div>
                    <div> <?php the_content();  ?></div>
                <?php
                endwhile;
            endif;
        ?>
    </body>

<?php get_footer(); ?>

</html>
