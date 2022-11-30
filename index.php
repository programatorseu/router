<?php

use App\Core\Request;
use App\Core\Router;

require 'vendor/autoload.php';
require 'core/bootstrap.php';

require Router::load('routes.php')->direct(Request::uri(), Request::method());
