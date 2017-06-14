<?php 
/**
* The template for displaying all pages.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages and that other
* 'pages' on your WordPress site will use a different template.
*
*/
get_header(); ?>

<div class="main-wrapper-item"> 
	<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	
	<!-- BreadCrumb Section // -->
				<div class="bread-title-holder">
					<div class="container">
						<div class="row-fluid">
							<div class="container_inner clearfix">
								<h1 class="title"><?php the_title(); ?></h1>
								<?php 
								if ((class_exists('eptima_lite_breadcrumb_class'))) {$eptima_lite_breadcumb->eptima_lite_custom_breadcrumb();}
								?>
							</div>
						</div>
					</div>
				</div>
	<!-- \\ BreadCrumb Section -->

	<div class="page-content default-pagetemp">
		<div class="container post-wrap">
			<div class="row-fluid">
				<div id="content" class="span9">
					<div class="post" id="post-<?php the_ID(); ?>">
						<div class="skepost clearfix">
							<?php the_content(); ?>
							<?php wp_link_pages(__('<p><strong>Pages:</strong> ','eptima-lite'), '</p>', __('number','eptima-lite')); ?>
						</div>
					<!-- skepost --> 
					<?php edit_post_link('Edit', '', ''); ?>	
					<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
					} ?>
					</div>
					<!-- post -->

					<?php endwhile; ?>
					<?php else :  ?>
						<div class="post">
							<h2><?php _e('Page Does Not Exist','eptima-lite'); ?></h2>
						</div>
					<?php endif; ?>
						<div class="clearfix"></div>
				</div>
				<!-- content -->

				<!-- Sidebar -->
				<div id="sidebar" class="span3">
					<?php get_sidebar('page'); ?>
				</div>
				<div class="clearfix"></div>
				<!-- Sidebar --> 
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>