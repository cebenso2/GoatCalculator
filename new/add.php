<?php 
include('connect.php');
$l=$_POST["lname"];
$f=$_POST["fname"];
$e=$_POST["email"];
$u=$_POST["username"];
$p=$_POST["password"];
$c=$_POST["confirm"];
$fp=$_POST["favorite"];
 $sql = "INSERT INTO
                    users(user_name, user_pass, First_name, Last_name, Email, Favorite_player, user_date, user_level)
                VALUES('" .$u . "',
                       '" . sha1($p) . "',
                       '" . $f . "',
                       '" . $l. "',
                       '" .$e . "',
                       '" . $fp . "',
                        NOW(),
                        0)";
mysqli_query($db,$sql);
$_SESSION['username']  = $u;

header('Location: /new');
?>