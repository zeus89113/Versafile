
<?php

$host="localhost:81";
$user="root";
$pass="";
$db="mini";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>