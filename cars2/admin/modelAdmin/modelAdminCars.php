<?php
class modelAdminCars{

    public static function getCarsList() {
        $query = "SELECT cars.*, category.name,users.username from cars,
        category,users WHERE cars.category_id=category.id AND
        cars.user_id=users.id ORDER BY `cars`.`id` DESC";
        $db = new Database();
        $arr = $db->getAll($query);
        return $arr;
    }



//-------------Add
public static function getCarsAdd() {
    $test=false;
    if(isset($_POST['save'])) {
        if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) ){

            $title=$_POST['title'];
            $text=$_POST['text'];
            $idCategory=$_POST['idCategory'];

            //--------------------------------------
                $image =addslashes (file_get_contents($_FILES['picture']['tmp_name']));
            //--------------------------------------
            $sql="INSERT INTO `cars` (`id`, `title`, `text`, `picture`, `category_id`,
            `user_id`) VALUES (NULL, '$title', '$text', '$image', '$idCategory', '1')";
                    $db = new Database();
                    //echo $sql;
                    $item = $db->executeRun($sql);
                if($item==true) {
                $test=true;
            }
        }
    }
    return $test;
}
//----------------------------------Cars detail id
public static function getCarsDetail($id) {
    $query = "SELECT cars.*, category.name,users.username from cars, category, users
    WHERE cars.category_id=category.id AND cars.user_id=users.id and cars.id=".$id;
    $db = new Database();
    $arr = $db->getOne($query);
    return $arr;
}
//---------------------------Cars edit
public static function getCarsEdit($id){
    $test=false;
    if(isset($_POST['save'])) {
        if(isset($_POST['title']) && isset($_POST['text']) && isset($_POST['idCategory']) ){

            $title=$_POST['title'];
            $text=$_POST['text'];
            $idCategory=$_POST['idCategory'];
        //---------------------images type blob
        $image=$_FILES['picture'] ['name'];
        if($image!=""){
            $image =addslashes(file_get_contents($_FILES['picture'] ['tmp_name']));
        /* //------------------------images type text
            $uploaddir = '../images/';
            $uploadfile = $uploaddir . basename($_FILES['picyure']['name']);
            copy($_FILES['picture']['tmp_name'], $uploadfile); */
        } 
        //------------------------------------------------
        if($image=="") {
            $sql="UPDATE `cars` SET `title` = '$title', `text` = '$text',
            `category_id` = '$idCategory' WHERE `cars`.`id` =".$id;
        }
        else{
            $sql="UPDATE `cars` SET `title` = '$title', `text` = '$text', `picture`='$image',
            `category_id` = '$idCategory' WHERE `cars`.`id` =".$id;
        }
                $db = new Database();
                $item = $db->executeRun($sql);
            if($item==true) {
                $test=true;
            }
        }
    }
    return $test; 
}
//-------------------------------------------Cars delete

public static function getCarsDelete($id) {
    $test=false;
    if(isset($_POST['save'])) {
        $sql="DELETE FROM `cars` WHERE `cars`.`id` = ".$id;
        $db = new Database();
                $item = $db->executeRun ($sql);
            if($item==true) {
            $test=true;
        }
    }
    return $test;
    }

}//class