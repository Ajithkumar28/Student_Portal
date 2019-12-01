
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
<a href="displayorder.php">REPORT</a>
</body>
</table>
</center>
</html>