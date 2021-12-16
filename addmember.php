<?php include_once("connection.php"); ?>

<?php
$fnm=$_POST['ftname'];
$snm=$_POST['srname'];
$idn=$_POST['id'];
$dept=$_POST['dp'];
$gndr=$_POST['gen'];

//insert the data into the table.
$qury=mysqli_query($con,"INSERT INTO members (Firstname,Surname,IDNO,Department,Gender) values('$fnm','$snm','$idn','$dept','$gndr')");
//test if data is added.

if(!$qury)
{
die("Error:" .mysqli_error($con));
}
else
{
echo "Update successfull! <br>";
echo "<a href='addmember.html'>Another operation:</a>";
}
?>
