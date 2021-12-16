<html>
<head>
<link rel="stylesheet" type="text/css" href="css/validate2.css">
<?php
include_once("connection.php")
?>

</head>
<body>
<div id="formWrap">

<?php
$uname=$_POST['n'];
$pass=$_POST['p'];

$qury=mysqli_query($con,"SELECT count(*) FROM itmbrlogin WHERE(username='".$uname."' and password='".$pass."')");

$result=mysqli_fetch_array($qury);

if($result[0]>0)
{
echo "Welcome $uname, Login Successful! <br><br>";
echo "<a link href='http://localhost/DeTask/viewtask.html'><b>View Task</b></a><br>";
echo "<a link href='http://localhost/DeTask/viewschedule.html'><b>View schedule</b></a><br>";

;
}
else
{
echo "Login Failed! re-enter your credentials";
}

mysqli_close($con);

?>
</div>
</body>
</html>