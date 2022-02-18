<?php

function connexionBDD()
{
    require_once __DIR__ . '/models/SimpleOrm.php';
    $connexion = new mysqli('localhost', 'root', 'root');

    if ($connexion->connect_error) die(sprintf('Impossible de se connecter à la BDD. %s', $connexion->connect_error));

    SimpleOrm::useConnection($connexion, 'projet_php');
}

function error()
{
    die('Error 404');
}
function url(string $route = 'home'): string
{
    return 'index.php?route=' . $route;
}
