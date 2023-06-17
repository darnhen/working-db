<?php snippet('header')?>

<main id="home-landing" class="md:grid grid-cols-10">

<?php $image = $page->images()->sortBy('sort') ?>

    <img class="lg:col-span-6 col-start-6 col-end-7" src="
    <?= $image->first()->url() ?>" alt="">

    <div class="color-block lg:bg-dbbrown md:row-start-2  md:col-start-1 md:row-end-4 md:col-end-7"></div>

    <img class="lg:row-start-2 lg:col-start-6 lg:row-end-3 lg:col-end-7 md:row-start-2 md:col-start-7 md:row-end-3 md:col-end-11"  src="<?= $image->nth(1)->url() ?>" alt="">

    <img class="lg:row-start-3 lg:col-start-7 lg:row-end-4  lg:col-end-11 md:row-start-3 md:col-start-3 md:row-end-4 md:col-end-11" src="<?= $image->nth(2)->url() ?>" alt="">

    <img class="lg:row-start-4 lg:col-start-1 lg:col-end-7 md:row-start-4 md:col-start-1 md:col-end-3" src="<?= $image->nth(3)->url() ?>" alt="">
    <?php ?>

</main>

<section class="flex flex-col justify-end gap-5 h-screen mt-20 ml-5 mr-5 md:mt-10 md:ml-10 md:mr-10 pb-5 md:pb-10">

    <div id="info" class="bio font-courier leading-5 bg-black z-20 pt-5 md:bg-transparent">
        <p>
        <?= $page->info() ?>
        </p>
    </div>

    <div class="contact-links">
        <button class="border-dbyellow lg:border-black border-2 border-sol  rounded-lg py-2.5 px-5 uppercase font-sans font-bold cursor-point hover:rounded-full transition-all">
            → Email
        </button>

        <button class="border-dbyellow lg:border-black border-2 border-sol  rounded-lg py-2.5 px-5 uppercase font-sans font-bold cursor-point hover:rounded-full transition-all">
            ↓ CV
        </button>
    </div>

    <div class="info-links gap-5 flex flex-col md:flex-row font-courier">
        <div class="news">
            <h3>News</h3>
            <?= $page->news() ?>
    </div>

    <div class="info-links gap-5 flex flex-col md:flex-row font-courier">
        <div class="press">
            <h3>Press</h3>
            <?= $page->press() ?>
    </div>

    

</section>

    
    
</body>
</html>
