<?php get_header();
$businesso_option=theme_default_data(); 
$post_options = wp_parse_args(  get_option( 'businesso_option', array() ), $businesso_option );
if($post_options['post_slider_enabled'] == 1 ) {
get_template_part('blog','postslider'); } ?>
<div class="clearfix"></div>
<!-- Page Title Section -->
<?php asiathemes_breadcrumbs(); ?>
<!-- /Page Title Section -->
<!---------Blog-Section------------------------------>
<section class="blog-section">
  <div class="container">
     <div class="row">
	 <!---------Blog Area------------->
	    <div class="col-md-9">
		  <div class="row blog-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<div class="blog-page-section animate" data-anim-type="fadeInUp" data-anim-delay="400">
		 <?php
					if(have_posts()) :
					while(have_posts()) :
							the_post(); ?>
		     <div class="blog-area">
				<div class="blog-post-img">
				<?php $default=array('class'=>'img-responsive');
						if(has_post_thumbnail())
						{ ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('',$default); ?></a>
					<?php } else {?>
					<a href="<?php the_permalink(); ?>"><?php echo '<img alt="" src="'. get_template_directory_uri() . '/images/placeholder.jpg' .'">';?></a>
					<?php } ?>
				</div>
				<div class="blog-post-detail">
					<div class="col-md-9">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><i class="fa fa-user"></i> <?php the_author(); ?></a>
						 &nbsp;&nbsp;<a href="#"><i class="fa fa-tag"></i><?php the_tags('', ', '); ?></a>
						 &nbsp;<a href="#"><i class="fa fa-comment"></i><?php comments_popup_link( '0', '1', '%', '', '-'); ?></</a>
						 </div>
				<div class="blog-post-date"><span class="date"><?php echo get_the_date('j'); ?><small><?php echo get_the_date('M'); ?></small></span>
					</div>		
				</div>
				<div class="clear"></div>
				   <div class="blog-post-title">
					<div class="blog-post-title-wrapper">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt( __( 'More' , 'businesso' ) ); ?>	
						<?php wp_link_pages( array( 'before' => '<div class="blog-pagination animate" data-anim-type="fadeInLeft">' . __( 'Pages:', 'businesso' ), 'after' => '</div>' ) ); ?>
						<div class="btn-left-area">
					      <a href="<?php the_permalink(); ?>" class="main-btn btn-more btn-left"><?php _e('More','businesso');?>
						</a>
					  </div>
					</div>
				</div>	
			</div> 
<?php endwhile; endif; ?>			
	</div>
</div>
			   
			<div class="blog-pagination animate" data-anim-type="fadeInLeft">	   
			  <?php echo paginate_links( 
				array( 
                'show_all' => true,
                'prev_text' => '<<', 
                'next_text' => '>>', )); ?>
			</div> 			
		</div>
		<!-----Right Sidebar------------>
		<?php get_sidebar();?> 	
	 </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- Footer -->
<?php get_footer(); ?>