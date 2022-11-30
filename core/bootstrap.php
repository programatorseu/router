<?php
require __DIR__ . '/../utils/functions.php';

App::bind('config', require 'config.php');
App::bind('database', new Query(
    Database::connect(App::get('config'), 'root', 'Basia2501')
));
