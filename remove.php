<?php
	require('connection.php');
	$con = connect("news_adda");
	$status = $_GET['status'];
	//echo "$status";
	$articleid = $_GET['articleid'];
	//echo "$articleid";
	if($status == "-1")
	{
		$query = "UPDATE new_article SET status = '-1' WHERE articleid = '$articleid'";
		mysqli_query($con,$query);
		//echo "kat gayi ! ho gaye ho tum reject ";
	}
	else if($status == "1")
	{
		$query = "UPDATE new_article SET status = '1' WHERE articleid = '$articleid'";
		mysqli_query($con,$query);
		//echo "boka ho gaye ho tum select! ";
	}
?>