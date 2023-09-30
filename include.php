<html>
    
<?php
$firstname= $_POST['Firstname'];
$email=$_POST['Email'];
$uname=$_POST['Uname'];
$password=$_POST['Pss'];

//connecting to database
$conn = mysqli_connect('localhost','root','','test');

if(!$conn){
    die('couldnot connect'.mysqli_connect_error($conn));
    //die('could not connect:'.$conn->connect_error);
}
else{

$duplicate =mysqli_query($conn,"select * from user where username='$uname'");
if(mysqli_num_rows($duplicate)>0){
   
    //header("Location: signup.php?message=Username already exist");
    
 //popup message
    echo '<script type="text/javascript">';
    echo 'alert("Username already exist")';
    echo '</script>';
}


//add data to the database
else{
try{

$con=$conn->prepare("INSERT INTO user(name,email,username,password)
VALUES(?, ?, ?, ?)");
$con->bind_param("ssss",$firstname,$email,$uname,$password);
$con->execute();

echo "register succeed";
$con->close();
$conn->close();

}
catch(PDOException $e){
    echo $con ."
    " . $e->getMessage();
}
$conn =null;
}

}
?>
</html>