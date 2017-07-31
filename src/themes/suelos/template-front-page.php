<?php
/*
Template Name: Home : Front Page Template
*/
get_header(); 
?>
<?php get_template_part( 'includes/front', 'featured-boxes-section' ); ?>

<?php get_template_part( 'includes/front', 'parallax-section' ); ?>

<?php if ( 'page' == get_option( 'show_on_front' ) ) {  ?>
<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div id="front-content-box" class="eptima-lite-section">
			<div class="container">
				 <div class="row-fluid"> 
						<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php } ?>

<?php  if( get_theme_mod('home_blog_sec', 'on') == 'on') { ?>
<div id="front-content-box" class="eptima-lite-section">
	<div class="container">
		<div class="row-fluid">
			<div class="sections_inner_content">
			<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div><br>
				<h2 class="section_heading"><?php echo esc_attr( get_theme_mod( 'home_blog_title', __('Latest News', 'eptima-lite') ) ); ?></h2>
				<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div><br><br><br>
			</div>
		</div>

		<div class="row">
			<?php $eptima_lite_blogno = esc_attr( get_theme_mod('home_blog_num', '20' ) );
				$eptima_lite_lite_latest_loop = new WP_Query(
					array( 'post_type' => 'post',
						'posts_per_page' => $eptima_lite_blogno,
						'0' => true,
						'category_name' => 'mecanica-suelos' ) );
			?>
			<?php if ( $eptima_lite_lite_latest_loop->have_posts() ) : ?>
			<?php while ( $eptima_lite_lite_latest_loop->have_posts() ) : $eptima_lite_lite_latest_loop->the_post(); ?>
					<div class="span3"><br><br>
						<h3 class="post-title" style="text-transform: uppercase;">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
							<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare">
						</h3>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'eptima-lite' ); ?></p>
			<?php endif; ?>
		</div>
		<br>
		<br><br>
		<div class="row-fluid">
			<div class="sections_inner_content">
				<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div><br>
				<h2 class="section_heading">CONSTRUCCIÓN ESPECIALIZADA</h2>
				<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div><br><br><br>
			</div>
		</div>

		<div class="row">
			<?php $posts_per_page = esc_attr( get_theme_mod('home_blog_num', '20' ) );
				$cat2 = new WP_Query(
					array( 'post_type' => 'post',
						   'posts_per_page' => $posts_per_page,
						   '0' => true,
						   'category_name' => 'construccion-especializada'
						)
					);
			?>
			<?php if ( $cat2->have_posts() ) : ?>
			<!-- pagination here -->
				<!-- the loop -->
				<?php while ( $cat2->have_posts() ) : $cat2->the_post(); ?>
					<div class="span3"><br><br>
						<h3 class="post-title" style="text-transform: uppercase;">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
							<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare">
						</h3>
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'eptima-lite' ); ?></p>
			<?php endif; ?>
		</div>
 	</div>
</div>
<?php } ?>

<?php get_footer(); ?>