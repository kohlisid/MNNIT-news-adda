<?php
session_start();
if(!isset($_SESSION['user_name']))
	die("can't access this page");
$username = $_SESSION['user_name'];
include("headers.php");
if($username=="admin")
{
include('navbaradmin.php');
}
else
{
  include('navbar.php');
}

include("connection.php");
$con=connect("news_adda");
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <style>
        .boka {
   word-wrap: break-word;
   width:1000px;
   font-size: 12pt;

}
.bokakabhai {
   word-wrap: break-word;
   width:1000px;
   font-size: 12pt;
.commentb{

}
    </style>
</head>
<body>

<?php
$present_user=$_SESSION['user_name'];
$query="Select * from new_article where status=1 order by articleid DESC";
$res=mysqli_query($con,$query);
echo '<div class="container" style="padding-top: 50px;">';
$i=0;
$r="";
while($row=mysqli_fetch_array($res))
{
        echo '<h3><b>'.$row['heading'].'</b></h3>';
    $string = $row['article_content'];
         $r=$string;
         $aid = $row['articleid'];
    $query2="Select * from article_status where username='$present_user' and articleid='$aid' and likes='1' ";
        $res2=mysqli_query($con,$query2);
         //$row2=mysqli_fetch_array($res2);
          $crow=mysqli_num_rows($res2);
         $r = mysqli_real_escape_string($con,test_input($string));
        if (strlen($string) > 500) 
        {
    $stringCut = substr($string, 0, 500);
        $string = mysqli_real_escape_string($con,test_input($string));
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'.'<button class = "btn btn-link" onclick="myFunction(\' '.$r.'\',\''.$i.'\');">read more</button>';

     }
     echo '<p class = "boka" id = "displayarticle'.$i.'" style="background-color:#FFFAF0">'.$string.'</p>';
        echo '<div>';
echo '<span class="badge">By '.$row['username'].'   '.$row['time_stamp'].'</span>';
echo '<br><span class="badge" id="likebadge'.$aid.'">LIKES: '.$row['likes'].'</span>';
//echo '<div id = "">
// echo '<div class="pull-right"><span class="label label-default">alice</span> <span class="label label-primary">story</span>';
//  echo '<span class="label label-success">blog</span> <span class="label label-info">personal</span>';
//   echo '<span class="label label-warning">Warning</span>';
// echo '<span class="label label-danger">Danger</span>';

//  echo '</div>';4
if($crow >= 1){
echo '<div class = "pull-right">';
  echo '<span class="glyphicon glyphicon-thumbs-up"></span><button class = "btn btn-default" name="like" id = "like'.$aid.'" onclick = "func(\''.$aid.'\',\''.$i.'\',\'1\')";> Liked</button><br>';
  echo '</div>';
}
else
{
      echo '<div class = "pull-right">';
  echo '<span class="glyphicon glyphicon-thumbs-up"></span><button class = "btn btn-default" name="like" id = "like'.$aid.'" onclick = "func(\''.$aid.'\',\''.$i.'\',\'1\')";>Like</button><br>';
  echo '</div>'; 
}
  echo '<br><br>';
  echo '<hr>';
  echo '<div class = container>';
 
  echo '<div class = "col-md-8 input-group">';
  echo '<input type="text" id="com'.$aid.'" class = "form-control" placeholder="Enter comment"> </input>';
  echo '<span class="input-group-btn">';
    echo '<button class="btn btn-primary" onClick="updateRequest(\''.$aid.'\',\''.$i.'\',\'2\');">Post</button>
    </span>';
    echo '</div>';
      echo '<div class = "">';
  echo '<button class = "btn btn-default" name="viewcomment" id = "view_comment" onclick = "commentshow(\''.$aid.'\',\''.$i.'\',\'3\')";> <span class="glyphicon glyphicon-menu-down"></span>View Comments</button>';
   echo '<button class = "btn btn-default" name="hidecomment" id = "hide_comment" onclick = "hidecomment(\''.$aid.'\',\''.$i.'\',\'3\')";> <span class="glyphicon glyphicon-menu-up"></span>Hide</button>';
echo '</div>';
echo '</div>';
//echo '<hr>';
echo '<div class = "container" style="background-color : #f0ffff"; id = "commentshow'.$aid.'">';
echo '</div>';

echo '<br>';
echo '<br>';
$i++;
}

echo '</div>';
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
<script>
function changelikes(id,x,y)
{
  console.log(id+x+y);
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(result) {
            if (this.readyState == 4 && this.status == 200) 
            {
                var s = "likebadge"+id;
                document.getElementById(s).innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "like.php?id="+y+"&articleid="+id,true);
        xmlhttp.send();
}
function updateval(id,x,y)
{
  var s="like"+id;
  if(document.getElementById(s).innerHTML=="Like"){
    document.getElementById(s).innerHTML="Liked";
    changelikes(id,x,4);
  }
}
function func(id,x,y)
{
  updateval(id,x,y);
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(result) {
            if (this.readyState == 4 && this.status == 200) 
            {
                /*$('#likebadge'+id).innerHTML=result['c'];
                $('#commentshow'+id).innerHTML=result['msg'];*/
                //console.log("func is working");
            }
        };
        xmlhttp.open("GET", "like.php?id="+y+"&articleid="+id,true);
        xmlhttp.send();
}
function hidecomment(aid,x,y)
{
     var s = "commentshow"+aid;
     console.log("this was clicked");
                document.getElementById(s).innerHTML="";
}
function updateRequest(id,x,y)
{
   var com=document.getElementById('com'+id).value;
   document.getElementById('com'+id).value = "";
   console.log("com");
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                
                //var s = "showcomment"+x;
                //document.getElementById(s).innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "like.php?comment="+com+"&articleid="+id+"&id="+y,true);
        xmlhttp.send();

}
function commentshow(aid,x,y)
{
  console.log("article id "+aid +"loop id"+ x+"status value"+y);
  
   
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                console.log("");
                var s = "commentshow"+aid;
                document.getElementById(s).innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "like.php?id="+y+"&articleid="+aid,true);
        xmlhttp.send();

}
     

function myFunction(x,y) { 
    var s = "displayarticle"+y;
   console.log(s);
document.getElementById(s).innerHTML=x;
}
</script>

<?php
include('footer.php');
?>
</body>
</html>