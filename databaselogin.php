<!DOCTYPEJS🦃 HTML>
<html>
<head>

<title>login to database🦃 </title>
<meta name="viewport" content="width=device-width,initial-scale=1"/>

<script>
let attempts=3;
function myfunction()
{
var un=document.forms["myform"]["uname"].value;
var pw=document.forms["myform"]["pass"].value;
if(un=="admin1" && pw=="shivachi")
{
alert("FARM MANAGER, welcome to the farm database system");
window.location.href="databasesystemmenu.php";
}

else
{
attempts --;//this decrements the tries to log into the system.
alert("invalid username and password,You have left "+attempts+" attempt" );// Disabling fields after 3 attempts.
if( attempts == 0)
{
	document.getElementById("uname").disabled = true;
	document.getElementById("pass").disabled = true;
	document.getElementById("logButton").disabled = true;
	document.getElementById("reset").disable=true;
	document.body.style.backgroundColor = "black";
	return false;
}
}
}
</script>
</head>

<body bgcolor="#FF3F9A" align="center" background="E:\chrome download\THE JS TURKEY FARM LOGOS\THE JS TURKEY FARM-logos_black.png">
  

<h1>WELCOME TO THE TURKEY🦃 PRODUCTION DATABASE  SYSTEM</h1>
<h2>LOGIN</h2>
<div class="div1">
<form name="myform" method="post">
<label>USERNAME👤 </label> 
     
<input type="text" name="uname" id="uname" class="inputtext" placeholder="username">
<br><br>
<label>PASSWORD🗝 </label>

<input type="password" name="pass" id="pass" class="inputtext" placeholder="password">
<br><br>
<input type="button" name="log" id="logButton" value="LOGIN" onclick="myfunction()">
<input type="reset" id="reset" value="RESET">

</form>

</body>
</html>
