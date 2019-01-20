<div id="featured-box" class="eptima-lite-section">

	<!-- container -->
	<div class="container">
		<div class="sections_inner_content">
			<h2 class="section_heading"><?php echo get_field('title', 'option'); ?></h2>
			<div class="section_description"><?php echo get_field('description_title', 'option'); ?></div>
			<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div><br><br>
		</div>

		<!-- row-fluid -->
		<div class="mid-box-mid row-fluid">
		<?php
		$count = 1;
		$values = get_field('values', 'options');
		foreach ($values as $value) {
			$image = wp_get_attachment_image($value['image_our_values']['id'], 'thumbnail');
			?>
			<div class="mid-box span4 fade_in_hide element_fade_in">
				<div class="eptima-lite-iconbox iconbox-top">		
					<div class="iconbox-icon eptima-lite-animated small-to-large eptima-lite-viewport">
						<div class="featured_inner">
							<div class="featured_icon">
								<?php echo $image; ?>
							</div>
							<h4><?php echo $value['title_our_valores']; ?></h4>
						</div>
					</div>		
					<div class="iconbox-content">		
						<a href="" title=""><?php echo $value['description_our_values']; ?></a>
					</div>			
				</div>
			</div>
		<?php
			//$count++;
		}
		//var_dump($images);
		?>
			<div class="clearfix"></div>
		</div>
		<!-- row-fluid -->
		
	</div>
	<!-- container -->
</div>