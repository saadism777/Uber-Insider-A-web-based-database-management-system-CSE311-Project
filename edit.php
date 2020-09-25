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
  <title>Edit Driver Details</title>
  
  <link rel = "icon" href =  
   "https://www.iconfinder.com/data/icons/logos-and-brands/512/347_Uber_logo-512.png" 
        type = "image/x-icon">
        <link rel="stylesheet" href="admin.css"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style.css">
      </head>

<body>
<nav>
        <div class="bg-img">
            <div class="container">
                <li><a href="admin.php" class="link" >Home</a></li>
                <li><a href="driverlist.php" class="aactive">Driver List</a></li>
                <li><a href="ownerlist.php" class="link">Owner List</a></li>
                <li><a href="carlist.php" class="link">Car List</a></li>
                <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
    <div class="Register"><h1>Editing Driver Registration Form </h1>
     
    </div>
<div class="mane">
<?php
require 'connection.php';
$user_id = $_GET['DRIVER_ID'];
$sql = "SELECT * FROM driver WHERE DRIVER_ID='$user_id'";
$get_user = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($get_user);

 ?>

 <form action="update.php?id=<?=$row['DRIVER_ID']?>" method="post" class="submission-form">
 <table>
    <tr>
      <td> 
        Driver ID :
       </td>
       <td>
          <input type="text" placeholder="Driver ID No" name="DRIVER_ID"  value="<?=$row['DRIVER_ID'];?>">
    </tr>
    <tr>
    <td>
      Name:
    </td>
    <td>
         <input type="text" placeholder="Enter your Name" name="NAME"  value="<?=$row['NAME'];?>">
    </td>
    </tr> 
    <tr>
    <td>
      Address:
    </td>
    <td>
         <input type="text" placeholder="Address" name="DRIVER_ADDRESS"  value="<?=$row['DRIVER_ADDRESS'];?>">
    </td>
    </tr> 
    <tr>
    <td>
      Phone_No:
    </td>
    <td>
         <input type="text" placeholder="Phone Number" name="PHONE_NO"  value="<?=$row['PHONE_NO'];?>">
    </td>
    </tr> 
    <tr>
    <td>
      Driven_Car_No:
    </td>
    <td>
         <input type="text" placeholder="Car Numberplate" name="DRIVEN_CAR_NO"  value="<?=$row['DRIVEN_CAR_NO'];?>">
    </td>
    </tr> 

    <tr>
    <td>
      Hire_Date:
    </td>
    <td>
         <input type="Date" placeholder="Hire Date" name="HIRE_DATE"  value="<?=$row['HIRE_DATE'];?>">
    </td>
    </tr> 
    <tr>
    <td>
      Monthly_Earning:
    </td>
    <td>
         <input type="text" placeholder="Monthly Earning" name="MONTHLY_EARNING"  value="<?=$row['MONTHLY_EARNING'];?>">
    </td>
    </tr> 

    <tr>
    <td>
      UBER_CONTRIBUTION:
    </td>
    <td>
         <input type="text" placeholder="Contribution to Uber " name="UBER_CONTRIBUTION"  value="<?=$row['UBER_CONTRIBUTION'];?>">
    </td>
    </tr> 

    <tr>
    <td>
       Ride_No:
    </td>
    <td>
         <input type="text" placeholder="Ride_No" name="RIDE_NO"  value="<?=$row['RIDE_NO'];?>">
    </td>
    </tr> 
    <tr>
    <td>
      Rating:
    </td>
    <td>
         <input type="text" placeholder="Average Rating" name="RATING"  value="<?=$row['RATING'];?>">
  
    </td>
    </tr> 
    <tr>
    <td>
       Owner_Id:
    </td>
    <td>
         <input type="text" placeholder="Owner_Id" name="OWNER_ID"  value="<?=$row['OWNER_ID'];?>">
    </td>
    </tr> 
    <tr>
    <td>
    </td>
    <td>
         <input type="Submit" value="insert" class="sendBtn" name="insert">
    </td>
    <td>
        <a class="sendBtn" href="driverlist.php"> Return </a>
    </td>
    </tr> 





  </table>

</form>