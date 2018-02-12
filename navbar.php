
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
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles <span class="caret"></span></a>
          <ul class="dropdown-menu" style="background-color: #ffffb3;">
            <li><a href="newarticle.php">New Article</a></li>
            <li class="divider"></li>
            <li><a href="my_article.php">My Articles</a></li>
          </ul>
         </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
        <li class="dropdown" onclick="notify()">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-globe"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu" id="notifications" style="overflow: scroll; max-height: 500px;background-color: #ffffb3;">
            
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user_name'];?> <span class="caret"></span></a>
            <ul class="dropdown-menu" style="background-color: #ffffb3;">
            <li><a href="profile.php">Profile</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </li>
        <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
      </ul>

    </div>
  </div>
</nav>

</body>
<script>
function notify(){
    
   var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) 
            {
                console.log("gaande");
                var s = "notifications";
                document.getElementById(s).innerHTML=this.responseText;
            }
        };
        xmlhttp.open("GET","notification.php?",true);
        xmlhttp.send();
}
</script> 
</html>
