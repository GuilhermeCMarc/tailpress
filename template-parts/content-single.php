<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4">
		<h1 class="text-4xl font-bold my-4 text-gray-700"><?php the_title() ?></h1>
		<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="text-sm text-primary-600 font-semibold"><?php echo get_the_date(); ?></time>
	</header>

	<p class="text-gray-400 mb-4"><?php echo get_the_excerpt() ?></p>

	<div class="flex justify-between max-w-xs mb-4">
		<a class="font-semibold text-blue-700" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>">Facebook</a>
		<a class="font-semibold text-blue-500" target="_blank" rel="noopener noreferrer" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink() ?>&text=<?php echo get_the_title() ?>">Twitter</a>
		<a class="font-semibold text-red-600" target="_blank" rel="noopener noreferrer" href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink() ?>&media=&description=<?php echo get_the_title() ?>">Pinterest</a>
		<a class="font-semibold text-blue-500" target="_blank" rel="noopener noreferrer" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink() ?>&title=<?php echo get_the_title() ?>">Linkedin</a>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>

		<h3 class="text-gray-700 mt-4 font-bold">Gostou? Manda pros amigos!</h3>

		<div class="flex justify-between max-w-xs mt-2 my-4">
			<a class="font-semibold text-blue-700" target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>">Facebook</a>
			<a class="font-semibold text-blue-500" target="_blank" rel="noopener noreferrer" href="https://twitter.com/intent/tweet?url=<?php echo get_permalink() ?>&text=<?php echo get_the_title() ?>">Twitter</a>
			<a class="font-semibold text-red-600" target="_blank" rel="noopener noreferrer" href="http://pinterest.com/pin/create/button/?url=<?php echo get_permalink() ?>&media=&description=<?php echo get_the_title() ?>">Pinterest</a>
			<a class="font-semibold text-blue-500" target="_blank" rel="noopener noreferrer" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink() ?>&title=<?php echo get_the_title() ?>">Linkedin</a>
		</div>


		<?php
		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'tailpress') . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __('Page', 'tailpress') . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			)
		);
		?>
	</div>

</article>