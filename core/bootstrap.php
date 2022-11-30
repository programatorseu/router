<?php

use App\Core\App;
use App\Core\Database\Database;
use App\Core\Database\Query;

require __DIR__ . '/../utils/functions.php';

App::bind('config', require 'config.php');
App::bind('database', new Query(
    Database::connect(App::get('config'), 'root', '')
));
