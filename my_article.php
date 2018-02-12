<?php
session_start();
if(!isset($_SESSION['user_name']))
	die("can't access this page");
$username = $_SESSION['user_name'];
include("headers.php");
include("navbar.php");
require("connection.php");
$con = connect("news_adda");
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Home
	</title>
</head>

    <style>
#view_comment{

}
#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#wrapper.toggled {
    padding-left: 180px;
}
#sidebar-wrapper {
    top : 50px;
    z-index: 1000;
    position: fixed;
    left: 180px;
    width: 0;
    height: 100%;
    margin-left: -180px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#wrapper.toggled #sidebar-wrapper {
    width: 180px;
}
#page-content-wrapper {
    width: 100%;
    position: relative;
    padding: 15px;
}
#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -180px;
}
.sidebar-nav {
    position: absolute;
    top: 0;
    width: 150px;
    margin: 0;
    padding: 0;
    list-style: none;
}
.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}
.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}
.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 180px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 180px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

.boka {
   word-wrap: break-word;
   width:850px;
}
</style>
<body>
<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="text-align: center;">
               <br> 
              <li>
                             
                <img src="images/aadp.jpg" class="avatar img-circle" alt="avatar" style="max-height: 100px">
                <br>
                <h3 style="color: white;"><?php echo $_SESSION['user_name'] ?></h3>
                
                
                </li>
                <li>
                    <a href="profile.php">Profile</a>
                </li>
                <li onclick="myarcstatus()">
                    <a href="#">My Article Status</a>
                </li>
                <li onclick="side(1)" >
                    <a href="#">Accepted Articles</a>
                </li >
                <li onclick="side(-1)">
                    <a href="#" >Rejected Articles</a>
                </li>
                <li onclick="side(0)">
                    <a href="#">Pending Articles</a>
                </li>
            </ul>
        </div>
        <div id="viewarticle" style="padding-top: 60px;">
<?php
    $var = $_SESSION['user_name'];
    $query = "SELECT * from new_article WHERE username = '$var' and status=1";
    $res=mysqli_query($con,$query);
         echo '<div class="container col-md-offset-1 col-md-9 col-md-offset-2"  style="padding-top: 50px;">';
         $r="";
         $i = 0;
     while($row =  mysqli_fetch_array($res))
     {
         echo '<h3>'.$row['heading'].'</h3>';

         $string = $row['article_content'];
         $r=$string;
         $r = mysqli_real_escape_string($con,test_input($string));
        if (strlen($string) > 500) {
    $stringCut = substr($string, 0, 500);
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'.'<button class = "btn btn-link" onclick="myFunction(\' '.$r.'\',\''.$i.'\');">read more</button>';
}
       echo '<div class = "col-md-12">';
        echo '<p class = "boka" id = "displayarticle'.$i.'">'.$string.'</p>';
        echo '</div>';
        echo '<div>';
echo '<span class="badge">Posted '. $row['time_stamp'].'</span>';
echo  '<br><span class="badge">LIKES: '.$row['likes'].'</span><br>';
     /* echo  '<div class="pull-right"><span class="
label label-default">alice</span> <span class="label label-primary">story</span>';
 echo '<span class="label label-success">blog</span> <span class="label label-info">personal</span>';
  echo '<span class="label label-warning">Warning</span>';
echo '<span class="label label-danger">Danger</span>';
 echo '</div>';*/
 $aid=$row['articleid'];
 echo '<div class = "col-md-8 input-group">';
  echo '<br><input type="text" id="com'.$aid.'" class = "form-control" placeholder="Enter comment"> </input>';
  echo '<span class="input-group-btn">';
    echo '<button class="btn btn-primary" onClick="updateRequest(\''.$aid.'\',\''.$i.'\',\'2\');">Post</button>
    </span>';
    echo '</div>';
 echo '<button class = "btn btn-default" name="viewcomment" id = "view_comment" onclick = "commentshow(\''.$aid.'\',\''.$i.'\',\'5\')" ;> <span class="glyphicon glyphicon-menu-down"></span>View Comments</button>';
   echo '<button class = "btn btn-default" name="hidecomment" id = "hide_comment" onclick = "hidecomment(\''.$aid.'\',\''.$i.'\',\'5\')";> <span class="glyphicon glyphicon-menu-up"></span>Hide</button>';
echo '<hr>';
echo '<div class = "container col-md-12" style="background-color : #f0ffff;" id = "commentshow'.$aid.'">';
echo '</div>';

echo '<br>';
echo '<br>';
$i++;
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


     
echo ' </div>';
?>
</div>
<script>
function myFunction(x,y) { 
    var s = "displayarticle"+y;
   console.log(s);
document.getElementById(s).innerHTML=x;
}
function hidecomment(aid,x,y)
{
     var s = "commentshow"+aid;
     console.log("this was clicked");
                document.getElementById(s).innerHTML="";
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
function side(x,y) {
    
    console.log(y);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("viewarticle").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "sidebarajax.php?id="+x,true);
        xmlhttp.send();
    }
function myarcstatus() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("viewarticle").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "myarcstatus.php",true);
        xmlhttp.send();
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
                
                var s = "showcomment"+x;
                document.getElementById(s).innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "like.php?comment="+com+"&articleid="+id+"&id="+y,true);
        xmlhttp.send();

}
</script>
<?php

?> 
</body>
</html>