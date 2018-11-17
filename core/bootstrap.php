<?php

require 'Router.php';
require 'autoloader.php';
require 'database/Connection.php';
$config = require 'config.php';
Connection::connect($config['database']);