<?php
if (isset($_GET["page"]) && $_GET["page"] === "details") {
    include "views/details.php";
} else {
    include_once __DIR__ . '/controllers/HomeController.php';
    $controller = new HomeController();
    $controller->index();
}