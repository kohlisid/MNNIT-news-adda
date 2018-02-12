<?php

function connect($dbname){
	$dbhost="localhost";
	$dbuser="root";
	$pass="slayerX";
	// Used to establish connection to the database...
	$con = mysqli_connect("localhost","root",$pass,$dbname);
	if($con->connect_errno)
	{
		// Checking for errors during connection....
		echo $con->connect_error;
		die("Unable to connect to database!Server is sleeping!");
	}
	else
		return $con;
}

function validate($con,$data){
	foreach ($data as $key=>$val){
		if(!is_array($val)){
			$data[$key]=mysqli_real_escape_string($con,htmlspecialchars(trim($val)));
		}
		else{
			//the later part is for array validation
			foreach($val as $key2=>$val2){
				$data[$key][$key2]=$val2;
			}
		}
	}
	return $data;
}
?>