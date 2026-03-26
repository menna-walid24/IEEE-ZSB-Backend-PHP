<?php require base_path('Views/partials/header.php') ?>
<?php require base_path('Views/partials/nav.php') ?>
<?php require base_path('Views/partials/banner.php') ?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <p><?= htmlspecialchars($note['body']) ?></p>
<footer class="mt-6">
<a href="/note/edit?id=<?= $note['id']?>" class="inline-flex justify-center rounded-md border-transparent bg-gray-500 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit</a>

</footer>
       
    </div>
</main>

<?php require base_path('Views/partials/footer.php') ?>
