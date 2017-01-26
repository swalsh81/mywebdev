<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
	$businesso_options=theme_default_data(); 
	$header_setting = wp_parse_args(  get_option( 'businesso_option', array() ), $businesso_options ); ?>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
	<?php  wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!-- Wrapper -->
<div id="wrapper">
<!--------Header--------------->
	<div class="header-section">
     <div class="container header-inner">
        <div class="row">
			<div class="col-md-6 site-logo">
				<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Businesso">
				<?php if($header_setting['upload_image_logo']) { ?>
				<img src="<?php  echo esc_url($header_setting['upload_image_logo']); ?>" style="height:<?php if($header_setting['height']!='') { echo esc_html($header_setting['height']); } ?>px; width:<?php if($header_setting['width']!='') { echo esc_html($header_setting['width']); } ?>px;" />
				<?php } else
					{ 
						echo get_bloginfo('name');
					} ?>
				</a></h2>
			</div>
           <div class="col-md-6">			
             <ul class="contact-top">
		        <li><i class="fa fa-envelope"></i><?php echo esc_attr($header_setting['header_info_mail']); ?></li>
				<li><i class="fa fa-phone"></i><?php echo esc_attr($header_setting['header_info_phone']); ?></li>
			 </ul>
          </div>			
		</div>
	</div>	
	<div class="container">
     <nav class="navbar navbar-default">
	     <div class="row">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only"><?php _e('Toggle navigation','businesso');?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					 <?php	wp_nav_menu( array(  
									'theme_location' => 'primary',
									'container'  => 'collapse navbar-collapse',
									'menu_class' => 'nav navbar-nav',
									'fallback_cb' => 'asiathemes_fallback_page_menu',
									'walker' => new asiathemes_nav_walker()
									)
								);	?> 
			<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform">
				<div class="col-md-2 input-group search-box-top pull-right">
				
				<input type="text" class="form-control" name="s" id="s"  aria-describedby="basic-addon2" placeholder="<?php esc_attr_e( "Search Here", 'businesso' ); ?>">
			    </div>
			</form>
		</div>
	</div>
 </nav>
</div>
</div>	
<!--------/Header--------------->