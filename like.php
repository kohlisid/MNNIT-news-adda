<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <style>
	.detailBox {
    width:100%;
    border:1px solid #bbb;
    margin:50px;
}
.titleBox {
    background-color:#fdfdfd;
    padding:10px;
}
.titleBox label{
  color:#444;
  margin:0;
  display:inline-block;
}

.commentBox {
    padding:10px;
    border-top:1px dotted #bbb;
}
.commentBox .form-group:first-child, .actionBox .form-group:first-child {
    width:80%;
}
.commentBox .form-group:nth-child(2), .actionBox .form-group:nth-child(2) {
    width:18%;
}
.actionBox .form-group * {
    width:100%;
}
.taskDescription {
    margin-top:10px 0;
}
.commentList {
    padding:0;
    list-style:none;
    max-height:200px;
    overflow:auto;
}
.commentList li {
    margin:0;
    margin-top:10px;
}
.commentList li > div {
    display:table-cell;
}
.commenterImage {
    width:30px;
    margin-right:5px;
    height:100%;
    float:left;
}
.commenterImage img {
    width:100%;
    border-radius:50%;
}
.commentText p {
    margin:0;
}
.sub-text {
    color:#aaa;
    font-family:verdana;
    font-size:11px;
}
.actionBox {
    border-top:1px dotted #bbb;
    padding:10px;
}
</style> -->
<style>
      .boka {
   word-wrap: break-word;
   width:1000px;
   font-size: 12pt;
   
}
.bokakabhai {
   word-wrap: break-word;
   width:700px;
   font-size: 10pt;
.commentb{

}
.bokakebehen{
	background-color: "red";
}
</style>
</head>
<body>

</body>
</html>
<?php
require('connection.php');
include('headers.php');
$con = connect("news_adda");
session_start();
$presentuser = $_SESSION['user_name'];
$articleid = $_GET['articleid'];
$query = "SELECT * FROM article_status where articleid='$articleid' and username = '$presentuser' and likes=1";
$res = mysqli_query($con,$query);
$row = mysqli_fetch_array($res);
$val = mysqli_num_rows($res);
//echo "$val";
$status = $_GET['id'];
//echo " ye hei status $status" ;
	if($status == 1)
	{
		//console.log("ok..");
		$msg="";
		//console.log('$varlike');
		if($val >= 1)
			$msg="already liked this comment";
		else
		{
			$query1="UPDATE new_article set likes = likes+1 where articleid = '$articleid'";
			mysqli_query($con,$query1);
				//echo "update ho gaya bsdk";
			$query2 = "INSERT into article_status (articleid,username,likes) values('$articleid','$presentuser','1')"; 
			mysqli_query($con,$query2);
		//	console.log("inserted");
		}
		$query1="SELECT * from new_article where articleid = '$articleid'";
		$res=mysqli_query($con,$query1);
		$row=mysqli_fetch_array($res);
		$c=$row['likes'];
		$result=array('msg'=>'$msg', 'count'=>'$c');
		echo json_encode($result);
		header('Content-Type:application/json');

	}
	else if($status == 2)
	{
		
				//echo "show my posted comment";
				$comment = $_GET['comment'];
				
				echo "$comment";
				$query2 = "INSERT into article_status (articleid,username,comment) values('$articleid','$presentuser','$comment')";
				if(mysqli_query($con,$query2)) 
					echo "comment inserted";

		}

	
	else if($status == 3)
	{
		//echo "bhai kuch to show kar";
		 	$query = "SELECT * from article_status where articleid = '$articleid' and comment !='' ORDER BY id DESC";
		 	$res = mysqli_query($con,$query);
  			$i = 1;
  		echo '<br>
  		<h4>Comments</h4>';
         while($row= mysqli_fetch_array($res)){
         	
         	
           //echo '<li class="list-group-item ">'.$row['comment'];
           	echo'<div class="container col-md-9">';
           	echo '<div class = "bokakebehen">';
 // echo '<h4>comment('.$i.')</h4>';
	echo '<blockquote>';
    echo'<p class="bokakabhai">'.$row['comment'].'</p>
    <footer>From '.$row['username'].'</footer>
  </blockquote>
   <hr>
</div>';
echo '</div>';
           
         
         	//echo "$i";
         	//$i++;
        	//	echo '<p>'.$row['comment'].'</p>';
        	$i++;
        }
      //  echo '</ul>';
        //echo'</div>';
       

	}
	else if($status == 4)
	{
		$query = "SELECT * from new_article where articleid = '$articleid' ";
		$res = mysqli_query($con,$query);
		$row=mysqli_fetch_array($res);
		$cl=$row['likes']+1;
		echo 'LIKES: '.$cl.'';

	}
  else if($status == 5)
  {
    $query = "SELECT * from article_status where articleid = '$articleid' and comment !='' ORDER BY id DESC";
      $res = mysqli_query($con,$query);
        $i = 1;
      echo '<br>
      <h4>Comments</h4>';
         while($row= mysqli_fetch_array($res)){
          
          
           //echo '<li class="list-group-item ">'.$row['comment'];
            echo'<div class="container col-md-10">';
            echo '<div class = "bokakebehen">';
 // echo '<h4>comment('.$i.')</h4>';
  echo '<blockquote>';
    echo'<p class="bokakabhai">'.$row['comment'].'</p>
    <footer>From '.$row['username'].'</footer>
  </blockquote>
   <hr>
</div>';
echo '</div>';
           
         
          //echo "$i";
          //$i++;
          //  echo '<p>'.$row['comment'].'</p>';
          $i++;

  }
}
?>



