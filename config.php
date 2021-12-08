<?php
define('DB_SERVER','172.20.0.2');
define('DB_USER','root');
define('DB_PASS','admin');
define('DB_NAME','db_toko');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check Connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>