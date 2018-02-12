<?php
	session_start();
	$present_user = $_SESSION['user_name'];
	if(isset($_POST['newarticle_submit']))
	{	
		require("connection.php");
		$con = connect("news_adda");
		$heading = mysqli_real_escape_string($con,test_input($_POST['article_heading'])); 
		$content = mysqli_real_escape_string($con,test_input($_POST['article_content']));
		$status = 0;
		$query="INSERT INTO new_article (heading,article_content,username) VALUES ('$heading', '$content', '$present_user')";
		if(mysqli_query($con,$query))
		{
				// echo '<p>successfully inserted to table</p>';
				// echo '<a href="home.php"> go to home page </a>';
			header("Location:home.php");
		}
			else
			{
				echo '<p>unsuccessful insertion</p>';
			}

	}
	function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlentities(htmlspecialchars($data));
	
  if($data == ""){
    die("invalid credentials");
  }
  return $data;
}
?>