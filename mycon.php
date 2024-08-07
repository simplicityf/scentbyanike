<?php
 $servername = "localhost";
 $username = "root";
 $user_pwd  = "";
 $dbName = "scent";
 $con = mysqli_connect($servername, $username, $user_pwd, $dbName);

 if(!$con){
  die ("connect is failed".mysqli_connect_error());
 }
?>