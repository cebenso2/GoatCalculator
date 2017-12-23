<?php 
include('connect.php');
$username=$_POST["username"];
$password=$_POST["password"];
$sql = "SELECT 
                        user_id,
                        user_name,
                        user_level
                    FROM
                        users
                    WHERE
                        user_name = '" .$username . "'
                    AND
                        user_pass = '" . sha1($password) . "'";
$result=mysqli_query($db,$sql);
$num=mysqli_num_rows($result);
if($num>0){
  $_SESSION['username']  = $username;
  
  $_SESSION['failed']  = false;
}
else{
  $_SESSION['failed']  = true;
}
#echo $_SESSION['username'];
header('Location: ' . $_SERVER['HTTP_REFERER']);
?>