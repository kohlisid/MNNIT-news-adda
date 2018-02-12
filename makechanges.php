<!-- <!-- <!-- <!-- <div class ="container">
 <div class = "col-md-3" id="wrapper">

        <!-- Sidebar 
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav" style="text-align: center;">
               <br> 
              <li>
                   			 
          		<img src="images/dp.jpg" class="avatar img-circle" alt="avatar" style="max-height: 100px">
          		<br>
          		<h3 style="color: white;"><?php echo $_SESSION['user_name'] ?></h3>
        		
      			
      			</li>
                <li>
                    <a href="profile.php">Profile</a>
                </li>
                <li>
                    <a href="#">My Article Status</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Simple Sidebar</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
<div class="container-fluid col-md-6">
<h1 style="text-align: center">New Article Page</h1>
<!-- <hr class="divider col-md-offset-2"><div>
<!-- sidebar entry -->
	<div class = "col-md-4">
		<form action = "db_newarticle.php" method = "post">
			<div class = "container">
			<!-- <div class = "col-md-4"> -->
			<label for="arc_name">Heading</label>
			<input class="form-control col-md-4" type="text" id="arc_name" name="article_heading" required>
			
			<!-- </div> -->
			<br>
				<!-- <div class = "col-md-5"> -->
				<!-- <label for="arc_desc">Article Description</label>
				<textarea class="form-control" id="arc_desc" name="article_description" style="resize: none;" required> -->
				<!-- </textarea> -->
			<!-- </div>
			</div>
				<div class = "container">
			 -->
				<label for="arc_con">Content</label>
				<textarea class="form-control" id="arc_con" name="article_content" style="resize: none;" required>
				</textarea>
				<br><br><br>
				<div class = "form-group ">
        <div class= "col-sm-offset-2 col-sm-10 ">
   <input type="submit" name="newarticle_submit" id="submit" tabindex="4" class="form-control btn btn-register" value="SUBMIT">
        </div>
    </div>
			
		</form>
		<!-- </div> -->
</div>
</div>
</div>
</div> 