<?php
require 'Database/Database.php';
require 'Database/Query.php';
$config = require 'config.php';

return new Query(Database::connect($config, 'root', 'Basia2501'));
