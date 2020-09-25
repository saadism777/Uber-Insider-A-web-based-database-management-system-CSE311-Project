<?php
require 'connection.php';
  $id = $_GET['id'];
  $carid = $_GET['carid'];
  $driver_id = $_POST['DRIVER_ID'];
  $name   =  $_POST['NAME'];
  $address =  $_POST['DRIVER_ADDRESS'];
  $phone = $_POST['PHONE_NO'];
  $carnumber = $_POST['DRIVEN_CAR_NO'];
  $date = $_POST['HIRE_DATE'];
  $monthly = $_POST['MONTHLY_EARNING'];
  $ubercontribution = $monthly*0.25;
  $rideno = $_POST['RIDE_NO'];
  $rating = $_POST['RATING'];
  $ownerid = $_POST['OWNER_ID'];

  $carname = $_POST['CAR_NAME'];
  $carcolor = $_POST['CAR_COLOR'];

$sql = "UPDATE driver SET DRIVER_ID='$driver_id', NAME='$name',DRIVER_ADDRESS='$address',PHONE_NO='$phone',
DRIVEN_CAR_NO='$carnumber',HIRE_DATE='$date',MONTHLY_EARNING='$monthly',UBER_CONTRIBUTION='$ubercontribution',
RIDE_NO='$rideno',RATING='$rating',OWNER_ID='$ownerid' WHERE DRIVER_ID=$id";
$sql2 = "UPDATE car SET CAR_LICENSE_NO='$carnumber',CAR_NAME='$carname',CAR_COLOR='$carcolor',OWNER_ID='$ownerid' WHERE CAR_LICENSE_NO=$carid ";
$update = mysqli_query($conn, $sql);
$update2 = mysqli_query($conn, $sql2);

if($update){
    echo "<script Type='text/javascript'>alert('Data Edited Successfully!')</script>";
    echo "<script> location.href='driverlist.php'; </script>";
}else{
  echo 'try again';
}
 ?>
