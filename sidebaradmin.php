<?php

require('connection.php');
	$con = connect("news_adda");
	$status = $_GET['id'];
		$query = "SELECT * from new_article WHERE status ='$status'";
		$res=mysqli_query($con,$query);
		echo '<div class="container col-md-offset-1 col-md-9 " >';
$i=0;
$r="";
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
echo '<span class="badge">By '.$row['username'].'   '.$row['time_stamp'].'</span>';
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