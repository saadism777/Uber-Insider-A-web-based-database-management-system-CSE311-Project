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
		<title>Car List</title>
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
                <li><a href="admin.php" class="link" >Home</a></li>
                <li><a href="driverlist.php" class="link">Driver List</a></li>
                <li><a href="ownerlist.php" class="link">Owner List</a></li>
                <li><a href="carlist.php"class="aactive"  class="link">Car List</a></li>
                <li><a href="complaintpanel.php"class="link">Complaint Box</a></li>
                <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
<br>
		<div class="content">
    <div class="content">
            <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Car License Number</th>
                    <th scope="col">Car Name</th>
                    <th scope="col">Car Color</th>
                  </tr>
                </thead>
                
                <?php
                  require 'connection.php';
                  $sql = "SELECT * FROM car";
                  
                  $get_data = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($get_data) > 0){
                    while($row = mysqli_fetch_assoc($get_data)){
                      echo
                      "<tr><td>". $row["CAR_LICENSE_NO"].
                      "</td><td>".$row["CAR_NAME"].
                      "</td><td>".$row["CAR_COLOR"].
                      "</td>
                      </tr>";

                    }
                    echo"</table";
                  }
                  else{
                    echo "0 result";
                  }
                  ?>
                </tbody>
              </table>
			
	</body>
</html>