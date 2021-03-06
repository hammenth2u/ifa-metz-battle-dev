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
$router->map('GET', '/login', 'MainController::login');
$router->map('GET', '/register', 'MainController::register');
$router->map('GET', '/charts', 'MainController::charts');


//routes de l'api
$router->map('POST', '/api/player', 'MainController::newPlayer');
$router->map('DELETE', '/api/player', 'MainController::deletePlayer');
$router->map('GET', '/api/player', 'MainController::getPlayer');
$router->map('GET', '/api/players', 'MainController::getLeaderboards');
$router->map('PUT', '/api/player', 'MainController::updatePlayer');
$router->map('GET', '/api/connect', 'MainController::connect');
$router->map('GET','/api/ages', 'MainController::getByAge');

$router->map('GET', '/api/genders/homme', 'MainController::getGenderHomme');
$router->map('GET', '/api/genders/femme', 'MainController::getGenderFemme');
$router->map('GET', '/api/genders/autre', 'MainController::getGenderAutre');

$match = $router->match();

$dispatcher = new Dispatcher($match, 'MainController::error');
$dispatcher->dispatch();