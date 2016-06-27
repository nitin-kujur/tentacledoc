				<?php hybrid_get_sidebar( 'primary' ); // Loads the sidebar/primary.php template. ?>

			</div><!-- #main -->

			<?php hybrid_get_sidebar( 'subsidiary' ); // Loads the sidebar/subsidiary.php template. ?>

		</div><!-- .wrap -->

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<div class="wrap text-center container">

				<?php hybrid_get_menu( 'social' ); // Loads the menu/social.php template. ?>

				<p class="credits">
					<?php printf(
						// Translators: 1 is current year, 2 is site name/link, 3 is WordPress name/link, and 4 is theme name/link. */
						__( 'Copyright &#169; <a href="http://sunoray.com/">%1$s</a> 2013 - %2$s. Powered by <a href="http://sunoray.com/tentacle/">Tentacle</a>'),//Powered by Tentacle %3$s and %4$s.', 'stargazer' ),
						'Sunoray',date_i18n( 'Y' ) //, hybrid_get_site_link(), hybrid_get_wp_link(), hybrid_get_theme_link()


					); ?>
				</p><!-- .credit -->

			</div><!-- .wrap -->

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>