<article id="case-<?php echo the_ID() ?>" class="relative bg-gray-900 h-full rounded-lg flex flex-col justify-between">

    <?php

    $url = get_the_post_thumbnail_url();
    $alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    $excerpt = get_the_excerpt();

    ?>

    <img class="object-cover h-56 lg:h-48 w-full z-20 rounded-t-lg -mb-10" src="<?php echo $url ?>" alt="<?php echo $alt ?>">

    <div class="bg-gradient-to-t from-gray-900 to-transparent h-56 lg:h-48 w-full absolute top-0 left-0 z-30"></div>

    <div class="z-50 flex flex-col pt-auto p-4 pt-0">

        <h4 class="text-2xl font-semibold text-white"><?php the_title() ?></h4>

        <p class="text-white mt-2 mb-4"><?php echo strlen($excerpt) > 100 ? substr($excerpt, 0, 100) . "..." : $excerpt ?></p>

        <a href="<?php echo get_the_permalink() ?>">
            <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold text-2xl w-full text-center py-3 rounded-lg mt-2">
                Ver Projeto
            </button>
        </a>
    </div>

</article>