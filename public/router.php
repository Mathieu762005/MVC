<?php
use App\controllers\DetailsController;
use App\controllers\HomeController;

$id = isset($_GET["id"]) ? (int) $_GET["id"] : null;

if (isset($_GET["page"]) && $_GET["page"] === "details") {
    $controller = new DetailsController();
    $controller->index($id);
} else {
    $controller = new HomeController();
    $controller->index();
}
