<html>
<head>
<title> Farmer Expenses Dairy </title>
</head>
<body background="../bag/25.gif">
<?php
	$con=mysql_connect("localhost","root","");
	$na=$_POST["na"];
	$gen=$_POST["gen"];
	$d=$_POST["d"];
	$m=$_POST["m"];
	$y=$_POST["y"];
	$date="$d/$m/$y";
	$addr=$_POST["addr"];
	$em=$_POST["em"];
	$pw=$_POST["pw"];
	mysql_selectdb("udb",$con);
	if(mysql_query("INSERT INTO ut values('$na','$gen','$date','addr','$em','$pw')",$con))
		echo"<h1>THANKYOU FOR CREATE AN ACCOUNT IN MY SITE</h1>";
	else
		echo"VALUES NOT INSERTED".mysql_error();
	mysql_close($con);
?>
</body>
<a href="login.html">BACK</a>
</html>

