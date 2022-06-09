<?php

//вычислить маршрут из адресной строки
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == "" OR $path == "index") {
    //Главная страница входа
    $response = controllerAdmin::formLoginSite();
} elseIf ($path == 'login') {
    //форма входа
    $response = controllerAdmin::loginAction();
} elseIf ($path == 'logout') {
    //Выход
    $response = controllerAdmin::logoutAction();
}

    //-------------------------------listCars
elseif($path=='carsAdmin') {
    $response=controllerAdminCars::carsList();
}

//-----------------add Cars
    elseif($path=='carsAdd') {
        $response=controllerAdminCars::carsAddForm();

}
elseif($path == 'carsAddResult') {
    $response = controllerAdminCars::carsAddResult();
}
//----------------------edit Cars
elseif($path=='carsEdit' && isset($_GET['id'])) {
    $response=controllerAdminCars::carsEditForm($_GET['id']);
}
elseif($path == 'carsEditResult' && isset($_GET['id'])) {
    $response = controllerAdminCars::carsEditResult($_GET['id']);
}
//----------------------delete Cars
elseif($path=='carsDel' && isset($_GET['id'])) {
    $response=controllerAdminCars::carsDeleteForm($_GET['id']);
}
elseif($path == 'carsDelResult' && isset($_GET['id'])) {
    $response = controllerAdminCars::carsDeleteResult($_GET['id']);
}
else {
    // страница не существует
    $response = controllerAdmin::error404();
}



