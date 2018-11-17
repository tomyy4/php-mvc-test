<?php

require 'Router.php';
require 'database/Connection.php';
$config = require 'config.php';
Connection::connect($config['database']);