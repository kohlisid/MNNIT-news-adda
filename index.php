<?php
error_reporting(0);
	include("headers.php");
	//include("connection.php");
  // if(session_status() != PHP_SESSION_NONE)
  // {
  //   header("Location:home.php"); 

  // }
  require('connection.php');
  $con = connect("news_adda");
  session_start();
  $var = $_SESSION['user_name'];
  if($var !="")
    header("Location:home.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>NEWS_ADDA</title>
</head>
<body>
<style>
#register_submit, #login_submit{
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
}
#register_submit:hover,
#login_submit:focus, #login_submit:hover, 
#register_submit:focus{
  color: #ff4;
  background-color: #1CA347;
  border-color: #1CA347;
}
body {
    background-image: url("images/background.jpg");
    background-color: #cccccc;
}
</style>
<div id = "demo">
<img src="images/logo.jpg" class="img-rounded col-md-offset-4 col-md-4" alt="logo" width="304" height="236" >

 </br></br></br></br></br> </br></br></br></br></br> </br></br></br>
<div class="container col-xs-12 col-md-offset-4 col-md-4" style="height:410px ;padding-left: 0px;padding-right: 0px; background-color: rgba(211,211,211,0.5); border: 10px">
  
  <ul class="nav nav-tabs nav-justified">
    <li class="active " ><a data-toggle="tab" href="#login"><b>Log In</b></a></li>

    <li><a data-toggle="tab" href="#signup">Sign Up</a></li>
  </ul>
  <div class="tab-content">
    <div id="login" class="tab-pane fade in active text-center " style="margin-top: 35px">
      </br></br>
      <form class="form-horizontal" action="test.php" method="POST">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="u_name">Username  </label>
                    <div class="col-sm-8">
                        <input class="form-control col-sm-2" type="text" placeholder="Username" id="u_name" name="user_name" required></br>
                    </div>
                </div>
                <div class="form-group">
                     <label class=" control-label col-sm-3" for=p _wd ">Password </label>

        <div class="col-sm-8 ">
        <input class = "form-control " type = "password" placeholder="Password" id ="p_wd" name="pwd" required></br>
        </div>
    </div>
    <div class = "form-group ">
        <div class= "col-sm-offset-2 col-sm-10 ">
<input type="submit" name="submit" id="login_submit" tabindex="4" class=" btn btn-register" value="Log In" style="width:100px; text-align: center;margin-left: 70px; margin-right: 170px">
      <?php  echo '<p>'.$_SESSION['text'].'</p>';?>
        </div>
    </div>
</form>
    </div>

    <div id="signup" class="tab-pane fade text-center" style="height: 400px;">
    </br></br>
     <form class="form-horizontal " action ="test.php" method="POST" style="padding-left: 15px;padding-right: 15px">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="u_name">Username</label>
                        <div class="col-sm-10">
                            <input class="form-control " type="text" id="u_name" name="user_name" placeholder="username" required></br>
                        </div>
                    </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2 " for="firstname">First Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="f_name" name="first_name" placeholder="first name" required></br>
                        </div>
                        </div>
                          <div class="form-group">
                        <label class="control-label col-sm-2 " for="lastname">Last Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="last_name" name="last_name" placeholder="last name" required></br>
                        </div>
                        </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 " for="e_mail">E-mail</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" id="e_mail" name="email" placeholder="E-mail" required></br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class=" control-label col-sm-2" for=p _wd ">Password </label>
        <div class="col-sm-10 " >

        <input class = "form-control " type = "password" id ="p_wd" name="password" required></br>
        </div>
    
    <div class = "form-group ">
        <div class= "col-sm-offset-2 col-sm-10 ">
   <input type="submit" name="signup_submit" id="register_submit" tabindex="4" class="form-control btn btn-primary" value="Register Now" style="width:150px; text-align: center;margin-left: 50px; margin-right: 140px" >
        </div>
    </div>

</form>

</div>
    </div>
  </div>
</div>
</div>
</body>
</html>