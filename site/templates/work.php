<?php snippet('header')?>
<div class="flex justify-between p-5">
    <button class="studioButton border-dbyellow lg:border-black border-2 border-solid rounded-lg py-2.5 px-5 uppercase font-sans font-bold cursor-pointer hover:rounded-full transition-all">Studio</button>
    <button class="commissionButton border-dbyellow lg:border-black border-2 border-solid rounded-lg py-2.5 px-5 uppercase font-sans font-bold cursor-pointer hover:rounded-full transition-all">Commissions</button>
</div>

<main class="grid grid-cols-1">
    
        <?php foreach ($page->children() as $item): ?>
        
        <?php if($image = $item->image()): ?>

            <article style="background-image: url('<?= $image->url() ?>')" class="project h-screen bg-cover <?= $item->tags() ?>">
            <?php endif ?>
                <a href="<?= $item->url()?>"> 
                    <div class="metadata h-4/5 relative left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex justify-between flex-col">

                        <h2 class="text-center font-times track-tight text-dbbrown text-7xl leading-[.9]"> 
                            <?= $item->title() ?> 
                        </h2>

                        <footer class="metadata flex justify-between pt-7 px-7">
                            <div class="date font-sans font-bold text-3xl text-white">
                                <?= $item->date() ?> 
                            </div>

                        <?php if ($page->client()->isNotEmpty()): ?>
                            <div class="font-sans font-bold text-3xl text-white">
                                <?= $item->client() ?> 
                            </div>
                        <?php endif ?>
                        </footer>
                    </div>
                </a> 
            </article>

        <?php endforeach ?>
        
</main>

<?= js('assets/js/another-button.js') ?>

</body>
</html>