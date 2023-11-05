<?php
session_start();
include_once 'header2.php';
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


     $rentid=$_POST["hid_code"];
     $lpname=$_POST["hid_name"];
     $lpram=$_POST["hid_ram"];
     $lpop=$_POST["hid_op"];
     $lppri=$_POST["hid_rentpri"];
     $uname=$_SESSION["uname"];

   $sql="INSERT INTO rental1 (lpname,lpcode,lpram,lpop,lppri,username) VALUES ('$lpname','$rentid','$lpram','$lpop','$lppri','$uname')";
    mysqli_query($conn,$sql);

    echo "You have succesfully rented the item";
    
$conn->close();

}



?>

<html>
  
</html>


