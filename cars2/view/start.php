<?php
ob_start();
?>
<h1>TOP 4 ROADSTERS </h1>
<br>
<?php
ViewCars::CarsByCategory($arr);

$content = ob_get_clean();

include_once 'view/layout.php';
?>