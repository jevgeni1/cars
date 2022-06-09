<?php

class Controller {

    public static function StartSite() {
        $arr = Cars::getLast10Cars();
        //print_r($arr);
        include_once 'view/start.php';
        return;
    }

    public static function AllCategory() {
        $arr = Category::getAllCategory();
        include_once 'view/category.php';
    }

    public static function AllCars() {
        $arr = Cars::getAllCars();
        include_once 'view/allcars.php';
    }

    public static function CarsByCatID($id) {
        $arr = Cars::getCarsByCategoryID($id);
        include_once 'view/catcars.php';
    }

    public static function CarsByID($id) {
        $n = Cars::getCarsByID($id);
        include_once 'view/readcars.php';
    }

    public static function SearchCars($search) {
        $arr = Cars::getSearchCars($search);
        include_once 'view/searchview.php';
    }

    public static function error404() {
        include_once 'view/error404.php';
    }

    public static function info() {
        include_once 'view/info.php';
    }

    public static function InsertComment($c, $id) {
        Comments::InsertComment($c, $id);
        self::CarsByID($id);
    }

    public static function Comments($carsid) {
        $arr = Comments::getCommentBCarssID($carsid);
        ViewComments::CommentsByCars($arr);
    }

    public static function CommentsCount($carsid) {
        $arr = Comments::getCommentsCountByCarsID($carsid);
        ViewComments::CommentsCount($arr);
    }

    public static function CommentsCountWithAncor($carsid) {
        $arr = Comments::getCommentsCountByCarsID($carsid);
        ViewComments::CommentsCountWithAncor($arr);
    }

}//class