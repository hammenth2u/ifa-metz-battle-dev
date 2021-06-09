<?php

// étape 0 : à ne faire qu'une seule fois dans votre projet
// inclure le fichier autoload de Composer, qui se charge de charger toutes vos dépendances
require_once __DIR__."/../vendor/autoload.php";

// étape incontournable si je veux instancier mon controller
// il faut bien que PHP soit au courant de l'existence de la classe
require_once __DIR__."/../app/controllers/MainController.php";

// j'instancie mon routeur
$router = new AltoRouter();

// j'éduque mon routeur
// url de la requête = base path + route
// ex : http://localhost/oclock/titan/s05/oshop/public/ma-page = http://localhost/oclock/titan/s05/oshop/public + /ma-page
$router->setBasePath($_SERVER['BASE_URI']);

// les routes des pages statiques
$router->map('GET', '/', 'MainController::home');
$router->map('GET', '/game', 'MainController::game');


//routes de l'api
// $router->map('POST', '/api/player', 'MainController::newPlayer');
// $router->map('DELETE', '/api/player', 'MainController::deletePlayer');
// $router->map('GET', '/api/player', 'MainController::getPlayer');
// $router->map('GET', '/api/players', 'MainController::getLeaderboards');
// $router->map('PUT', '/api/player', 'MainController::updatePlayer');


$match = $router->match();

$dispatcher = new Dispatcher($match, 'MainController::error');
$dispatcher->dispatch();