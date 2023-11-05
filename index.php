<?php
include_once 'header2.php';
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";
session_start();
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
    <style>
        .log{
            text-align:right;
        }
    </style>
</head>
<body>
    
  
    <h1 style="text-align:center">Welcome to Your Dashboard</h1>
<br>
    <?php
   $username = $_POST['firstname'];  
   $password = $_POST['pwd'];  
     
       //to prevent from mysqli injection  
       $username = stripcslashes($username);  
       $password = stripcslashes($password);  
       $username = mysqli_real_escape_string($conn, $username);  
       $password = mysqli_real_escape_string($conn, $password);  
     
       $sql = "select *from user where username = '$username' and password = '$password'";  
       $result = mysqli_query($conn, $sql);  
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
       $count = mysqli_num_rows($result);  
         
       if($count == 1){  
           header("loggind suceed");
           $_SESSION["uname"]=$username;
       }  
       else{     
           header("Location: login.php?message=Username or password incorrect");
           
       }
   
           //show details from database
           $detail="select* from user where username = '$username'";
           $result2=mysqli_query($conn,$detail);
           echo "<h2>Personal Details</h2>";
           echo "<ul>";
           while($row=mysqli_fetch_assoc($result2)){
           echo "<li>Name = ".$row['name']."</li>";
           echo "<li>Email = ".$row['email']."</li>";
           echo "<li>Username = ".$row['username']."</li>";
           }
           echo"</ul>";
           //echo $_SESSION["uname"];

          
   ?>
    
   <br><br>
 <?php  

$rental_query = "SELECT* FROM rental1 WHERE username = '$username'";
$rental_result = $conn->query($rental_query);
    if ($rental_result->num_rows > 0) {
        echo "<h2>Your Rentals:</h2>";
        echo "<br><ul>";
        while ($rental_row = $rental_result->fetch_assoc()) {
            echo "<li>Laptop Name: " . $rental_row["lpname"] . "</li>";
            echo "<li>User Name: " . $rental_row["username"] . "</li>";
            echo "<li>Rental ID: " . $rental_row["lpcode"] . "</li>";
            echo "<li>Ram: " . $rental_row["lpram"] . "</li>";
            echo "<li>Operating System: " . $rental_row["lpop"] . "</li>";
            echo "<li>Price: " . $rental_row["lppri"] . "</li>";
            echo "<br>";
        }
        echo "</ul>";

    
    }
   

   
    mysqli_close($conn);
  
    ?>
   
    <br><button class="button2" onclick="window.location.href='function.php'">clear data</button>
    <br>

    <div class="log">
    <br><button class="button3" onclick= "window.location.href='shop.php'">Go to shop</button> 
    <br><button class="button1"onclick= "window.location.href='login.php'">Logout</button>

    <br>
    </div>

    <?php 
    include_once 'footer.php';
    ?>
</body>
</html>
