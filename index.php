<?php
//Requeste will always fall in index.php
require("data.php");

$controller = "index";

if ($uri = isset($_SERVER["PATH_INFO"])) {
    $controller = str_replace("/", "", $uri);
}
require("controllers/{$controller}.controller.php");
