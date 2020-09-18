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
		<title>Driver List</title>
		<link rel = "icon" href =  
   "https://www.iconfinder.com/data/icons/logos-and-brands/512/347_Uber_logo-512.png" 
        type = "image/x-icon">
        <link rel="stylesheet" href="admin.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body class="loggedin">
    <!--<img class="header"src="images\Banner.JPG" alt="uberbanner">-->
    <nav>
        <div class="bg-img">
            <div class="container">
                <li><a href="admin.php" class="link" >Home</a></li>
               
                <li><a href="driverlist.php" class="aactive" class="link">Driver List</a></li>
                <li><a href="ownerlist.php" class="link">Owner List</a></li>
                <li><a href="carlist.php" class="link">Car List</a></li>
                <li><a href="logout.php"onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
<br>
		<div class="content">
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Car Numberplate</th>
                    <th scope="col">Hire Date</th>
                    <th scope="col">Monthly Earning</th>
                    <th scope="col">Uber Contribution (25%)</th>
                    <th scope="col">Total Rides Completed</th>
                    <th scope="col">Rating</th>
                    <th colspan="2" scope="col">Actions</th>
                  </tr>
                </thead>
                
                <?php
                  $conn = mysqli_connect("localhost","root","","uber_insider");
                  if($conn->connect_error){
                    die("Connection Failed:".$conn->connect_error);
                  }
                  $sql = "SELECT * from driver";
                  $result = "$conn-> query($sql)";
                  $num_rows=100;
                  if($result-> $num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo "<tr><td>". $row["DRIVER_ID"].
                      "</td><td>".$row["FIRST_NAME"].
                      "</td><td>".$row["LAST_NAME"].
                      "</td></tr>";

                    }
                    echo"</table";
                  }
                  else{
                    echo "0 result";
                  }
                  $conn->close();
                  ?>
                </tbody>
              </table>
			<h2 color= "white">Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>