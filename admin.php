<?php
	session_start();
	if(!isset($_SESSION['user_name']))
	die("can't access this page");
  else if($_SESSION['user_name'] != "admin")
    die("can't access this page");
$username = $_SESSION['user_name'];
if($username=="admin")
{
include('navbaradmin.php');
}
else
{
  include('navbar.php');
}

	require('connection.php');
	include('headers.php');
  
	// include('navbar.php');
	$con = connect("news_adda");
	$query = "SELECT * from new_article WHERE status = '0' ORDER BY articleid DESC";
	$res=mysqli_query($con,$query);
	?>
	<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <style>
        .boka {
   word-wrap: break-word;
   width:850px;
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
</head>

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
               
                <li onclick="side(1)">
                    <a href="#">Accepted</a>
                </li>
                <li onclick="side(-1)">
                    <a href="#">Rejected</a>
                </li>
                <li onclick="side(0)">
                    <a href="#">Pending</a>
                </li>
            </ul>
        </div>
 <h2 style="text-align: center; padding-top: 50px;">Admin Page</h2>
 <div id = "viewarticle">
<hr>
<?php
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
echo '&nbsp <button class = "btn btn-success" id = "accept'.$i.'" onclick = "remove(\'1\',\''.$i.'\');">accept</button>&nbsp &nbsp &nbsp';             
echo '<button class = "btn btn-danger" id = "reject'.$i.'" onclick = "remove(\'-1\',\''.$i.'\');">reject</button>';
echo '<hr>';
echo '</div>';
echo '</div>';
}
?>

<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlentities(htmlspecialchars($data));
    
  if($data == ""){
    die("invalid credentials");
  }
  return $data;
}

echo '</div>';
echo '</div>';
?>
<script>
function myFunction(x,y) { 
    var s = "displayarticle"+y;
   console.log(s);
document.getElementById(s).innerHTML=x;
}
function remove(x,y) {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("remove"+y).innerHTML=this.responseText;
                console.log("remove"+y);
            }
        };
        xmlhttp.open("GET", "remove.php?status="+x+"&articleid="+y,true);
        xmlhttp.send();
        alert("Status change succesfull");
    }
function side(x) {
    
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("viewarticle").innerHTML=this.responseText;
                //console.log("remove"+y);
            }
        };
        xmlhttp.open("GET", "sidebaradmin.php?id="+x,true);
        xmlhttp.send();
        //alert("Status change succesfull");
    }
</script> 
</body>
</html>










