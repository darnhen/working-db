<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dannielle Bowman</title>
    <?= css('assets/css/global.css') ?> 
    <?= css('assets/css/styles.css') ?>
</head>
<body class="bg-black text-dbyellow md:bg-dbpurple lg:bg-dbyellow lg:text-black">

<?php if($page->isHomePage()): ?>
    <header class="pri-header fixed top-0 left-0 w-full my-8 p-7">
<?php else: ?>
    <header class="sec-header w-full my-8 p-7">
<?php endif ?>

        <nav class="flex flex-col items-center md:flex-row lg:items-start justify-between">
            <a class="nav-link text-7xl font-carta z-10" href="<?= url('work') ?>">Work</a>
            <a class="nav-title font-carta text-9xl leading-10 md:-translate-x-4 md:translate-y-2 lg:text-[15rem] lg:leading-[8rem]" href="<?= url('home') ?>">
            <?php if ($page->isHomePage()): ?>
                <h1 class="nav-title md:-translate-x-4 text-center font-carta text-7xl leading-10 md:text-9xl md:leading-[4rem] lg:text-[15rem] lg:leading-[8rem]">Dannielle Bowman</h1>
            <?php else: ?>
                <h1 class="text-center tracking-tighter md:py-0 py-5">DB</h1>
            <?php endif ?>
            </a>
            <a class="nav-link text-7xl font-carta z-10" href="<?= url('/#info') ?>">Info</a>
        </nav>

</header>