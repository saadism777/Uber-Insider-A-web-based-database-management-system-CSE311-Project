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
  <title>Add Owner Details</title>
  
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
                <li><a href="driverlist.php" class="link">Driver List</a></li>
                <li><a href="ownerlist.php" class="aactive">Owner List</a></li>
                <li><a href="carlist.php" class="link">Car List</a></li>
                <li><a href="logout.php" onclick="return confirm('Are you sure to logout?');" class="link"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
             </div>
        </div>
    </nav>
    <div class="Register"><h1> Owner Registration Form </h1>
     
    </div>
<div class="mane">

<form action="OwnerReqForm.php?" method="post" class="submission-form">
  <table>
    <tr>
    <td>
      Name:
    </td>
    <td>
         <input type="text" placeholder="Enter owners Name" name="NAME">
    </td>
    </tr> 
    <tr>
    <td>
      Address:
    </td>
    <td>
         <input type="text" placeholder="Address" name="ADDRESS">
    </td>
    </tr> 
    <tr>
    <td>
      Phone Number:
    </td>
    <td>
         <input type="text" placeholder="Phone Number" name="PHONE_NO">
    </td>
    </tr> 
    <tr>
    <td>
      Car License No:
    </td>
    <td>
         <input type="text" placeholder="Car Numberplate" name="CAR_NO">
    </td>
    </tr> 

    
    <div>
    <td>
         <input type="Submit" value="insert" class="btn btn-primary" name="insert">
    </td>
    <td>
        <a class="btn btn-danger" href="ownerlist.php"> Return </a>
    </td>
    </tr> 

</div>



  </table>

</form>
</div>
</body>
</html>
<?php
require 'connection.php';


if(isset($_POST['NAME'])){
  $name   =  $_POST['NAME'];
  $address =  $_POST['ADDRESS'];
  $phone = $_POST['PHONE_NO'];
  $carnumber = $_POST['CAR_NO'];
  
$is_inserted = mysqli_query($conn,"INSERT INTO owner (NAME,ADDRESS,PHONE_NO,CAR_NO) 
VALUES ('$name','$address','$phone','$carnumber')");



if($is_inserted){
  echo "<script Type='text/javascript'>alert('Owner Data Added Successfully!')</script>";
  echo "<script> location.href='ownerlist.php'; </script>";
}else{
  echo "Opps error!";
}

}



?>
