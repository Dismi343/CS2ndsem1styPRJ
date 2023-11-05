<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.column {
  padding: 0 8px;
  display: block;
  padding: flex;
  flex-direction: row; 
  justify-content: center;
  align-items : center;
}





  


/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}


</style>

<body>
<h2 style="text-align:center">Select Your Laptop or Destop</h2>

  <div class="column">

  

<?php
$con = mysqli_connect('localhost','root','','test');
if(!$con){
    die('couldnot connect'.mysqli_connect_error($conn));
}
else{
$lap="select* from LaptopDetails order by Laptop_Code ASC";
echo '<div style="display: flex; flex-direction: column; align-items: center;">';
$result=mysqli_query($con,$lap);
while($row=mysqli_fetch_assoc($result)){


  

?>
<img src="./assets/hero-image (2).png" style="width:25%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  <?php
    echo "No. ".$row['Laptop_Code']."<br>";
    echo "Brand = ".$row['Laptop_name']."<br>";
    echo "Processor = ".$row['Processor']."<br>";
    echo "RAM= ".$row['Ram']."</br>";
    echo "Operating System = ".$row['Operating_System']."<br>";
    echo "Rental price per day = Rs.".$row['Rental_Price_Per_Day'].".00 (Upto 5 days)<br>";
    echo "Charge for an extra day = Rs.".$row['Charge_For_An_ExtraDay'].".00<br><br>";

?>
      <form action="rent.php" method="post">
      <input type="hidden" name="hid_code" value="<?php echo $row['Laptop_Code'];?>">
      <input type="hidden" name="hid_name" value="<?php echo $row["Laptop_name"];?>">
      <input type="hidden" name="hid_ram" value="<?php echo $row["Ram"];?>">
      <input type="hidden" name="hid_op" value="<?php echo $row["Operating_System"];?>">
      <input type="hidden" name="hid_rentpri" value="<?php echo $row["Rental_Price_Per_Day"];?>">
      <input type="submit" name="Rent" value="rent" id="Rent" style="display: inline-block; background-color: 
       background-color: #0b74d6; padding: 20px; width: 200px; color: #000000; font-color: black;
       text-align: center; border: 4px double #cccccc; border-radius: 10px; font-size: 28px;  cursor: pointer; margin: 5px;">


      </form>

       <?php
       
    }
  }
    mysqli_close($con);

  ?>
  
  
</div>





    
</body>
</html>
