<?php
$app = [];
require __DIR__ . '/../utils/functions.php';
$app['config'] = require 'config.php';



$app['database'] = new Query(Database::connect($app['config'], 'root', 'Basia2501'));
