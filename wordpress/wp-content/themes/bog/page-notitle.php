<?php /*
    Template Name: Page No Title
*/ ?>
<!DOCTYPE html>

<html>

<?php include("head.php"); ?>
<?php get_header(); ?>

    <body >
        <?php
            if(have_posts()){
              while(have_posts()){
                  the_post();
                  the_content();
              }
            }
        ?>
    </body>

<?php get_footer(); ?>

</html>
