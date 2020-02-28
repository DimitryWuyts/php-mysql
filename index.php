<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'classes/connection.php';
require 'classes/data.php';
require 'controllers/homepageController.php';
require 'controllers/query.php';
require 'controllers/profileController.php';
require 'controllers/loginController.php';

if (!isset($_GET['user'])) {
    $controller = new Controller();
    $controller->render();
} else {
    $profileController = new profileController();
    $profileController->render();
}
