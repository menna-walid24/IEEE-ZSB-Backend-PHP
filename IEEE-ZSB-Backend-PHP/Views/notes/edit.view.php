<?php
require base_path('views/partials/header.php');
require base_path('views/partials/nav.php');
require base_path('views/partials/banner.php');
?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">

            <div class="col-span-full">
                <label for="body" class="block text-sm/6 font-medium text-gray-900">Note Content</label>
                <div class="mt-2">
                    <textarea
                        id="body" 
                        name="body" 
                        rows="5" 
                        placeholder="Update your thought here..." 
                        class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                    ><?= $note['body'] ?? '' ?></textarea>
                </div>
            </div>

            <?php if (isset($errors['body'])) : ?>
                <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
            <?php endif; ?>

           
            <div class="mt-6 flex items-center justify-end gap-x-4">
               
                <a href="/note?id=<?= $note['id'] ?>" 
                   class="rounded-md px-3 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-200">
                    Cancel
                </a>
                
               
                <button type="submit"
                        class="inline-flex justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Update Note
                </button>
            </div>
        </form>
    </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
