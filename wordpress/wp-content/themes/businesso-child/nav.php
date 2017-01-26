<div class="container navbar-container-custom">
     <nav class="navbar navbar-default navbar-default-custom">
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