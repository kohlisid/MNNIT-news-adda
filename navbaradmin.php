<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>NEWS_ADDA</title>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">NewsAdda</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
         <li class><a href="home.php">Current News</a></li>
         <li class><a href="admin.php">Admin Page</a></li>
         <!-- <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="newarticle.php">New Article</a></li>
            <li class="divider"></li>
            <li><a href="my_article.php">My Articles</a></li>
           
            </ul>
        </li> -->
       
        
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user_name'];?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
           <!--  <li><a href="profile.php">Profile</a></li>
            <li class="divider"></li> -->
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>
    </div>
  </div>
</nav>

</body>

</html>
