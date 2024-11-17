<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();



//bắt đầu định nghĩa ra các đường dẫn
$router->get('/', function () {
    return header("Location: admin");
});

// set buffet----------------------------------------------------------------------------
$router->get("admin", [App\Controllers\SpController::class, "index"]);
$router->get("set-buffet", [App\Controllers\SpController::class, "getAllSetBuffet"]);
$router->get("them-moi-set-buffet", [App\Controllers\SpController::class, "formAddSetBuffet"]);
$router->post("them-moi-set-buffet", [App\Controllers\SpController::class, "addSetBF"]);
$router->get("xoa-set-buffet", [App\Controllers\SpController::class, "deleteSetBF"]);
$router->get("cap-nhat-set-buffet", [App\Controllers\SpController::class, "editSetBF"]);
$router->post("cap-nhat-set-buffet", [App\Controllers\SpController::class, "updateSetBF"]);

//Loại Món Ăn----------------------------------------------------------------------------
$router->get("loai-mon-an", [App\Controllers\LoaiMonAnCtrl::class, "getAllLMA"]);
$router->get("them-moi-loai-mon-an", [App\Controllers\LoaiMonAnCtrl::class, "formAddLoaiMon"]);
$router->post("them-moi-loai-mon-an", [App\Controllers\LoaiMonAnCtrl::class, "addLoaiMon"]);
$router->get("cap-nhat-loai-mon-an", [App\Controllers\LoaiMonAnCtrl::class, "editLoaiMon"]);
$router->post("cap-nhat-loai-mon-an", [App\Controllers\LoaiMonAnCtrl::class, "updateLoaiMon"]);

// Món Ăn----------------------------------------------------------------------------
$router->get("mon-an", [App\Controllers\MonAnController::class, "getAllListMA"]);
$router->get("them-moi-mon-an", [App\Controllers\MonAnController::class, "FormAddMA"]);
$router->post("them-moi-mon-an", [App\Controllers\MonAnController::class, "addMA"]);
// $router->get("xoa-mon-an", [App\Controllers\MonAnController::class, "deleteMA"]);
$router->get("cap-nhat-mon-an", [App\Controllers\MonAnController::class, "editMA"]);
$router->post("cap-nhat-mon-an", [App\Controllers\MonAnController::class, "updateMA"]);

// Bàn----------------------------------------------------------------------------
$router->get("danh-sach-ban", [App\Controllers\BanController::class, "getAllTables"]);
$router->get("dat-ban", [App\Controllers\BanController::class, "formDatBan"]);
$router->post("dat-ban", [App\Controllers\BanController::class, "DATBAN"]);

// Cài đặt----------------------------------------------------------------------------
$router->get("cai-dat", [App\Controllers\BanController::class, "getAllTables"]);
















# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;
