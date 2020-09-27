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
                <li><a href="complaintpanel.php"class="link">Complaint Box</a></li>
                <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
<br>
        <div>
			<h1 style="color:white;text-align:center" >Welcome back, <?=$_SESSION['name']?>!</h1>
        </div>

        
<?php
    require 'connection.php';
    $sql = "SELECT COUNT(DRIVER_ID) FROM driver";
    $sql2 ="SELECT SUM(MONTHLY_EARNING) AS Total FROM driver";
    $sql3 ="SELECT SUM(UBER_CONTRIBUTION) AS Rev FROM driver";
    $get_data = mysqli_query($conn,$sql);
    $get_data2 = mysqli_query($conn,$sql2);
    $get_data3 = mysqli_query($conn,$sql3);
    $drivnum = mysqli_fetch_assoc($get_data);
    $total = mysqli_fetch_assoc($get_data2);
    $rev = mysqli_fetch_assoc($get_data3);
    ?>
<br>
 
<div class="card-group">
  <div class="card">
    <img src="https://dealsforest.net/wp-content/uploads/2018/08/1529495091_959886_1529495325_noticia_normal.jpg" class="card-img-top" alt="drivnum">
    <div class="card-body">
      <h3 class="card-title">Total Number of Drivers</h3>
      <h1 class="card-text"><?=$drivnum["COUNT(DRIVER_ID)"]?></h1>
      <p class="card-text"><small class="text-muted">We have a total of <?=$drivnum["COUNT(DRIVER_ID)"]?> drivers driving with us on Uber right now</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://www.extremetech.com/wp-content/uploads/2017/01/496470-eight-uber-tips-for-a-smooth-ride.jpg" class="card-img-top" alt="drivearns">
    <div class="card-body">
      <h3 class="card-title">Total driver earning this month</h3>
      <h1 class="card-text"><?=$total["Total"]?> &#2547</h1>
      <p class="card-text"><small class="text-muted">All the drivers have earned <?=$total["Total"]?> BDT this month by driving with Uber</small></p>
    </div>
  </div>
  <div class="card">
    <img src="https://vid.alarabiya.net/images/2019/05/31/024ac1b9-43d4-4c98-bf40-72353eb523a9/024ac1b9-43d4-4c98-bf40-72353eb523a9_16x9_600x338.jpg" class="card-img-top" alt="ubrrevenue">
    <div class="card-body">
      <h3 class="card-title">Uber Revenue this Month</h3>
      <h1 class="card-text"><?=$rev["Rev"]?> &#2547</h1>
      <p class="card-text"><small class="text-muted">Uber have colleceted a monthly revenue of total <?=$rev["Rev"]?> BDT this month. </small></p>
    </div>
  </div>
</div>

<div>
			<a href="driverofthemonth.php"><h1 class="link" style="color:white;text-align:center" >Click here to view driver of the month !</h1></a>
        </div>
    </body>
</div>
</html>