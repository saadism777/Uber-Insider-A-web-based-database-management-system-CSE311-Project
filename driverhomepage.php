<?php
session_start();
if (!isset($_SESSION['loggedin2'])) {
    header('Location: driverlogin.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Driver Home Page</title>
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
                <li><a href="driverhomepage.php"class="aactive" class="link" >Home</a></li>
               
 <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
<br>
<?php
                  require 'connection.php';
                  $id=$_SESSION['name2'];
                  $sql = "SELECT * FROM driver WHERE DRIVER_ID='$id'";
                  
                  $get_data = mysqli_query($conn,$sql);

                  $row = mysqli_fetch_assoc($get_data);
                  ?>

        <div>
			<h1 style="color:white;text-align:center;" >Welcome back, <?=$_SESSION['name2']?>!</h1>
        </div>
        
        <div style="color:white;margin:5%;">
        <h2 class="link">Driver Details:-</h2>
        <h3>Full Name :<?=$row["NAME"]?> </h3>
        <h3>Address :<?=$row["DRIVER_ADDRESS"]?></h3>
        <h3>Phone Number :<?=$row["PHONE_NO"]?></h3>
        <h3>Date Hired :<?=$row["HIRE_DATE"]?> </h3>
        <h3>Total Number of Rides :<?=$row["RIDE_NO"]?> </h3>
        <h3>Average Rating :<?=$row["RATING"]?>&#9733</h3>
        <h2 class="link">Payment Details:-</h2>
        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">Your Total Earning This Month</div>
        <div class="card-body">
        <h2 class="card-title"> <?=$row["MONTHLY_EARNING"]?> &#2547</h2>
        <p class="card-text">You have earned a total of <?=$row["MONTHLY_EARNING"]?> &#2547 this month from <?=$row["RIDE_NO"]?> rides .</p>
  </div>
</div>
<div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Uber Commission</div>
  <div class="card-body">
    <h2 class="card-title"> <?=$row["UBER_CONTRIBUTION"]?>&#2547</h2>
    <p class="card-text">You have to pay 25% of your total earning from this month to Uber.</p>
  </div>
</div>
</div>
