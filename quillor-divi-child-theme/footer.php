<?php
/**
 * Fires after the main content, before the footer is output.
 *
 * @since ??
 */
do_action( 'et_after_main_content' );

if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					echo et_get_footer_credits();
				?>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); 
	
	if(is_page( 'Stories' )){
		?>
		<script >
				var container = document.querySelector('#filterposts .et_pb_ajax_pagination_container');
				//var inputSearch = document.querySelector('[data-ref="input-search"]');
				var keyupTimeout;

				var mixer = mixitup(container, {
					animation: {
						effects: 'fade',
						duration: 700
					},
					selectors: {
						target: 'article',
					},
					callbacks: {
						onMixEnd: function(state) {
							console.log(state)
						}
					}
				});
				
	
				//mixer.filter('all');
				
		</script>
	<?php } ?>
	<script>
		document.addEventListener('DOMContentLoaded', function(){
			new Cocoen();
		});
	</script>
</body>
</html>
