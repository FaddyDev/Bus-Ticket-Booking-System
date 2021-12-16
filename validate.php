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

$qury=mysqli_query($con,"SELECT count(*) FROM phplogin WHERE(username='".$uname."' and password='".$pass."')");

$result=mysqli_fetch_array($qury);

if($result[0]>0)
{
echo "Welcome $uname, Login Successful! <br><br>";
echo "<a link href='#'>Add H.O.D</a><br>";
echo "<a link href='http://localhost/DeTask/mbrdpt.html'><b>Add Member</b></a><br>";
echo "<a link href='#'>Add Admin</a><br>";
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