<?php include_once("DeTask/connection.php"); ?>

<?php
$dep=$_POST['departure'];
$des=$_POST['destination'];
$bname=$_POST['name'];
$pno=$_POST['plateno'];
$date=$_POST['day'];
$time=$_POST['t'];
$price=$_POST['p'];
//insert the data into the table.
$qury=mysqli_query($con,"INSERT INTO buses (TIME,DATE,NAME,PLATENO,DEPARTURE,DESTINATION,PRICE) values('$time','$date','$bname','$pno','$dep','$des','$price')");
//test if data is added.

if(!$qury)
{
die("Error:" .mysqli_error($con));
}
else
{
echo "Update successfull! <br>";
echo "<a href='addbus.html'>Another operation:</a>";
}
?>
