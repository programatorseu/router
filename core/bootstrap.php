<?php
$app = [];

require __DIR__ . '/../utils/functions.php';
require 'Database/Database.php';
require 'Database/Query.php';
$app['config'] = require 'config.php';
require 'core/Request.php';
require 'core/Router.php';



$app['database'] = new Query(Database::connect($app['config'], 'root', 'Basia2501'));
