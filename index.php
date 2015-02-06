<?php

ini_set('display_errors','On');

// Library files
require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Database.php';
require 'libs/Model.php';
require 'libs/View.php';
require 'libs/Sessionsah.php';

// Config files
require 'config/paths.php';
require 'config/database.php';
require 'config/constants.php';


$app = new Bootstrap();
