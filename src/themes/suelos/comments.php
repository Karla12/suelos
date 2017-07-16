<?php
/**
 * The template for displaying Comments.
 * The area of the page that contains comments and the comment form.
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
?>

<?php
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die(__('Please do not load this page directly. Thanks!','eptima-lite'));
	if ( post_password_required() ) { ?>
   <p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','eptima-lite'); ?></p>
<?php
		return;
	}
?>

<!-- You can start editing here. -->
<div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = 'https://3by-com.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<script id="dsq-count-scr" src="//3by-com.disqus.com/count.js" async></script>

<!--div id="commentsbox">
<?php if ( have_comments() ) : ?>
	<h3 id="comments"><?php comments_number(__('No Comment','eptima-lite'), __('One Comment','eptima-lite'), __('% Comments','eptima-lite') );?><?php _e(' so far:','eptima-lite'); ?></h3>
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="comment-nav">
		<div class="alignleft">
			<?php previous_comments_link() ?>
		</div>

		<div class="alignright">
			<?php next_comments_link() ?>
		</div>
	</div>

<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( ! comments_open() && ! is_page() ) : ?>
		<?php _e('Comments are closed.','eptima-lite'); ?>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div id="comment-form">
		<?php comment_form(); ?>
	</div>
<?php endif; // if you delete this the sky will fall on your head ?>
</div-->