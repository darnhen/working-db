<?php snippet('header')?>

<main class="block m-10">
<h3 class="client uppercase bold font-sans text-center my-2"> <?= $page->client() ?> </h3>

<h2 class="project-title font-times text-center text-5xl mb-5"><?= $page->title() ?></h2>

<figure class="flex flex-col items-center justify-between md:h-[675px]">
    <img id="hero-image" class="w-full md:h-full md:w-auto" src="<?= $page->images()->first()->url() ?>">
</figure>


<?php if ($page->images()->count() > 1): ?>
        <ul class="project-slides flex gap-2.5 m-8 overflow-x-scroll">
        <?php foreach ($page->images() as $item): ?>
            <li>
                <?= $item ?>
            </li>
        <?php endforeach ?>
        </ul>
    <?php endif ?>



    <section class="gap-5 flex flex-col md:flex-row ">
        <article class="project-desc w-auto md:w-1/2">
            <?php if ($page->description()->isNotEmpty()): ?>
                <p>
                <?= kirbytext($page->description()) ?>
                </p>
            <?php endif ?>

            <?php if ($page->attribution()->isNotEmpty()): ?>
                <p class="attribute mt-5 font-courier track-tight">
                    <?= $page->attribution() ?>
                </p>
            <?php endif ?>
        </article>

       
        <aside class="gallery-biblio">
            <ul>
            <?php foreach ($page->images() as $mama): ?>
                <li>                    
                    <span class="slide-title"><em> 
                    <?= $mama->slideTitle() ?></em></span>, <span class="slide-date"><?= $mama->slideDate() ?>.</span>
                    <span class="slide-materials">
                    <?= $mama->slideMaterial() ?>
                </li>
            <?php endforeach ?>
            </ul>
        </aside>
    </section>

</main>

<?= js('assets/js/carousel.js') ?>

</body>
</html>