<?php
$db_host='database-2.c3vujoluny2g.us-east-1.rds.amazonaws.com';
$db_name='Final';
$db_user='admin';
$db_pass='mysql518';
$dsn ="mysql:host=$db_host;dbname=$db_name;charset=utf8";
$conn = new PDO($dsn, $db_user, $db_pass);
?>

