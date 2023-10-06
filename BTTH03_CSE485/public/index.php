<?php

require_once('../app/config/config.php');
$controller = isset($_GET['controllers']) ? $_GET['controllers'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
if ($controller == 'home') {
    require_once APP_ROOT . '/app/controllers/HomeController.php';
    $homebook = new HomeController();
    $homebook->index();
}
