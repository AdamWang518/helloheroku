<?php

$db_host='localhost';

$db_name='final';

$db_user='root';

$db_pass='';

$dsn ="mysql:host=$db_host;dbname=$db_name;charset=utf8";

$conn = new PDO($dsn, $db_user, $db_pass);

?>



