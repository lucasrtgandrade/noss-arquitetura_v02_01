<?php
require_once 'config.php';

$rota = isset($_GET['rota']) ? $_GET['rota'] : 'home';

switch ($rota) {
    case 'home':
        $require = 'views/home.php';
        break;
    case 'sobre':
        $require = 'views/sobre.php';
        break;
    case 'contato':
        $require = 'views/contato.php';
        break;
    default:
        http_response_code(404);
        $require = 'views/404.php';
        break;
}

require $require;
