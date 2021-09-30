<?php /* Template Name: Podcast */ ?>

<?php get_header() ?>

<!-- Podcasts -->

<section id="podcasts" class="container mx-auto">

    <h1 class="text-4xl font-bold text-pink-500 mb-8">Podcasts</h1>

    <div class="relative mb-8" style="padding-top: 56.25%">
        <iframe class="rounded-lg absolute inset-0 w-full h-full" src="<?php echo get_field('teaser_url') ?>" frameborder="0" allowfullscreen></iframe>
    </div>

</section>


<!-- Conceito -->

<section id="conceito" class="container mx-auto lg:max-w-4xl mb-20">

    <h2 class="text-3xl font-bold text-pink-500 mb-4">Conceito</h2>

    <p class="text-gray-100 my-4">Vel eget euismod tellus sed nisl habitasse. Nulla sit sit aliquet etiam massa. Sagittis nibh diam nunc dignissim. Et pulvinar elit scelerisque turpis nulla orci.Vel eget euismod tellus sed nisl habitasse. Nulla sit sit aliquet etiam massa. Sagittis nibh diam nunc dignissim. Et pulvinar elit scelerisque turpis nulla orci.</p>

    <p class="text-gray-100 my-4">Vel eget euismod tellus sed nisl habitasse. Nulla sit sit aliquet etiam massa. Sagittis nibh diam nunc dignissim. Et pulvinar elit scelerisque turpis nulla orci.</p>

    <p class="text-gray-100 my-4">Vel eget euismod tellus sed nisl habitasse. Nulla sit sit aliquet etiam massa. Sagittis nibh diam nunc dignissim. Et pulvinar elit scelerisque turpis nulla orci.Vel eget euismod tellus sed nisl habitasse. Nulla sit sit aliquet etiam massa. Sagittis nibh diam nunc dignissim. Et pulvinar elit scelerisque turpis nulla orci.</p>

</section>

<!-- Serviços -->

<section id="serviços" class="container lg:max-w-4xl mx-auto mb-20">

    <h3 class="text-2xl font-bold text-pink-500 mb-4">Serviços inclusos</h3>

    <div class="grid grid-cols-1 lg:grid-cols-2 grid-flow-row gap-5">


        <!-- Captação de Áudio e Vídeo -->

        <div>

            <img class="w-full rounded-lg object-cover object-center h-48 lg:h-52 shadow-lg" src="<?php bloginfo('template_url') ?>/images/podcasts/podcast-equipment.jpg" alt="Captação de Áudio e Vídeo">

            <h4 class="text-lg mt-2 font-semibold text-pink-500">Captação de Áudio e Vídeo</h4>

            <p class="text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, iste.</p>

        </div>


        <!-- Estúdio próprio -->

        <div>

            <img class="w-full rounded-lg object-cover object-center h-48 lg:h-52 shadow-lg" src="<?php bloginfo('template_url') ?>/images/podcasts/studio.jpg" alt="Estúdio próprio">

            <h4 class="text-lg mt-2 font-semibold text-pink-500">Estúdio próprio</h4>

            <p class="text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, iste.</p>

        </div>


        <!-- Transmissão ao Vivo -->

        <div>

            <img class="w-full rounded-lg object-cover object-center h-48 lg:h-52 shadow-lg" src="<?php bloginfo('template_url') ?>/images/podcasts/live.jpg" alt="Transmissão ao Vivo">

            <h4 class="text-lg mt-2 font-semibold text-pink-500">Transmissão ao Vivo</h4>

            <p class="text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, iste.</p>

        </div>


        <!-- Equipe Completa -->

        <div>

            <img class="w-full rounded-lg object-cover object-center h-48 lg:h-52 shadow-lg" src="<?php bloginfo('template_url') ?>/images/podcasts/team.jpg" alt="Equipe Completa">

            <h4 class="text-lg mt-2 font-semibold text-pink-500">Equipe Completa</h4>

            <p class="text-gray-100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, iste.</p>

        </div>

    </div>

</section>


<!-- Últimos Cases -->

<section id="portifolio" class="container mx-auto mt-6 lg:mt-10">

    <h2 class="text-xl font-bold text-pink-500 lg:text-4xl lg:mb-6">Nossos Cases</h2>

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