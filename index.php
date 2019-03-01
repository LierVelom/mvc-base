<?php

// Define paths
define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app');
define('BASE_URL', 'http://mvc-base.dx2');
define('ASSETS', BASE_URL . '/assets');
// Load libraries from vendor directory
require BASE_PATH . '/vendor/autoload.php';
// Load core controller
require BASE_PATH . '/core/Core_Controller.php';
// Load core model
require BASE_PATH . '/core/Core_Model.php';
// Load base model
require BASE_PATH . '/core/Base_Model.php';
// Load helpers
require BASE_PATH . '/helpers/helpers.php';
// Initialize blade template
$blade = new Jenssegers\Blade\Blade('app/views', 'app/views/caches');
// Initialize router
$router = new Buki\Router([
    'paths' => [
        'controllers' => 'app/controllers'
    ]
]);
// Load routes
require BASE_PATH . '/router/routes.php';
// Run router
$router->run();

?>