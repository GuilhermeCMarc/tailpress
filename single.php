<?php get_header(); ?>

<img class="w-full lg:rounded-lg mx-auto lg:max-w-7xl object-cover object-center h-52 lg:h-96" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_the_title() ?>">

<div class="container max-w-prose my-8 mx-auto">

	<?php
	if (function_exists('yoast_breadcrumb')) {
		yoast_breadcrumb('</p><p id=“breadcrumbs”>', '</p><p>');
	}
	?>

	<?php if (have_posts()) : ?>

		<?php
		while (have_posts()) :
			the_post();
		?>

			<?php get_template_part('template-parts/content', 'single'); ?>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
