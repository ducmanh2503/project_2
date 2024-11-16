<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();



//bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function () {
    return header("Location: admin");
});
$router->get("admin", [App\Controllers\SpController::class, "index"]);
$router->get("set-buffet", [App\Controllers\SpController::class, "getAllSetBuffet"]);
$router->get("them-moi-set-buffet", [App\Controllers\SpController::class, "formAddSetBuffet"]);
$router->post("them-moi-set-buffet", [App\Controllers\SpController::class, "addSetBF"]);
$router->get("xoa-set-buffet", [App\Controllers\SpController::class, "deleteSetBF"]);






# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
