<?php
class controllerAdminCars{

    //list Cars
    public static function CarsList() {
    
    $arr=modelAdminCars::getCarsList();
        include_once 'viewAdmin/carsList.php';
    }
//----------------------------------add
public static function carsAddForm()
{
    $arr = modelAdminCategory::getCategoryList();
    include_once('viewAdmin/carsAddForm.php');
}

public static function carsAddResult()
{
    $test = modelAdminCars::getCarsAdd();
    include_once('viewAdmin/carsAddForm.php');
}
//------------------------------------edit
public static function carsEditForm($id)
{
    $arr = modelAdminCategory::getCategoryList();
    $detail=modelAdminCars::getCarsDetail($id);
    include_once('viewAdmin/carsEditForm.php');
}

public static function carsEditResult($id)
{
    $test = modelAdminCars::getCarsEdit($id);
    include_once('viewAdmin/carsEditForm.php');
}
//------------------------------------delete
public static function carsDeleteForm($id)
{
    $arr = modelAdminCategory::getCategoryList();
    $detail=modelAdminCars::getCarsDetail($id);
    include_once('viewAdmin/carsDeleteForm.php');
}

public static function carsDeleteResult($id)
{
    $test = modelAdminCars::getCarsDelete($id);
    include_once('viewAdmin/carsDeleteForm.php');
}


}//class
?>