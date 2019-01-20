<?php 
/**
 * The Template for displaying all single posts.
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
	
<div class="container post-wrap">
	<div class="row-fluid">
		<div id="container" class="span12">
			<div id="content">  
					<div class="post" id="post-<?php the_ID(); ?>">

						<div class="bread-title">
							<h2 class="title">
								<?php the_title(); ?>
							</h2>
							<div class="clearfix"></div>
						</div>

						<div class="skepost-meta clearfix">
						    <span class="date"><?php _e('<i class="fa fa-calendar"></i> ','eptima-lite');?> <?php the_time('F j, Y') ?></span><?php _e('&nbsp;&nbsp;','eptima-lite');?>
				            <span class="author-name"><?php _e('<i class="fa fa-user"></i> ','eptima-lite'); the_author_posts_link(); ?> </span><?php _e('&nbsp;&nbsp;','eptima-lite');?>
				            <?php if (has_category()) { ?><span class="category"><?php _e('In ','eptima-lite');?><?php the_category(','); ?></span><?php } ?>
							<?php the_tags('<span class="tags">By ',',','</span> '); ?>
							<span class="comments"><?php _e('<i class="fa fa-comments"></i> ','eptima-lite');?><?php comments_popup_link(__('No Comments','eptima-lite'), __('1 Comment ','eptima-lite'), __('% Comments ','eptima-lite')) ; ?></span>
				        </div>
						<!-- skepost-meta -->

						<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
						<div class="featured-image-shadow-box">
							<?php the_post_thumbnail('full'); ?>
						</div>
						<?php } ?>

						<div class="skepost">
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'eptima-lite' ) ); ?>
							<?php wp_link_pages(__('<p><strong>Pages:</strong> ','eptima-lite'), '</p>', __('number','eptima-lite')); ?>
						</div>
						<!-- skepost -->

						<div class="navigation"> 
							<span class="nav-previous"><?php previous_post_link( __('&larr; %link','eptima-lite')); ?></span>
							<span class="nav-next"><?php next_post_link( __('%link &rarr;','eptima-lite')); ?></span> 
						</div>
						<div class="clearfix"></div>
					</div>
				<!-- post -->
				<?php endwhile; ?>
				<?php else :  ?>

				<div class="post">
					<h2><?php _e('Not Found','eptima-lite'); ?></h2>
				</div>
				<?php endif; ?>
			</div><!-- content --> 
		</div><!-- container --> 

		<!-- Sidebar -->
		<div id="sidebar" class="span3">
			<?php get_sidebar(); ?>
		</div>
		<!-- Sidebar --> 

	</div>
 </div>
</div>
<?php get_footer(); ?>