<?php get_header(); ?>

<!-- Blog Head -->

<section id="head" class="relative pt-20 lg:pt-40 pb-10">

	<img class="object-cover absolute h-full w-full z-0 top-0 left-0" style="z-index: -10;" src="<?php bloginfo('template_url') ?>/images/hq.jpg" alt="Blog">

	<div class="h-full w-full absolute top-0 left-0 z-0 bg-gradient-to-t from-black to-transparent" style="z-index: -5;"></div>

	<div class="container z-10 mx-auto">
		<h1 class="text-3xl font-bold text-white text-center mb-2">Nosso Blog</h1>
		<p class="text-center text-gray-100 max-w-prose mx-auto">
			Fique por dentro das melhores notícias e conteúdos sobre o mundo dos filmes, da música e da cultura em geral
		</p>
	</div>

</section>

<!-- Mais lidos -->

<section id="more-read" class="container mx-auto lg:max-w-7xl mb-6">

	<div class="grid grid-cols-2 gap-6">

		<div class="w-2/3">

			<?php

			$query = new WP_Query(array(
				'meta_key' => 'post_views_count',
				'orderby' => 'meta_value_num',
				'post_type' => 'post',
				'posts_per_page' => 4,
				'max_num_pages' => 1,
			));

			?>


			<?php if ($query->have_posts()) {
				$query->the_post();
				echo get_template_part('template-parts/post', 'big');
			} ?>

		</div>

		<div class="w-1/3 flex flex-col justify-between">
			<?php

			while ($query->have_posts()) {
				$query->the_post();
				echo get_template_part('template-parts/post');
			}

			?>
		</div>
	</div>

</section>

<div class="container max-w-4xl mx-auto my-8 lg:grid lg:grid-cols-5 lg:grid-rows-1 gap-5">

	<div class="lg:col-start-5 lg:col-end-6 filters">
		<?php echo do_shortcode('[searchandfilter submit_label="Filtrar" fields="search,category" search_placeholder="Buscar..." types=",checkbox" post_types="post" headings=", Categorias"]'); ?>
	</div>

	<div class="lg:col-start-1 lg:col-end-5 lg:row-start-1 ">

		<?php if (have_posts()) : ?>
			<?php
			while (have_posts()) :
				the_post();
			?>
				<div class="mb-6">
					<?php get_template_part('template-parts/post', 'big'); ?>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>

		<?php echo paginate_links() ?>

	</div>

</div>

<?php
get_footer();
