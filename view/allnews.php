<?php
ob_start();
?>
<h1>
সব খবর</h1>
<br>

<?php
ViewNews::allNews($arr);
$content = ob_get_clean();
include_once 'view/layout.php';

?>