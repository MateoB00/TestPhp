<?php

include __DIR__ . '/fonctions.php';

connexionBDD();


if (!empty($_GET["route"])) $route = $_GET["route"];
else $route = "home";


switch ($route) {
    case 'home':
        include __DIR__ . '/controllers/home-controller.php';
        break;

    default:
        error();
}
