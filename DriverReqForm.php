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
  <title>Driver Details</title>
  
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
    <div class="Register"><h1> Driver Registration Form </h1>
     
    </div>
<div class="mane">

<form action="insert.php" method="post" class="submission-form">
  <table>
    <tr>
      <td> 
        Driver_Id :
       </td>
       <td>
          <input type="Driver_Id" placeholder="Driver_Id" Driver_Id="">
    </tr>
    <tr>
    <td>
      Name:
    </td>
    <td>
         <input type="text" placeholder="Name" Name="">
    </td>
    </tr> 
    <tr>
    <td>
      Address:
    </td>
    <td>
         <input type="Address" placeholder="Address" Address="">
    </td>
    </tr> 
    <tr>
    <td>
      Phone_No:
    </td>
    <td>
         <input type="Phone-Number" placeholder="Phone_No" Phone_No="">
    </td>
    </tr> 
    <tr>
    <td>
      Driven_Car_No:
    </td>
    <td>
         <input type="Driven_Car_No" placeholder="Driven_Car_No" Driven_Car_No="">
    </td>
    </tr> 

    <tr>
    <td>
      Hire_Date:
    </td>
    <td>
         <input type="Date" placeholder="Hire_Date" Hire_Date="">
    </td>
    </tr> 
    <tr>
    <td>
      Driven_Car_No:
    </td>
    <td>
         <input type="Driven_Car_No" placeholder="Driven_Car_No" Driven_Car_No="">
    </td>
    </tr> 

    <tr>
    <td>
      Monthly_Earning:
    </td>
    <td>
         <input type="Monthly_Earning" placeholder="Monthly_Earning" Monthly_Earning="">
    </td>
    </tr> 

    <tr>
    <td>
       Ride_No:
    </td>
    <td>
         <input type="Ride_No" placeholder="Ride_No" Ride_No="">
    </td>
    </tr> 
    <tr>
    <td>
      Rating:
    </td>
    <td>
         <select>
          <option>1</option>
          <option>1.5</option>
          <option>2</option>
          <option>2.5</option>
          <option>3</option>
          <option>3.5</option>
          <option>4</option>
          <option>4.5</option>
          <option>5</option>
        </select>
  
    </td>
    </tr> 
    <tr>
    <td>
       Owner_Id:
    </td>
    <td>
         <input type="Id" placeholder="Owner_Id" Owner_Id="">
    </td>
    </tr> 
    <tr>
    <td>
    </td>
    <td>
         <input type="Submit" value="Submit" id="sendBtn">
    </td>
    </tr> 





  </table>

</form>
</div>
</body>
</html>