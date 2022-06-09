<?php

class Cars {

    public static function getLast10Cars() {
        $query = "SELECT * FROM cars ORDER BY id DESC LIMIT 10";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getAllCars() {
        $query = "SELECT * FROM cars ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCarsByCategoryID($id) {
        $query = "SELECT * FROM cars where category_id=" . (string) $id . " ORDER BY id DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }

    public static function getCarsByID($id) {
        $query = "SELECT * FROM cars where id=" . (string) $id;
        $db = new Database();
        $n = $db->getOne($query);
        return $n;
    }

    public static function getSearchCars($s) {
        $query = 'SELECT * FROM cars where title like "%'.$s. '%" or text like "%'.$s.'%"' ;
        $db = new Database();
        $n = $db->getAll($query);
        return $n;
    }

}
?>