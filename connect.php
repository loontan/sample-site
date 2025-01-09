<?php

$host="db-mysql-demo.mysql.database.azure.com";
$user="sqladm";
$pass="Lp@155202";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
