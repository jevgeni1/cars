<?php
session_start();

include_once 'inc/Database.php';
require 'model/Category.php';
require 'model/Cars.php';
require 'model/Comments.php';

include_once 'view/cars.php';
include_once 'view/comments.php';

include_once 'controller/Controller.php';
include_once 'route/routing.php';

echo $response;
?>