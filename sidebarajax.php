<?php
session_start();
require('connection.php');
	$con = connect("news_adda");
	$status = $_GET['id'];
  $username=$_SESSION['user_name'];
		$query = "SELECT * from new_article WHERE status ='$status' and username='$username' ";
		$res=mysqli_query($con,$query);
		echo '<div class="container col-md-9 " >';
$i=0;
$r="";
if(mysqli_num_rows($res)==0)
echo '<h2 style="align:center";>No article in this list.</h2>';
while($row=mysqli_fetch_array($res))
{
	$i=$row['articleid'];

	echo '<div id="remove'.$i.'">';
	
    echo '<h2> <b>'.$row['heading'].'</b> </h2>';
    $string = $row['article_content'];
         $r=$string;
         $r = mysqli_real_escape_string($con,test_input($string));
        if (strlen($string) > 500) 
        {
    $stringCut = substr($string, 0, 500);
        $string = mysqli_real_escape_string($con,test_input($string));
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'.'<button class = "btn btn-link" onclick="myFunction(\' '.$r.'\',\''.$i.'\');">read more</button>';

     }
     echo '<div style = "background-color : #F5FFFA";>';
     echo '<p class = "boka" id = "displayarticle'.$i.'" style="color : #808080">'.$string.'</p>';
     echo '</div>';
        echo '<div>';
echo '<span class="badge">By '.$row['username'].'   '.$row['time_stamp'].'</span>';/*<div class="pull-right"><span class="
label label-default">alice</span> <span class="label label-primary">story</span>';
 echo '<span class="label label-success">blog</span> <span class="label label-info">personal</span>';
  echo '<span class="label label-warning">Warning</span>';
echo '<span class="label label-danger">Danger</span>';*/
 
/* echo '</div>';*/
echo '<hr>';
echo '</div>';
echo '</div>';
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