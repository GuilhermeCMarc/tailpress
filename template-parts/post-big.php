<article id="post-<?php echo get_the_ID() ?>" class="">

    <?php

    $url = get_the_post_thumbnail_url();
    $alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
    $excerpt = get_the_excerpt();

    ?>

    <a href="<?php echo get_the_permalink() ?>">
        <img class="rounded-lg object-cover w-full" src="<?php echo $url  ?>" alt="<?php echo $alt ?>">
    </a>

    <div class="my-4">

        <h4 class="text-lg font-semibold text-gray-700"><?php the_title() ?></h4>

        <time class="text-primary-600 my-1 text-sm"><?php echo get_the_date('', get_the_ID()) ?></time>

        <p class="text-gray-400 text-sm"><?php echo strlen($excerpt) > 100 ? substr($excerpt, 0, 100) . "..." : $excerpt  ?></p>

    </div>

</article>