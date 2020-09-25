<?php
require 'connection.php';
  $id = $_POST['DRIVER_ID'];
  $name   =  $_POST['NAME'];
  $address =  $_POST['DRIVER_ADDRESS'];
  $phone = $_POST['PHONE_NO'];
  $carnumber = $_POST['DRIVEN_CAR_NO'];
  $date = $_POST['HIRE_DATE'];
  $monthly = $_POST['MONTHLY_EARNING'];
  $ubercontribution = $_POST['UBER_CONTRIBUTION'];
  $rideno = $_POST['RIDE_NO'];
  $rating = $_POST['RATING'];
  $ownerid = $_POST['OWNER_ID'];

$sql = "UPDATE driver SET NAME='$name',DRIVER_ADDRESS='$address',PHONE_NO='$phone',
DRIVEN_CAR_NO='$carnumber',HIRE_DATE='$date',MONTHLY_EARNING='$monthly',UBER_CONTRIBUTION='$ubercontribution',
RIDE_NO='$rideno',RATING='$rating',OWNER_ID='$ownerid' WHERE DRIVER_ID=$id";
$update = mysqli_query($conn, $sql);

if($update){
    echo "<script Type='text/javascript'>alert('Data Edited Successfully!')</script>";
    echo "<script> location.href='driverlist.php'; </script>";
}else{
  echo 'try again';
}
 ?>
