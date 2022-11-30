<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <h2>Submit name</h2>
    <form class="ml-4 flex items-center md:ml-6" action="/posts" method="post">
        <input type="text" name="title" />
        <button type="submit">Submit</button>
    </form>
</div>

<?php require('partials/footer.php'); ?>