<main class="block m-10">

<?php if ($page->template() == 'project.gallery'): ?>

<?php elseif ($page->template() == 'project.video'): ?>

<?php endif ?>

</main>

<?= js('assets/js/carousel.js') ?>

</body>
</html>