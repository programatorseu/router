<?php
$db = require 'core//bootstrap.php';

$posts = $db->selectAll('posts');
var_dump($posts);
