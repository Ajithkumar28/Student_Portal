<?php
clas loginpage
{
	public $servername;
	public$dbname,$dbuser,$dbpwd;
	public function testlogin($user,$pass)
	{
		$servername="localhost";
		$dbname="login";
		$dbuser="root";		
		$dbpwd="";
		$conn=new mysqli($servername,$dbuser,$dbpwd,$dbname);
		if($conn->connect_error)
		{
			die("connection failed:".$conn-.connect_error);
		}
		$encpass=md5($pass);
		$user_check_query="SELECT * FROM fart WHERE username='$user' AND password=$encpss' LIMIT 1";
		$result=mysqli_query($conn,$user_check_query);
		if(mysqli_num_rows($result)==1)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
}
?>