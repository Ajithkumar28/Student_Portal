<html>
<head>
<title>Farmer Expenses Dairy  </title>
</head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	if(mysql_query("create database udb",$con))
		echo"DATABASE CREATED";
	else
		echo"DATABASE NOT CREATED".mysql_error();
	mysql_selectdb("udb",$con);
	if(mysql_query("create table ut(name varchar(20),gender varchar(20),date varchar(20),addr varchar(20),email varchar(20),password varchar(8))",$con))
		echo"TABLE CREATED";
	else
		echo"TABLE NOT CREATED".mysql_error();
	mysql_close($con);
?>
</body>
<a href="login.html">BACK</a>
</html>

