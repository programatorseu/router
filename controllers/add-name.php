<?php
$app['database']->insert('posts', [
    'title' => $_POST['title']
]);
