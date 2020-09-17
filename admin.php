<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Admin Panel</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel = "icon" href =  
   "https://www.iconfinder.com/data/icons/logos-and-brands/512/347_Uber_logo-512.png" 
        type = "image/x-icon">
	</head>
	<body class="loggedin">
	<img size=100% src="https://images.squarespace-cdn.com/content/v1/5a42ecabedaed8b07382c381/1575079202706-Y1WR1B8MQM0CJCZXT0CK/ke17ZwdGBToddI8pDm48kPfTkB9WlY3NNngJ856as8gUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYwL8IeDg6_3B-BRuF4nNrNcQkVuAT7tdErd0wQFEGFSnLtWIiVBlkNZxDHH90vw4mK2TMUHlvL_OCLYhy8WCvU4QyyigsdnO47i1SC0pwLlxw/Uber+Banner.jpg" alt="uberbanner">
		<nav class="navtop">
			<div>
				<h1>Website Title</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>