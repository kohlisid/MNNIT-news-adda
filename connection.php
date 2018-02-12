<?php
	function connect($dbname){
		$dbhost = "localhost";
		$dbuser = "root";
		$pass = "";
		$con = mysqli_connect($dbhost,$dbuser,$pass,$dbname);
		if($con -> connect_errno)
		{
			echo $con->connect_error;
			die("Unable to connect to database");

		}
		else {
					//echo "connection successful";
			return $con;
		}
		
	}
?>
