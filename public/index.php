<?php
\chdir(\dirname(__DIR__));

(function() {
    require_once 'vendor/autoload.php';
    $httpApplication = new \KiwiSuite\Application\HttpApplication("bootstrap");
    $httpApplication->run();
})();
