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
				<h2 class="section_heading"><?php echo esc_attr( get_theme_mod( 'home_blog_title', __('Latest News', 'eptima-lite') ) ); ?></h2>
				<div class="botton_style"><span class="leftsquare"></span><span class="rightsquare"></span></div>
			</div>
		</div>

		<div class="row-fluid front-blog-wrap">
			<?php $eptima_lite_blogno = esc_attr( get_theme_mod('home_blog_num', '6' ) );
				$eptima_lite_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $eptima_lite_blogno,'ignore_sticky_posts' => true ) );
			?>
			<?php if ( $eptima_lite_lite_latest_loop->have_posts() ) : ?>

			<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $eptima_lite_lite_latest_loop->have_posts() ) : $eptima_lite_lite_latest_loop->the_post(); ?>
					<div class="span4">
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<?php the_excerpt(); ?>
						<div class="continue"><a href="<?php the_permalink(); ?>"><?php _e('Read More &rarr;','eptima-lite');?></a></div>		  
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