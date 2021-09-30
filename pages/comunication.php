<?php /* Template Name: Estratégia de Comunicação */ ?>

<?php get_header() ?>

<!-- Estratégia de comunicação -->

<section id="estrategia-de-comunicacao" class="container mx-auto lg:flex lg:flex-row-reverse lg:items-center lg:justify-between my-10 mt-4 lg:my-20 mb-0 lg:mb-10">

    <h1 class="lg:hidden mb-4 text-2xl font-bold text-gray-700">Estratégia de Comunicação</h1>

    <img class="mb-4 lg:mb-0 w-full object-contain max-w-3xl rounded-lg lg:ml-10" src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_field('comunication_img')['alt'] ?>">

    <div class="max-w-md mb-6 lg:mb-0">

        <h1 class="hidden lg:inline text-2xl font-bold text-gray-700">Estratégia de Comunicação</h1>

        <p class="text-gray-400 my-2 mt-6">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>

    </div>

</section>

<!-- Conceito -->

<section id="conceito" class="container max-w-4xl lg:flex lg:items-center lg:justify-between mx-auto">

    <div class="max-w-lg">
        <h2 class="text-xl font-bold text-gray-700">Conceito Estratégia de Comunicação</h2>

        <p class="text-gray-400 my-2">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
    </div>

    <img src="<?php bloginfo('template_url') ?>/images/grafico-resultados.png" alt="Resultados">

</section>

<!-- Portifólio -->

<section id="portifolio" class="container mx-auto mt-6 mb-10 lg:mb-20 lg:mt-10">

    <h2 class="text-xl font-bold text-gray-700 lg:text-4xl lg:mb-6">Nossos Cases</h2>

    <div class="lg:grid lg:grid-cols-2 lg:gap-4 xl:grid-cols-4">

        <?php

        wp_reset_query();

        $cases_loop = new WP_Query(array('post_type' => 'portifolio', 'posts_per_page' => 4, 'max_num_pages' => 1));

        while ($cases_loop->have_posts()) {
            $cases_loop->the_post();
            echo '<div class="my-5 lg:my-0">';
            echo get_template_part('template-parts/case');
            echo "</div>";
        }

        wp_reset_query();

        ?>


    </div>

</section>

<?php get_footer() ?>