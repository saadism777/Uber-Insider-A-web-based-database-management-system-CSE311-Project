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
		<link rel = "icon" href =  
   "https://www.iconfinder.com/data/icons/logos-and-brands/512/347_Uber_logo-512.png" 
        type = "image/x-icon">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="admin.css"/>
    </head>
	<body class="loggedin">
    <!--<img class="header"src="images\Banner.JPG" alt="uberbanner">-->
    <nav>
        <div class="bg-img">
            <div class="container">
                <li><a href="admin.php"class="aactive" class="link" >Home</a></li>
                <li><a href="driverlist.php" class="link">Driver List</a></li>
                <li><a href="ownerlist.php" class="link">Owner List</a></li>
                <li><a href="carlist.php" class="link">Car List</a></li>
                <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
<br>
<div>
			<h1 style="color:white;text-align:center" >Your driver of the month is: </h1>
</div>
<?php
    require 'connection.php';
    $sql = "SELECT NAME,DRIVER_ADDRESS,PHONE_NO,RATING,HIRE_DATE,MAX(MONTHLY_EARNING) AS MAXEARN,UBER_CONTRIBUTION,RIDE_NO FROM driver";
    $get_data = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($get_data);
    ?>

<div style="color:white;margin:5%;">
<p style="font-size:50px;"><b style="font-size:100px;"><?=$row["NAME"]?></b> Who completed <?=$row["RIDE_NO"]?> rides and earned a total of <?=$row["MAXEARN"]?> &#2547 and contributed <?=$row["UBER_CONTRIBUTION"]?> &#2547 to Uber.</h3>
        
        <h2 class="link">Driver Details:-</h2>
        
        <h3>Address :<?=$row["DRIVER_ADDRESS"]?></h3>
        <h3>Phone Number :<?=$row["PHONE_NO"]?></h3>
        <h3>Date Hired :<?=$row["HIRE_DATE"]?> </h3>
        <h3>Average Rating :<?=$row["RATING"]?>&#9733</h3>
  </div>
  <a href="admin.php"><h1 class="link" style="color:white;text-align:center" >Go back to homepage !</h1></a>