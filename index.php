
<Doctype html>

<head>
    <style>
        h1{
            text-align:center;
            font-family:Arial, Helvetica, sans-serif;
        
        }
        </style>
</head>
<?php 
include_once 'header.php';


?>

<h1> Personal Details </h1>


<?php       
//connect to database
$conn = mysqli_connect('localhost','root','','test');
if(!$conn){
  die( 'connection error'.mysqli_connect_error($conn));
}
$username = $_POST['firstname'];  
$password = $_POST['pwd'];  
  
    //to prevent from mysqli injection  
    $username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($conn, $username);  
    $password = mysqli_real_escape_string($conn, $password);  
  
    $sql = "select username,password from user where username = '$username' and password = '$password'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($count == 1){  
        header("loggind suceed");
    }  
    else{ 
        header("Location: login.php?message=Username or password incorrect");
        echo "err";
    }

    $detail="select* from user where username = '$username'";
    $result2=mysqli_query($conn,$detail);
    while($row=mysqli_fetch_assoc($result2)){
    echo "Name= ".$row['name']."<br>";
    echo "Email= ".$row['email']."<br>";
    echo "Username= ".$row['username'];
    }

    mysqli_close($conn);
?>

<h1>Details of the rented laptop/desktop</h1>

<?php 
 include_once 'footer.php';
?>
  </html>    