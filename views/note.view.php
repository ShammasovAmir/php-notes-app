<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="/notes" class="px-6 py-3 bg-blue-500 text-white rounded-md">Go back</a>
        </div>

        <p>
            <?= $note['body'] ?>
        </p>
    </div>
</main>

<?php require('partials/footer.php') ?>