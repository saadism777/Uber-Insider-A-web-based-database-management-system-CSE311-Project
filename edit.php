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

$car_id = $row['DRIVEN_CAR_NO'];
$sql2 = "SELECT * FROM car WHERE CAR_LICENSE_NO='$car_id'";
$get_user2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($get_user2);

 ?>

 <form action="update.php?id=<?=$row['DRIVER_ID']?>&carid=<?=$row['DRIVEN_CAR_NO']?>" method="post" class="submission-form">
 <table>
 <tr>
    <td>
       Owner_Id: Currently (<?=$row['OWNER_ID'];?>)
       </td>
       <?php 
       require 'connection.php';
            
    
                  
                  $sql = "SELECT OWNER_ID,NAME FROM owner";
                  $get_data = mysqli_query($conn,$sql);
                  if(mysqli_num_rows($get_data) > 0){
                    echo "<td><select name= 'OWNER_ID'val>";
                    echo "<option>--Select Owner--</option>";
                    while($row = mysqli_fetch_array($get_data)){
                    echo "<option value='$row[OWNER_ID]'>$row[OWNER_ID] | $row[NAME]</option>";
                  }
                  echo "</select>";
                  mysqli_free_result($get_data);
                }
                else {
                  echo "Something went wrong...";
              }
     
        ?>
    </td>
    <td> Owner not in the list? Add Owner <a href="OwnerReqForm.php"> here </a>
            </td> 
    <tr>
 <tr>
    <td>
      New ID:
    </td>
    <td>
         <input type="text" placeholder="Enter your New ID" name="DRIVER_ID"  value="<?=$row['DRIVER_ID'];?>">
    </td>
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
      Phone Number:
    </td>
    <td>
         <input type="text" placeholder="Phone Number" name="PHONE_NO"  value="<?=$row['PHONE_NO'];?>">
    </td>
    </tr> 
    <tr>
    <td>
      Car License No:
    </td>
    <td>
         <input type="text" placeholder="Car Numberplate" name="DRIVEN_CAR_NO"  value="<?=$row['DRIVEN_CAR_NO'];?>">
    </td>
    </tr> 

    <tr>
    <td>
      Car Details:
    </td>
    <td>
         <input type="text" placeholder="Car Model" name="CAR_NAME" value="<?=$row2['CAR_NAME'];?>">
    </td>
    <td>
    <select name="CAR_COLOR">
          <option value="<?=$row2['CAR_COLOR'];?>"><?=$row2['CAR_COLOR'];?></option>
          <option style="color:red;font-weight: bold" value="Red">Red</option>
          <option style="color:blue;font-weight: bold" value="Blue">Blue</option>
          <option style="color:yellow;font-weight: bold" value="Yellow">Yellow</option>
          <option style="color:black;font-weight: bold" value="Black">Black</option>
          <option style="color:gray;font-weight: bold" value="Gray">Gray</option>
          <option style="color:silver;font-weight: bold" value="Silver">Silver</option>
        </select>
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
      Monthly Earning:
    </td>
    <td>
         <input type="text" placeholder="Monthly Earning" name="MONTHLY_EARNING"  value="<?=$row['MONTHLY_EARNING'];?>">
    </td>
    </tr> 


    <tr>
    <td>
    Total Number of Rides:
    </td>
    <td>
         <input type="text" placeholder="Ride_No" name="RIDE_NO"  value="<?=$row['RIDE_NO'];?>">
    </td>
    </tr> 
    <tr>
    <td>
     Average Rating:
    </td>
    <td>
         <input type="text" placeholder="Average Rating" name="RATING"  value="<?=$row['RATING'];?>">
  
    </td>
    </tr> 
  
    <td>
         <input type="Submit" value="insert" class="sendBtn" name="insert">
    </td>
    <td>
        <a class="sendBtn" href="driverlist.php"> Return </a>
    </td>
    </tr> 





  </table>

</form>