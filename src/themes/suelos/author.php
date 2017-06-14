<?php 
/**
* The template for displaying Author archive pages.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*/
get_header(); ?>

<div class="main-wrapper-item">
	<div class="bread-title-holder">
		<div class="container">
			<div class="row-fluid">
				<div class="container_inner clearfix">
					<h1 class="title">
						<?php  $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
						<?php _e('Author Archives : ','eptima-lite'); echo $curauth->display_name;  ?>
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
			<div id="container" class="span9">
				<div id="content">
					<?php if(have_posts()) : ?>
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
			</div>
			<!-- Sidebar -->
		</div>
	</div>
</div>
<?php get_footer(); ?>