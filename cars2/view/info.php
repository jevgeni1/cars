<?php
ob_start();
?>
<h2>Page INFO</h2>
<h1>Our location</h1>
<div class="container">
    <div class="row">
        <div class="col">
        <iframe src="https://youtu.be/H0J_A3JgaWE" 
         width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
include_once 'view/layout.php';
?>