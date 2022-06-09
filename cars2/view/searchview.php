<?php
ob_start();

echo "<h1>Search result:</h1>";
echo "<h2><b>". $_GET['Search'].":</b></h2>";

ViewCars::AllCars($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>