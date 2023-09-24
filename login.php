<!DOCTYPE html>
<head><title>login</title>

<script>  
           function validation(){
var x= document.forms["lgin"]["firstname"].value;
var y= document.forms["lgin"]["pwd"].value;

if(x&&y==""){
  alert("username and password must be filled");
  return false;
}
else if(y==""){
  alert("Password must be filled");
  return false;
}

else if(x==""){
  alert("Username must be filled");
  return false;
}
           }
        </script> 

</head>
<?php 
include_once 'header.php';
?>

  <div class="form">
    <img src="logo-01 1.png" alt="Logo" width="350" height="72" onsubmit=" return validation()" >
    <h1>Welcome ComputerHub</h1>
    <form name="lgin" action ="index.php" method="post" onsubmit="return validation()" required>
      <input type="text" id="fname" name="firstname" placeholder="Username">
      <input type="password" id="lname" name="pwd" placeholder="Password">
      <button name="submit" type="submit" >Login</button>
  </form>
  <p>New Here ? <a href="signup.php">Register</a> </p>
</div>



<?php 
 include_once 'footer.php';
?>