<?php 
include_once 'header.php';


?>


        <h1> Hello </h1>
        <p>welcome  my web</p>


<?php       
//connect to database
$conn = mysqli_connect('localhost','root','','test');
if(!$conn){
  echo "connectiion faild";
}
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
        echo "err";
    }
?>
<?php 
 include_once 'footer.php';
?>
      