<article class="post-index <?php if(has_post_thumbnail()){?>has-thumbnail<?php } ?> ">
                
    <?php if(has_post_thumbnail()){ ?> <div class="post-thumbnail"> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?> </a> </div> <?php } ?>
    <div class='post-container'>
        <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

        <p class="post-info"><?php the_time('F jS, Y');?> 
            | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a>
            | <?php 
                    $categories = get_the_category();
                    $separator = ", ";
                    $output = "";

                    if($categories){
                        foreach($categories as $category){
                            $output .= '<a href="' . get_category_link($category->term_id) .'">' . $category->cat_name . '</a>' . $separator;
                        }
                        echo trim($output, $separator);
                    }
                ?>    
        </p>
        
        <?php if (is_search() OR is_home() OR is_archive()){ 
                the_excerpt();    
            }else{
                the_content();
            }
        ?>
    </div>    
</article>