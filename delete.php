<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "web";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn){
    echo "Connection Successful...";
}
else{
    echo "Connection failed..." + mysqli_connect_error();
}
$id = $_GET['id'];
$sql = "DELETE FROM `the users` WHERE `id`=$id";
if(mysqli_query($conn,$sql)){
    header("Location:question5.php");
}
else{
    echo "Deletion failed...";
}
?>