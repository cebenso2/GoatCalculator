<?php session_start();
     define('DB_SERVER', 'localhost');
     define('DB_USERNAME', 'goatcalc_admin');
     define('DB_PASSWORD', 'admin123');
     define('DB_DATABASE', 'goatcalc_main');
     $db=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>