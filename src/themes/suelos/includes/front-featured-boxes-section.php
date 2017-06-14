<?php 
	$_featured_heading 		=  esc_attr( get_theme_mod('_featured_heading', __('AMAZING FEATURES', 'eptima-lite') ) );
	$_featured_desc			=  wp_kses_post( get_theme_mod('_featured_desc', __('No more tons of useless features!</br>All of our features created with functionality and design in mind.', 'eptima-lite') ) );
	
	$_featured_title1 		=  esc_attr( get_theme_mod('_featured_title1', __('CREATIVE TEAM', 'eptima-lite') ) );
	$_featured_content1 	=  wp_kses_post( get_theme_mod('_fb1_desc', __('All of our features created with functionality and design in mind. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard', 'eptima-lite') ) );
	$_featured_link1        =  esc_url( get_theme_mod('_fb1_first_part_link', '#' ) );
	
	$_featured_title2       =  esc_attr( get_theme_mod('_featured_title2', __('EASY TO CUSTOMIZE', 'eptima-lite') ) );
	$_featured_content2     =  wp_kses_post( get_theme_mod('_fb2_desc', __('All of our features created with functionality and design in mind. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard', 'eptima-lite') ) );
	$_featured_link2        =  esc_url( get_theme_mod('_fb2_second_part_link', '#' ) );
	
	$_featured_title3       =  esc_attr( get_theme_mod('_featured_title3', __('RESPONSIVE DESIGN', 'eptima-lite') ) );
	$_featured_content3     =  wp_kses_post( get_theme_mod('_fb3_desc', __('All of our features created with functionality and design in mind. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard', 'eptima-lite') ) );
	$_featured_link3        =  esc_url( get_theme_mod('_fb3_third_part_link', '#' ) );

 ?>
<div id="featured-box" class="eptima-lite-section">

	<!-- container -->
	<div class="container">
		<div class="sections_inner_content">
			<?php if ( $_featured_heading != '' ) { ?><h2 class="section_heading"><?php echo $_featured_heading; ?></h2><?php } ?>
			<?php if ( $_featured_desc != '' ) { ?><div class="section_description"><?php echo $_featured_desc; ?></div><?php } ?>
			<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div>
		</div>

		<!-- row-fluid -->
		<div class="mid-box-mid row-fluid">

			<!-- Featured Box 1 -->
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="eptima-lite-iconbox iconbox-top">		
					<div class="iconbox-icon eptima-lite-animated small-to-large eptima-lite-viewport">
						<div class="featured_inner">
							<div class="featured_icon">	
								<i class="fa fa-trophy"></i>
							</div>
							<h4><?php echo $_featured_title1; ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<a href="<?php echo $_featured_link1; ?>" title="<?php echo $_featured_title1; ?>"><?php echo $_featured_content1; ?></a>
					</div>			
				</div>
			</div>
			<!-- Featured Box 2 -->
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="eptima-lite-iconbox iconbox-top">		
					<div class="iconbox-icon eptima-lite-animated small-to-large eptima-lite-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<i class="fa fa-lightbulb-o"></i>
							</div>
							<h4><?php echo $_featured_title2; ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<a href="<?php echo $_featured_link2; ?>" title="<?php echo $_featured_title2; ?>"><?php echo $_featured_content2; ?></a>
					</div>			
				</div>
			</div>
						<!-- Featured Box 3 -->
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="eptima-lite-iconbox iconbox-top">
					<div class="iconbox-icon eptima-lite-animated small-to-large eptima-lite-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
									<i class="fa fa-rocket"></i>
							</div>
							<h4><?php echo $_featured_title3; ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<a href="<?php echo $_featured_link3; ?>" title="<?php echo $_featured_title3; ?>"><?php echo $_featured_content3; ?></a>
					</div>				
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- row-fluid -->
		
	</div>
	<!-- container -->
</div>