<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>
<div <?php post_class('post'); ?> id="post-<?php the_ID(); ?>">
		
        <div class="featured-image-shadow-box">
		<h1 class="post-title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a>
		</h1>
		<div class="skepost-meta clearfix">
		    <span class="date"><?php _e('<i class="fa fa-calendar"></i> ','eptima-lite');?> <?php the_time('F j, Y') ?></span><?php _e('&nbsp;&nbsp;','eptima-lite');?>
            <span class="author-name"><?php _e('<i class="fa fa-user"></i> ','eptima-lite'); the_author_posts_link(); ?> </span><?php _e('&nbsp;&nbsp;','eptima-lite');?>
            <span class="comments"><?php _e('<i class="fa fa-comments"></i> ','eptima-lite');?><?php comments_popup_link(__('No Comments','eptima-lite'), __('1 Comment ','eptima-lite'), __('% Comments ','eptima-lite')) ; ?></span>
        </div>
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
			<?php
					$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'eptima_lite_standard_img');
			?>
			<a href="<?php the_permalink(); ?>" class="image">
				<img src="<?php echo esc_url($thumbnail[0]); ?>" alt="<?php the_title(); ?>" class="featured-image alignnon"/>
			</a>
			
		<?php } ?>
		</div>

		<!-- skepost-meta -->
        <div class="skepost">
			<?php the_excerpt(); ?> 
			<div class="continue"><a href="<?php the_permalink(); ?>"><?php _e('Read More','eptima-lite');?></a></div>		  
        </div>
        <!-- skepost -->
</div>
<!-- post -->