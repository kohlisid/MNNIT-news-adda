<!DOCTYPE html>
<html>
<head>
	<title></title>
<style>
.note{
	padding: 5px;
	width: 200px;
	background-color: #ffffb3;
}
	
</style>
</head>
<body>


<?php
session_start();

require('connection.php');
	 
	$con = connect("news_adda");
    $username=$_SESSION['user_name'];
		$query = "SELECT articleid from new_article WHERE username='$username' ";
		$res=mysqli_query($con,$query);
		while($row=mysqli_fetch_array($res))
		{
			$aid=$row['articleid'];
			$query2="SELECT * from article_status where articleid='$aid'";
			$res2=mysqli_query($con,$query2);
			while ($row2=mysqli_fetch_array($res2)) {
				$like=$row2['likes'];
				if($row2['username']==$username)
					continue;
				if($like==1)
				{
					echo '<li><div class="note">&nbsp<b>'.$row2['username'].'</b> liked your article</div></li>	
					<li class="divider"></li>';
				}	
				else if($like==0)
				{
					echo '<li><div class="note">&nbsp<b>'.$row2['username'].'</b> commented on your article</div></li>	
					<li class="divider"></li>';
				}
			}
		}
		
?>
</body>
</html>