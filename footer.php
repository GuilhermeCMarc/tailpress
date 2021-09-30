</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-primary-400 py-12 px-6" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>

	<h3 class="text-3xl text-gray-800 mb-4 font-bold">Fala com a gente!</h3>

	<p class="text-gray-700 mb-4">Teve alguma ideia massa e quer tirá-la do papel?</p>

	<div class="footer-contact">

		<?php echo do_shortcode('[contact-form-7 id="24" title="Contato Footer"]'); ?>

	</div>

	<hr class="border-primary-600 my-4">

	<div class="flex flex-col">

		<a class="text-gray-600" href="phone">(XX) XXXX-XXXX</a>
		<a class="text-gray-600" href="mailto:email">exemplo@email.com</a>

	</div>

	<hr class="border-primary-600 my-4">

	<div class="flex justify-between items-center mb-4">

		<a href="facebook" target="_blank" rel="noopener noreferrer">
			<img src="<?php bloginfo('template_url') ?>/images/icons/facebook.png" alt="Facebook">
		</a>
		<a href="vimeo" target="_blank" rel="noopener noreferrer">
			<img src="<?php bloginfo('template_url') ?>/images/icons/vimeo.png" alt="Vimeo">
		</a>
		<a href="tiktok" target="_blank" rel="noopener noreferrer">
			<img src="<?php bloginfo('template_url') ?>/images/icons/tiktok.png" alt="TikTok">
		</a>
		<a href="instagram" target="_blank" rel="noopener noreferrer">
			<img src="<?php bloginfo('template_url') ?>/images/icons/instagram.png" alt="Instagram">
		</a>
		<a href="twitter" target="_blank" rel="noopener noreferrer">
			<img src="<?php bloginfo('template_url') ?>/images/icons/twitter.png" alt="Twitter">
		</a>
		<a href="linkedin" target="_blank" rel="noopener noreferrer">
			<img src="<?php bloginfo('template_url') ?>/images/icons/linkedin.png" alt="Linkedin">
		</a>
		<a href="youtube" target="_blank" rel="noopener noreferrer">
			<img src="<?php bloginfo('template_url') ?>/images/icons/youtube.png" alt="Youtube">
		</a>

	</div>


	<div class="container mx-auto text-center text-primary-700">
		Copyright &copy; <?php echo date_i18n('Y'); ?> - <?php echo get_bloginfo('name'); ?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>