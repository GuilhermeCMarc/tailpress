<?php get_header() ?>

<section id="portifolio">

    <div class="container mx-auto">
        <h1 class="text-center text-4xl font-bold text-gray-700 mb-4">Nossos Trabalhos</h1>

        <p class="text-center mx-auto max-w-prose">Eu eu duis semper eget eget. Placerat pellentesque donec consequat orci arcu, vivamus eu feugiat.</p>
    </div>

    <div class="px-4 lg:px-0 lg:grid-cols-4  grid-flow-row grid gap-5 mx-auto max-w-screen-lg py-5">

        <?php
        $cases_loop = new WP_Query(array('post_type' => 'portifolio', 'posts_per_page' => 4, 'max_num_pages' => 1));

        while ($cases_loop->have_posts()) {
            $cases_loop->the_post();
            echo get_template_part('template-parts/case');
        }
        ?>

    </div>

</section>

<?php get_footer() ?>