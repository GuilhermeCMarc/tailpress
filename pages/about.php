<?php /* Template Name: Sobre */ ?>

<?php get_header() ?>


<section id="about">

    <div class="container mx-auto mb-4">
        <h1 class="text-4xl text-gray-700 font-bold">Sobre nós</h1>
    </div>

    <div class="lg:px-10 xl:px-20">
        <img class="object-contain bg-primary-500 object-bottom lg:rounded-lg mx-auto w-full max-h-96" src="<?php bloginfo('template_url') ?>/images/logomarca.jpg" alt="">
    </div>

</section>

<section class="px-4 lg:px-0 mx-auto max-w-4xl py-4">

    <!-- Timeline -->
    <div class="my-6">

        <div class="relative mb-4">

            <h3 class="text-7xl font-bold opacity-25 text-gray-200 absolute top-1/2 -translate-y-1/2 -right-8 -rotate-90">2012</h3>

            <div class=" w-2/3">
                <img class="h-44 object-contain shadow-lg rounded-lg" src="<?php bloginfo('template_url') ?>/images/hobbz.png" alt="Hobbz">

                <h3 class="text-xl font-bold text-gray-700 mt-4 mb-2">Hobbz</h3>

                <p>Em 2012 uma paixão pelo cubo mágico fez surgir um dos principais canais de YouTube para jogos e esportes amadores, o Hobbz.</p>

            </div>


            <img class="mx-auto my-4" src="<?php bloginfo('template_url') ?>/images/arrow.svg" alt="Flecha">

        </div>

        <div class="relative mb-4">

            <h3 class="text-7xl  font-bold opacity-25 text-gray-200 absolute top-1/2 -translate-y-1/2 -left-10 -rotate-90">2015</h3>

            <div class="ml-auto w-2/3">
                <img class="h-44 object-contain shadow-lg rounded-lg" src="<?php bloginfo('template_url') ?>/images/hfilmz.png" alt="Hfilmz">

                <h3 class="text-xl font-bold text-gray-700 mt-4 mb-2">Hfilmz</h3>

                <p>A experiência no audiovisual e na comunicação nos levaram ao primeiro vídeo publicitário em 2015. O vídeo feito para o Ministério da Educação - INEP na divulgação do Enem veiculado nas redes sociais foi o divisor de águas do que viria pela frente. Surgia a produtora HFILMZ.</p>

            </div>

            <img class="mx-auto my-4" src="<?php bloginfo('template_url') ?>/images/arrow.svg" alt="Flecha">

        </div>

        <div class="relative mb-4">

            <h3 class="text-7xl font-bold opacity-25 text-gray-200 absolute top-1/2 -translate-y-1/2 -right-8 -rotate-90">2020</h3>

            <div class="w-2/3">
                <img class="h-44 object-contain shadow-lg rounded-lg" src="<?php bloginfo('template_url') ?>/images/hpb.png" alt="Hipopótamo de Biquíni">

                <h3 class="text-xl font-bold text-gray-700 mt-4 mb-2">Hipopótamo de Biquíni</h3>

                <p>Pela HFILMZ realizamos trabalhos publicitários, videoclipes e até cinema. No fim de 2020 a Hipopótamo de Bíquini surgiu, com esse arcabouço de quase uma década de comunicação. Hoje somos uma equipe formada de diversas áreas que convergem para a melhor entrega aos nossos clientes: jornalismo, publicidade, design e cinema.</p>

            </div>

        </div>

    </div>

    <p class="mb-4">A Hipopótamo de Biquíni é uma agência de estratégia digital e audiovisual que chegou para ficar!</p>

    <p class="mb-4">A promoção de produtos, pessoas ou marcas por meio das plataformas digitais é uma das principais maneiras que empreendedores têm para se comunicar com o público de forma direta e rápida. Com a pandemia do coronavírus, as redes sociais se tornaram o principal canal de vendas e funcionamento dos estabelecimentos.</p>

    <img class="w-full mb-4" src="<?php bloginfo('template_url') ?>/images/logo-elements.png" alt="Elementos da Logo">

    <p class="mb-4">O Marketing Digital se tornou uma ferramenta fundamental para quem quer se destacar na internet, mas, qual é a melhor estratégia? Qual é a melhor ação e posicionamento da sua marca nas redes? </p>

    <p class="mb-4">É para isso que a Hipopótamo de Biquíni está aqui! Somos uma equipe de profissionais responsáveis por criar, analisar e executar os melhores planejamentos e ações estratégicas, para você e sua empresa alcançarem a médio e longo prazo o engajamento necessário para suas mídias digitais! </p>

    <p class="mb-4">Entregamos Especializações: produção audiovisual, publicidade, comunicação, mídias sociais, anúncios, videoclipes, infoprodutos, podcasts, lançamentos e cinema</p>

    <p class="mb-4">Siga o nosso perfil aqui no insta e fique por dentro de todas as nossas ações!.........Ou mande aquela mensagem marota pra gente e marque um café, ou chá, gostamos de chá. Saiba como podemos ajudar você a alavancar seu empreendimento</p>

</section>

<section id="our-team" class="max-w-4xl px-4 lg:px-0 mx-auto py-8 lg:py-16">

    <h3 class="text-2xl text-center font-bold text-gray-700 mb-4">Nosso time</h3>

    <p class="text-center mx-auto max-w-prose">Magnis diam viverra ac et, id. Ullamcorper a amet, nunc elementum tortor donec pretium, at pharetra. Lorem rutrum maecenas sed laoreet morbi in. Commodo quis volutpat quis dictumst. </p>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 grid-flow-row mt-6">

        <?php

        $loop = new WP_Query(array('post_type' => 'team', 'posts_per_page' => 0));

        while ($loop->have_posts()) {
            $loop->the_post();
            echo get_template_part('template-parts/person');
        }
        ?>

    </div>

</section>

<?php get_footer() ?>