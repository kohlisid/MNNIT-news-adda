<?php
session_start();
include("headers.php");
include("navbar.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>NEW_ARTICLE</title>
	 <style >
	#submit{
  background-color: #1CB94E;
  outline: none;
  color: #fff;
  font-size: 14px;
  height: auto;
  font-weight: normal;
  padding: 14px 0;
  text-transform: uppercase;
  border-color: #1CB94A;
  pointer:pointer;
  width:150px;
  text-align: center;
  margin-left: 50px; 
  margin-right: 140px;
}
#submit:hover,
#submit:focus,{
  color: #ff4;
  background-color: #1CA347;
  border-color: #1CA347;
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
	top: 50px;
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
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -180px;
}

/* Sidebar Styles */

.sidebar-nav {
    position: relative;
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
</style>
</head>
<body style="background-color: #ffffff;">
	<div class = "container-fluid" style = "background-color: #fafafa; padding-top: 50px;">
	<div class = "col-md-3">
	<div id="wrapper">
        
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="text-align: center;">
               <br> 
              <li>                   			 
          		<img src="images/aadp.jpg" class="avatar img-circle" alt="avatar" style="max-height: 100px">
          		<br>
          		<h3 style="color: white;"><?php echo $_SESSION['user_name'] ?></h3>
      			</li>
                <li>
                    <a href="profile.php">My Profile</a>
                </li>
                <li onclick="myarcstatus()">
                    <a href="#">All Articles</a>
                </li>
                <li onclick="side(1)">
                    <a href="#">Accepted Articles</a>
                </li>
                <li onclick="side(0)">
                    <a href="#">Pending Articles</a>
                </li>
                <li onclick="side(-1)">
                    <a href="#">Rejected Articles</a>
                </li>
            </ul>
        </div>
	</div>
	</div>
	<div class = "col-md-9" >
	<h1 id="heading" style="text-align: center;">New Article</h1>
  <div id="arc">
	<form action="db_newarticle.php" method="post">
	<div class = form-group>
	<label for = "Heading">Heading</label>
	<input class = "form-control" type="text" id="arc_name" name="article_heading" required>
	</div>
	<div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" rows="12" arc_con" name="article_content" placeholder="Give the description" required></textarea>
            </div>
            <div class = "col-md-offset-5 col-md-3">
   <input type="submit" name="newarticle_submit" id="submit" class="form-control btn btn-default" onclick = "alert('Your article is submitted successfully');"value="SUBMIT">
   </div>
    </form> </div>
    </br>
    </br>
    </div>
	</div>
	</form>
	</div>
	</div>
  <script type="text/javascript">
  function myFunction(x,y) { 
    var s = "displayarticle"+y;
   console.log(s);
document.getElementById(s).innerHTML=x;
}
    function side(x) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("arc").innerHTML=this.responseText;
                document.getElementById("heading").innerHTML="";
            }
        };
        xmlhttp.open("GET", "sidebarajax.php?id="+x,true);
        xmlhttp.send();
    }
function myarcstatus() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("arc").innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET", "myarcstatus.php",true);
        xmlhttp.send();
    }

  </script>
 </body>
</html>