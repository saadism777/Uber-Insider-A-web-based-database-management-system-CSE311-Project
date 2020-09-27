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
		<title>Complaint Box</title>
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
                <li><a href="carlist.php" class="link">Car List</a></li>
                <li><a href="complaintpanel.php" class="aactive" class="link">Complaint Box</a></li>
                <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
<br>
<?php
    require 'connection.php';
    $sql = "SELECT COUNT(PHONE_NO) as totcom FROM complaint";
    $get_data = mysqli_query($conn,$sql);
    $totalcomplains = mysqli_fetch_assoc($get_data);
    ?>
<div>
			<h1 style="color:white;" >Total Complaints : <?=$totalcomplains["totcom"]?>  </h1>
</div>

<table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Driver Name</th>
                    <th scope="col">Car License Number</th>
                    <th scope="col">Driver Phone Number</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Customer Phone Number</th>
                    <th scope="col">Complaint Description</th>
                    <th scope="col">Complaint Date</th>
                    <th scope="col">Solved?</th>
                  </tr>
                </thead>
                
                <?php
                  require 'connection.php';
                  $sql2 = "SELECT D.NAME,D.PHONE_NO,D.DRIVEN_CAR_NO,CUST_NAME,CUST_PHONE_NO,TEXT,REPORTED_AT FROM driver AS D ,complaint AS C WHERE D.PHONE_NO=C.PHONE_NO OR D.DRIVEN_CAR_NO=C.CAR_NO";
                  
                  $get_data2 = mysqli_query($conn,$sql2);
                  if(mysqli_num_rows($get_data2) > 0){
                    while($row = mysqli_fetch_assoc($get_data2)){
                      echo
                      "<tr><td>". $row["NAME"].
                      "</td><td>".$row["DRIVEN_CAR_NO"].
                      "</td><td>".$row["PHONE_NO"].
                      "</td><td>".$row["CUST_NAME"].
                      "</td><td>".$row["CUST_PHONE_NO"].
                      "</td><td>".$row["TEXT"].
                      "</td><td>".$row["REPORTED_AT"].
                      "</td><td><a class='btn btn-danger' href='comdelete.php?PHONE_NO=".$row["PHONE_NO"]."'>Delete</a></td>
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
