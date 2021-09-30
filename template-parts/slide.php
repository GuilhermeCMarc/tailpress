<div class="swiper-slide container mx-auto lg:flex lg:flex-row-reverse lg:items-center lg:justify-between lg:my-20 px-0">

    <img class="w-full max-w-3xl rounded-lg lg:ml-10 mb-4 lg:mb-0" src="<?php echo get_field('image')['url'] ?>" alt="<?php echo get_field('image')['alt'] ?>">

    <div class="max-w-md mb-6 lg:mb-0 px-4 lg:px-0">

        <h1 class="text-3xl lg:text-4xl font-bold text-gray-800 text-center mb-4 lg:mb-8 lg:text-left"><?php echo get_field('title') ?></h1>

        <?php if (get_field('subtitle')) : ?>
            <h3 class="text-xl font-semibold text-gray-700 text-center  mb-4 lg:mb-8 lg:text-left"><?php echo get_field('subtitle') ?></h3>
        <?php endif ?>

        <a href="/contato">
            <button class="bg-pink-500 lg:max-w-xs hover:bg-pink-600 text-white font-bold text-2xl w-full text-center py-3 rounded-lg mt-2">
                Entrar em Contato
            </button>
        </a>

    </div>

</div>