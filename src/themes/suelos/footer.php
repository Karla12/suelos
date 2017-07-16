<?php
/**
* The template for displaying the footer.
*
* Contains footer content and the closing of the
* #main and #page div elements.
*
*/
?>
	<div class="clearfix"></div>
</div>
<!-- #main --> 

<!-- #footer -->
<div id="footer" class="eptima-lite-section">
	<?php
	if (is_home()) {
	?>
	<div class="container">
		<div class="row-fluid">
			<div class="second_wrapper"><br>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row-fluid">
			<div class="second_wrapper">
				<?php //dynamic_sidebar( 'footer-sidebar' );
					?>
					<div class="clearfix">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.9517507425307!2d-99.01391347077364!3d19.377507664317513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fd32d6451893%3A0x35719ab086ab57ef!2sAdolfo+Duclos+Salinas+81%2C+Zona+Urbana+Ejidal+Santa+Martha+Acatitla+Nte.%2C+09140+Ciudad+de+M%C3%A9xico%2C+CDMX!5e0!3m2!1sen!2smx!4v1498576530489" width="1200" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div><!-- second_wrapper -->
		</div>
	</div>
	<?php } ?>
	<div class="third_wrapper">
		<div class="container">
			<div class="row-fluid">
			<?php
			if (is_home()) {
			?>
				<div id="copyright" class="copyright span6"><?php echo wp_kses_post( get_theme_mod('_copyright') ) ; ?><br>
				</div>
			<?php
			} else {
				?>
				<div id="copyright" class="copyright span6"><?php echo wp_kses_post( get_theme_mod('_copyright') ) ; ?><br>
					Calle Adolfo Duclos Salinas #81
					Interior 1, <br>Colonia Ampliación Santa Martha Acatitla,<br>
					Delegación Iztapalapa, CDMX.
				</div>
				<?php
				}
			?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div><!-- third_wrapper --> 
</div>
<!-- #footer -->
	<a href="JavaScript:void(0);" title="<?php _e('Back To Top', 'eptima-lite'); ?>" id="backtop"></a>
	<?php wp_footer(); ?>
</body>
</html>