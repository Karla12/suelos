<?php 
/**
 * Template Name: Clientes
 *
 * @package WordPress
 */
get_header(); ?>

<div class="main-wrapper-item"> 
	<!-- BreadCrumb Section // -->
	<div class="bread-title-holder">
		<div class="container">
			<div class="row-fluid">
				<div class="container_inner clearfix">
					<h1 class="title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
	<!-- \\ BreadCrumb Section -->
	<div class="page-content default-pagetemp">
		<div class="container post-wrap">
			<div class="row-fluid">
				<div id="content">
				<!--div class="row"-->
				<?php
					$clients = get_field('bussines', get_the_ID());
					foreach ($clients as $client) {
						$total = count($clients);
						$image = wp_get_attachment_image($client['bussines_image']['id'], 'thumbnail');
				?>
						<center>
							<div class="span3" data-toggle="modal" data-target="#myModal">
								<?php echo $image;?>
								<h3 class="post-title" style="text-transform: uppercase;" >
									<?php echo $client['bussines_description']; ?>
								</h3>
							</div>
						</center>
				<?php
					}
				 ?>
				</div>
				<div id="sidebar" class="span3">
					<?php get_sidebar('page'); ?>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>