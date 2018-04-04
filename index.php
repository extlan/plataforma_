<?php
if (!isset($_SESSION)) {
    session_start();
}

// timezone
date_default_timezone_set('America/Sao_Paulo');

// tempo máximo de execução de um script
set_time_limit(60);

header('Content-Type: text/html; charset=utf-8');

//define('DS', DIRECTORY_SEPARATOR);
//define('ROOT', __DIR__);
//
//define('VIEW', 'view' . DS . 'assets' . DS);
//define('FRONT', 'view' . DS . 'assets' . DS);
//define('TEMPLATE', 'view' . DS . 'templates' . DS);


include_once './view/home.php';

?>
