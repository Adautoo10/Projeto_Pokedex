<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PokemonController.php';

switch($uri_parse)
{
    case '/pokemon':
        PokemonController::index();
    break;

    case '/pokemon/form':
        PokemonController::form();
    break;

    case '/pokemon/save':
        PokemonController::save();
    break;

    case '/pokemon/delete':
        PokemonController::delete();
    break;

  
    case '/home':
        include 'View/modules/pagina_inicio/home.php';
    break;

    
    default:
         header("Location: /home");
    break;

}