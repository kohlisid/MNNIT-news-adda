<?php
session_start();
include("headers.php");
include("navbar.php");
//print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>

</head>
<body>
<div class="container" style="padding-top: 50px;">
    <h1 align="center">Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
         <!--  <img src="images/dp.jpg" class="avatar img-circle" alt="avatar" style="max-height: 100px">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control"> -->
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal"  action ="updateprofile.php" method="post">
           <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $_SESSION['user_name'];?> " disabled>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="first_name" value="<?php echo $_SESSION['first_name'];?> ">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $_SESSION['last_name'];?>" name="last_name">
            </div>
          </div>
         
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $_SESSION['email'];?>" name="email">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="<?php echo $_SESSION['password'];?>" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="<?php echo $_SESSION['password'];?>" name="confirmpassword">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name = "save_changes" value="Save Changes" onclick ="alert('Changes made by you has been saved successfully!')">
              <span></span>
              <input type="submit" class="btn btn-default" name ="cancel" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
</html>

