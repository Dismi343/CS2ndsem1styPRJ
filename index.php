
<?php
include_once 'header2.php';
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

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
</head>
<body>
    <h1 >Welcome to Your User Dashboard</h1>

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
       
          
   ?>
   <br><br>
 <?php  

$rental_query = "SELECT* FROM rent WHERE username = '$username'";
$rental_result = $conn->query($rental_query);
    if ($rental_result->num_rows > 0) {
        echo "<h2>Your Rentals:</h2>";
        echo "<ul>";
        while ($rental_row = $rental_result->fetch_assoc()) {
            echo "<li>Laptop Name: " . $rental_row["lapname"] . "</li>";
            echo "<li>User Name: " . $rental_row["username"] . "</li>";
            echo "<li>Rental ID: " . $rental_row["rental_id"] . "</li>";
            echo "<li>Rental Date: " . $rental_row["rental_date"] . "</li>";
            echo "<li>Return Date: " . $rental_row["return_date"] . "</li>";
            echo "<br>";
        }
        echo "</ul>";
    }
   
   
    mysqli_close($conn);
  
    ?>
    <?php 
    include_once 'footer.php';
    ?>
    <br><a href="logout.php">Logout</a>
    <br><a href="shop.php">Rent</a> <!-- Create a logout page -->
</body>
</html>
