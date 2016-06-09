<?php
$data = shell_exec("sudo /var/www/html/temperature");
echo $_GET['callback'].'('.json_encode($data).')';
?>



