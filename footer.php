<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package S&C_-_Party_Tunes
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            <div id="footer-sidebar1">
                <?php
                if(is_active_sidebar('footer-widget')){
                    dynamic_sidebar('footer-widget');
                }
                ?>
                <p>© <a href="https://www.semicolonsandcoffee.com">Semicolons and Coffee</a></p>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
