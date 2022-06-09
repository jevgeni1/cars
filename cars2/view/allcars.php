<?php
ob_start();
?>
<h1>All categories </h1>
<br>

<?php
ViewCars::AllCars($arr);
$content = ob_get_clean();
include_once 'view/layout.php';
?>