<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<div class="main-wrapper-item">
	<div class="bread-title-holder">
		<div class="container">
			<div class="row-fluid">
				<div class="container_inner clearfix">
					<h1 class="title">
						<?php
						if ( is_day() ) :
							printf( __( 'Daily Archives : <span>%s</span>', 'eptima-lite' ), get_the_date() );
						elseif ( is_month() ) :
							printf( __( 'Monthly Archives : <span>%s</span>', 'eptima-lite' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'eptima-lite' ) ) );
						elseif ( is_year() ) :
							printf( __( 'Yearly Archives : <span>%s</span>', 'eptima-lite' ), get_the_date( _x( 'Y', 'yearly archives date format', 'eptima-lite' ) ) );
						else :
							_e( 'Blog Archives', 'eptima-lite' );
						endif;
						?>
					</h1>
					<?php 
						if ((class_exists('eptima_lite_breadcrumb_class'))) {$eptima_lite_breadcumb->eptima_lite_custom_breadcrumb();}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="container post-wrap"> 
		<div class="row-fluid">
			<div id="container" class="span12">
				<div id="content">
					<?php if(have_posts()) : ?>
					<?php $post = $posts[0]; ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>
						<div class="navigation blog-navigation">	
							<div class="alignleft"><?php previous_posts_link(__('&larr;Previous','eptima-lite')) ?></div>		
							<div class="alignright"><?php next_posts_link(__('Next&rarr;','eptima-lite'),'') ?></div>    						
						</div>  

					<?php else :  ?>
						<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
				<!-- content --> 
			</div>
			<!-- container --> 

			<!-- Sidebar -->
			<div id="sidebar" class="span3">
				<?php get_sidebar(); ?>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<!-- Sidebar --> 
		</div>
	</div>
</div>
<?php get_footer(); ?>