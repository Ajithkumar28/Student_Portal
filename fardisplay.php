<html>
<head>
<title>FARMER EXPENSES DAIRY  </title>
</head>
<body>
<?php
	$con=mysql_connect("localhost","root","");
	if(mysql_query("create database fdb",$con))
		echo"DATABASE CREATED";
	else
		
	mysql_selectdb("fdb",$con);

	if(mysql_query("create table fart(name varchar(20),fid varchar(20),ls varchar(20),fi varchar(20),income varchar(10),savings varchar(20))",$con))
		echo"TABLE CREATED";
	else
		
	mysql_close($con);
?>
</body>
</html>

<html>
<head>
<title> FARMER EXPENSES DAIRY </title>
</head>
<body background="a.gif">
<?php
	$con=mysql_connect("localhost","root","");
	$na=$_POST["na"];
	$fid=$_POST["fid"];
	$ls=$_POST["ls"];
	$fi=$_POST["fi"];
	$in=$_POST["income"];
	$s=$_POST["savings"];
	
	mysql_selectdb("fdb",$con);
	if(mysql_query("INSERT INTO fart values('$na','$fid','$ls','$fi','$in','$s')",$con))
		echo"<h1>DAIRY</h1>";
	else
		echo"VALUES NOT INSERTED".mysql_error();
	mysql_close($con);
?>
</body>
</html>

</body>
</html>

<html>
<head>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
<h1> <marquee> FARMER EXPENSES DAIRY</marquee></h1>

<body bgcolor="#339999">
<center>
<table border="5">
<?php
	 	$con=mysql_connect("localhost","root","");
		mysql_select_db("fdb",$con);
		$x=mysql_query("select * from fart");
		echo"<tr>";
		echo"<th>FARMER_NAME</th><th>FARMER_ID</th><th>LAND_SIZE</th><th>FIELDS</th><th>INCOMES</th><th>SAVINGS</th><th>PROFIT</th></tr>";
		while($row=mysql_fetch_array($x))	
		{		
				echo"<tr>";
				echo"<td>".$row['name']."</td>";
				echo"<td>".$row['fid']."</td>";
				echo"<td>".$row['ls']."</td>";
				echo"<td>".$row['fi']."</td>";
				echo"<td>".$row['income']."</td>"; 
				echo"<td>".$row['savings']."</td>";
				$row['br']=$row['savings']-$row['income'];
				echo"<td>".$row['br']."</td>";
				echo"</tr>";
		}		
			mysql_close($con);		

?>
<a href="farmerreg.html">BACK</a>
</body>
</table>
</center>
</html>