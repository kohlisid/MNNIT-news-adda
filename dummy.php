<?php
session_start();

$username="Ram";
?>
<html>
<head>
<title>NewsCentral</title>
<link rel="stylesheet" href="include/css/layout.css" >
<link rel="stylesheet" href="include/css/homeLayout.css" >
</head>
<body>
<div class="header">
	<img src="lib/images/logo.png" class="headerBanner" />
	<h1 align="center">News &copy;entral</h1>
	<ul class="navbar">
		<li>About Us</li>
		<li>Contact Us</li>
		<li>International News</li>
		<li>National News</li>
		<li>Bussiness News</li>
		<li>Headlines</li>
	</ul>
</div>
<div class="content">
	<div class="dashBoard">
		<img src="lib/images/user.png" class="userDP"><br>
		<hr>
		<span class="userName"><?= $username ?>'s Dashboard</span>
		<ul class="dashAction">
			<li class="active">Home</li>
			<li>Profile</li>
			<li>Your Subscriptions</li>
			<li>Your Friends</li>
			<li>Logout</li>
		</ul>
	</div>
	<div class="dispContent">
		<div class="dispContent">
			<div class="mainContent">
				<div class="head">
					Top Stories...
					<hr>
				</div>
				<!-- <?php
					while($arr=mysqli_fetch_array($res)){
						?>
						<div class="card"><div class="cardHead"> <?=$arr['head'] ?> <hr>
					</div>
						<div class="cardBody"><?= $arr['body'] ?> </div>
						<?php
					}
				?> -->
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				<div class="card">
					<div class="cardHead">
						There has been a bank robbery in New York...
						<hr>
					</div>
					<div class="cardBody">
						Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.Yesterday night 5 burglars broke in the New York City Central Bank and stole away in millions.
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>
