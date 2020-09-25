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
        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="admin.css"/>  
      </head>
	<body class="loggedin">
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
<style>  .myButton {
  width:15%;
  margin-left:40%;
color: rgb(255, 255, 255); font-size: 18px; line-height: 18px; padding: 12px; border-radius: 50px; font-family: Georgia, serif; font-weight: normal; text-decoration: none; font-style: normal; font-variant: normal; text-transform: none; background-image: linear-gradient(to right, rgb(0, 0, 0) 0%, rgb(104, 104, 104) 50%, rgb(0, 0, 0) 100%); box-shadow: rgb(0, 0, 0) 5px 5px 15px 5px; border: 2px solid rgb(0, 0, 0); display: inline-block;}
.myButton:hover {
background: #000000; }
.myButton:active {
background: #000000; }
  </style>
  <table >
  <a  href="DriverReqForm.php">
<button class="myButton" type="button"> Add </button></a></table>
<br>
		<div class="content">
            <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Address</th>
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
                  require 'connection.php';
                  $sql = "SELECT * FROM driver";
                  
                  $get_data = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($get_data) > 0){
                    while($row = mysqli_fetch_assoc($get_data)){
                      echo
                      "<tr><td>". $row["DRIVER_ID"].
                      "</td><td>".$row["NAME"].
                      "</td><td>".$row["DRIVER_ADDRESS"].
                      "</td><td>".$row["PHONE_NO"].
                      "</td><td>".$row["DRIVEN_CAR_NO"].
                      "</td><td>".$row["HIRE_DATE"].
                      "</td><td>".$row["MONTHLY_EARNING"].
                      "</td><td>".$row["UBER_CONTRIBUTION"].
                      "</td><td>".$row["RIDE_NO"].
                      "</td><td>".$row["RATING"].
                      "</td> <td>
                      <a href='edit.php?DRIVER_ID=".$row["DRIVER_ID"]."'>Edit</a>
                      <a href='delete.php?DRIVER_ID=".$row["DRIVER_ID"]."'>Delete</a>
                    </td>
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
    </div>
    
	</body>
</html>