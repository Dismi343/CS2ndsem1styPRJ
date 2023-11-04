
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
    
  
    <h1 >Welcome to Your User Dashboard</h1>
    <h2>Personal Details</h2>
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
           while($row=mysqli_fetch_assoc($result2)){
           echo "Name = ".$row['name']."<br>";
           echo "Email = ".$row['email']."<br>";
           echo "Username = ".$row['username'];
           }
           //echo $_SESSION["uname"];

          
   ?>
    
   <br><br>
 <?php  

$rental_query = "SELECT* FROM rental1 WHERE username = '$username'";
$rental_result = $conn->query($rental_query);
    if ($rental_result->num_rows > 0) {
        echo "<h2>Your Rentals:</h2>";
        echo "<ul>";
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
    <?php 
    include_once 'footer.php';
    ?>
    <br><button onclick= "window.location.href='login.php'">Logout</button>
    <div class="log">
    <button onclick= "window.location.href='shop.php'">Go to shop</button> 
    <br>
    </div>
</body>
</html>
