<?php require('partials/head.php') ?>

<?php require('partials/nav.php') ?>

<?php require('partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                        <?= $note['body'] ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

        <p class="mt-8">
            <a href="/notes/create" class="px-6 py-3 bg-blue-500 text-white rounded-md">Create Note</a>
        </p>
    </div>
</main>

<?php require('partials/footer.php') ?>