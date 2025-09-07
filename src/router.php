<?php
include_once __DIR__ . '/controllers/HomeController.php';
$controller = new HomeController();
$controller->index();

if (isset($_GET["page"]) && $_GET["page"] === "details") {
    include "details.php";
}