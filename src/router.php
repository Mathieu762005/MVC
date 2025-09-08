<?php
$id = isset($_GET["id"]) ? (int) $_GET["id"] : null;

if (isset($_GET["page"]) && $_GET["page"] === "details") {
    include_once __DIR__ . '/controllers/DetailsController.php';
    $controller = new DetailsController();
    $controller->index($id);
} else {
    include_once __DIR__ . '/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
}
