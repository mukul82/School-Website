<?php
define('DB_USER','padhjnja_mukul');
define('DB_PASSWORD','mukul@123');
define('DB_HOST','localhost:3306');
define('DB_NAME','padhjnja_mukul');

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) OR die('Could not Connect'.mysqli_connect_error);
echo "Connected Successfully";

?>