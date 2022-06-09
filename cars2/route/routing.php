<?php

//вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];


if ($path == '' OR $path == 'index' OR $path == 'index.php') {
    $response = Controller::StartSite();
} elseif ($path == 'all') {
    $response = Controller::AllCars();
} elseif ($path == 'category' and isset($_GET['id'])) {
    $response = Controller::CarsByCatID($_GET['id']);
} elseif ($path == 'cars' and isset($_GET['id'])) {
    $response = Controller::CarsByID($_GET['id']);
}elseif ($path == 'search' and isset($_GET['otsi'])) {
    $response = Controller::SearchCars($_GET['otsi']);
} elseif ($path == 'insertcomment' and isset($_GET['comment'], $_GET['id'])) {
    $response = Controller::InsertComment($_GET['comment'], $_GET['id']);
}elseif ($path == 'info' ) {
    $response = Controller::info();
}
//error page
else {
    $response = Controller::error404();
}
?>