<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package team02
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="Row">
			<div class="Column">
			<?php
			if(is_active_sidebar('footer-sidebar-1')){
			dynamic_sidebar('footer-sidebar-1');
			}
			?>
			</div>
			<div class="Column">
			<?php
			if(is_active_sidebar('footer-sidebar-2')){
			dynamic_sidebar('footer-sidebar-2');
			}
			?>
			</div>
			<div class="Column">
			<?php
			if(is_active_sidebar('footer-sidebar-3')){
			dynamic_sidebar('footer-sidebar-3');
			}
			?>
			</div>
		</div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
