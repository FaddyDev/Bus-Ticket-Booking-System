<?php include_once("connection.php"); ?>

<?php
$usn=$_POST['usname'];
$pas=$_POST['pasw'];


//insert the data into the table.
$qury=mysqli_query($con,"INSERT INTO itmbrlogin (username,password) values('$usn','$pas')");
//test if data is added.

if(!$qury)
{
die("Error:" .mysqli_error($con));
}
else
{
echo "Update successfull! <br>";
echo "<a href='mbrdpt.html'>Another operation:</a>";
}
?>
