<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn){

die('couldnot connect'.mysqli_connect_error($conn));
}
else{
    $uname=$_SESSION["uname"];

$sql="DELETE FROM rental1 where username='$uname'";
mysqli_query($conn,$sql);

echo "data succesfully deleted";
}
?>

<br><button onclick="window.location.href='index.php'">Back</button>

