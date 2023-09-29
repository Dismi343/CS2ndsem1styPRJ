<!DOCTYPE html>
<head>
 <script>
  
function validatef(){
var x= document.forms["reg"]["Uname"].value;
var y= document.forms["reg"]["Pss"].value;
var z= document.forms["reg"]["Re pass"].value;


if(x==""){
  alert("username must be filled");
  return false;
}
if(y==""){
  alert("Password must be filled");
  return false;
}
if(y!=z){
  alert("Password is not matched");
  return false;
}
}
 </script>
</head>
<?php 
include_once 'header.php';
?>
  <div class="form" , id="warning">
    <img src="logo-01 1.png" alt="Logo" width="350" height="72" >
    <h1>Welcome ComputerHub</h1>
    <form name="reg" action ="include.php" method="post" onsubmit="return validatef()" required>
      <input type="text" id="fname" name="Firstname" placeholder="Name" maxlength="30">
      <input type="text" id="em" name="Email" placeholder="Email">
      <input type="text" id="uname" name="Uname" placeholder="Username" maxlength="10">
      <input type="password" id="pword" name="Pss" placeholder="Password" maxlength="8">   
       
      <input type="password" id="repword" name="Re pass" placeholder="Repeat Password" maxlength="8">
      <button name="submit" type="submit" >Register</button>
  </form>
   <p> Already have an account? <a href="login.php">Log in.</a> </p>
</div>

<?php 
 include_once 'footer.php';
?>

</html>