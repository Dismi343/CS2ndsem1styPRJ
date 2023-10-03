<?php
$con = mysqli_connect('localhost','root','','test');
if(!$con){
    die('couldnot connect'.mysqli_connect_error($conn));
}
else{
$lap="select* from LaptopDetails";
$result=mysqli_query($con,$lap);
while($row=mysqli_fetch_assoc($result)){
    echo "Brand = ".$row['Laptop_name']."<br>";
    echo "Processor = ".$row['Processor']."<br>";
    echo "RAM= ".$row['Ram'];
    echo "Operating System = ".$row['Operating_System']."<br>";
    echo "Rental price per day = ".$row['Rental_Price_Per_Day']." (Upto 5 days)<br>";
    echo "Charge for an extra day = ".$row['Charge_For_An_ExtraDay']."<br><br>";

    }

}

mysqli_close($con);
?>
