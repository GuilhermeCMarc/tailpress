<?php /* Template Name: Home */ ?>

<!-- Hero -->

<?php get_header() ?>

<section id="hero" class="bg-gradient-to-tr from-primary-500 to-primary-400 pt-28 pb-10 -mt-28">

    <div class="swiper container mx-auto">

        <div class="swiper-wrapper">

            <?php

            $slider_loop = new WP_Query(array('post_type' => 'home_slider', 'posts_per_page' => 0, 'max_num_pages' => 1));

            while ($slider_loop->have_posts()) {
                $slider_loop->the_post();
                echo get_template_part('template-parts/slide');
            }

            ?>

        </div>

    </div>

    <script defer>
        var slider = new Swiper('.swiper', {
            spaceBetween: 50,
            autoplay: {
                delay: 3000,
            },
        })
    </script>

</section>

<!-- Últimos Cases -->

<section id="portifolio" class="container mx-auto mt-6 lg:mt-10">

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

<!-- Sobre Nós -->

<section id="sobre-nos" class="container mx-auto lg:flex lg:items-center lg:justify-between my-10 lg:my-20 px-0">

    <div class="max-w-md mb-6 lg:mb-0 px-4 lg:px-0">

        <h2 class="text-2xl font-bold text-gray-700">Sobre nós</h2>

        <p class="text-gray-400 my-2 mt-6">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2 mb-6">Nova jornada vindo por aí. Uma história que começou pelo YouTube no canal Hobbz, depois passou pela produtora Hfilmz, agora se consolidando como uma agência Hipopótamo de Biquíni. Muita história e muita comunicação a se fazer. Vamos nos conectar?</p>

        <a href="/sobre" class="">
            <h4 class="text-black font-semibold underline uppercase">conheça-nos</h4>
        </a>

    </div>

    <img class="w-full max-w-3xl lg:rounded-lg lg:ml-10" src="<?php echo get_field('about_img')['url'] ?>" alt="<?php echo get_field('about_img')['alt'] ?>">

</section>

<!-- Audiovisual -->

<section id="audiovisual" class="container mx-auto lg:flex lg:flex-row-reverse lg:justify-between lg:items-center my-10 lg:my-20 px-0">

    <div class="max-w-md mb-6 lg:mb-0 px-4 lg:px-0">

        <h2 class="text-2xl font-bold text-gray-700">Audiovisual</h2>

        <p class="text-gray-400 my-2 mt-6">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2 mb-6">Nova jornada vindo por aí. Uma história que começou pelo YouTube no canal Hobbz, depois passou pela produtora Hfilmz, agora se consolidando como uma agência Hipopótamo de Biquíni. Muita história e muita comunicação a se fazer. Vamos nos conectar?</p>

        <a href="/audiovisual" class="">
            <h4 class="text-black font-semibold underline uppercase">conheça-nos</h4>
        </a>

    </div>

    <img class="w-full max-w-3xl lg:rounded-lg lg:mr-10" src="<?php echo get_field('audiovisual_img')['url'] ?>" alt="<?php echo get_field('audiovisual_img')['alt'] ?>">

</section>

<!-- Estratégia de comunicação -->

<section id="estrategia-de-comunicacao" class="container mx-auto lg:flex lg:items-center lg:justify-between my-10 lg:my-20 px-0 mb-0 lg:mb-10">

    <div class="max-w-md mb-6 lg:mb-0 px-4 lg:px-0">

        <h2 class="text-2xl font-bold text-gray-700">Estratégia de Comunicação</h2>

        <p class="text-gray-400 my-2 mt-6">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2 mb-6">Nova jornada vindo por aí. Uma história que começou pelo YouTube no canal Hobbz, depois passou pela produtora Hfilmz, agora se consolidando como uma agência Hipopótamo de Biquíni. Muita história e muita comunicação a se fazer. Vamos nos conectar?</p>

        <a href="/sobre" class="">
            <h4 class="text-black font-semibold underline uppercase">conheça-nos</h4>
        </a>

    </div>

    <img class="w-full object-contain max-w-3xl lg:rounded-lg lg:ml-10" src="<?php echo get_field('comunication_img')['url'] ?>" alt="<?php echo get_field('comunication_img')['alt'] ?>">

</section>

<!-- Podcast -->

<section id="podcast" class="relative flex flex-col items-stretch justify-end lg:flex-row lg:items-center min-h-screen bg-black">

    <div class=" container mx-auto z-20">

        <div class="lg:max-w-sm my-11">

            <h2 class="text-4xl font-bold text-pink-500">Podcast</h2>

            <p class="text-gray-100 my-4">Vel eget euismod tellus sed nisl habitasse. Nulla sit sit aliquet etiam massa. Sagittis nibh diam nunc dignissim. Et pulvinar elit scelerisque turpis nulla orci.</p>
            <p class="text-gray-100 my-4">Vel eget euismod tellus sed nisl habitasse. Nulla sit sit aliquet etiam massa. Sagittis nibh diam nunc dignissim. Et pulvinar elit scelerisque turpis nulla orci.</p>

            <a href="/podcasts">
                <button class="bg-pink-500 hover:bg-pink-600 text-white font-bold text-2xl w-full text-center py-3 rounded-lg mt-2">
                    Quero Escutar
                </button>
            </a>

        </div>

    </div>

    <div class="podcast-img z-10" alt="Podcast"></div>

</section>

<!-- Blog -->

<section id="audiovisual" class="container mx-auto lg:flex lg:justify-between lg:items-center my-10 mt-0 lg:my-20 px-0">

    <img class="w-full max-w-3xl lg:rounded-lg lg:mr-10 mb-8 lg:mb-0" src="<?php echo get_field('blog_img')['url'] ?>" alt="<?php echo get_field('blog_img')['alt'] ?>">

    <div class="max-w-md mb-6 lg:mb-0 px-4 lg:px-0">

        <h2 class="text-2xl font-bold text-gray-700">Nosso blog é incrível!</h2>

        <p class="text-gray-400 my-2 mt-6">Sodales eget tortor, sit phasellus cursus. Mi cursus nunc tellus purus. Non facilisi in felis, parturient. Ac purus congue mattis non ultrices dictumst elit blandit aliquet.</p>
        <p class="text-gray-400 my-2 mb-6">Nova jornada vindo por aí. Uma história que começou pelo YouTube no canal Hobbz, depois passou pela produtora Hfilmz, agora se consolidando como uma agência Hipopótamo de Biquíni. Muita história e muita comunicação a se fazer. Vamos nos conectar?</p>

        <a href="/blog">
            <button class="bg-gray-500 lg:max-w-sm hover:bg-gray-600 text-white font-bold text-2xl w-full text-center py-3 rounded-lg mt-2">
                Conheça nosso blog
            </button>
        </a>

    </div>

</section>

<!-- Últimos posts -->
<section id="last-posts" class="container mx-auto">

    <h2 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-5">Últimas Postagens</h2>

    <div class="lg:grid lg:grid-cols-4 lg:gap-6">

        <?php

        wp_reset_query();

        $blog_loop = new WP_Query(array('posts_per_page' => 4, 'max_numpages' => 1));

        while ($blog_loop->have_posts()) {
            $blog_loop->the_post();
            echo get_template_part('template-parts/post');
        }

        ?>
    </div>

</section>


<?php get_footer() ?>