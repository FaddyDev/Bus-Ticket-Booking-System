<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>loginform</title>

<link rel="stylesheet"  type="text/css" href="css/loginform.css">

</head>

<body>


<div id="formWrap">
<br>
<br>
<form action="CSmembervalidate.php" method="post" onsubmit="return validateForm()" name="myform" target="Main">
<p3 id="mss">Members Login</p3><br>
<p1>Username:<input type="text" id="uname" name="n" placeholder="Enter Username"><br></p1>
<p2>Password:<input type="password" id="pass" name="p" placeholder="Enter Password"></p2><br>
<input id="submit" value="Login &raquo" type="submit">
</form>
<script>
function validateForm()
{
var n=document.forms["myform"]["n"].value;
var p=document.forms["myform"]["p"].value;
if(n==null || n=="")
{
document.getElementById("mss").style.color="red";
return false;
}
if(p==null || p=="")
{
document.getElementById("mss").style.color="red";
return false;
}
}

</script>

</div>

</body>
</html>
