<?php
require 'connection.php';


if(isset($_POST['DRIVER_ID'])){
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
$is_inserted = mysqli_query($conn,"INSERT INTO driver (DRIVER_ID,NAME,DRIVER_ADDRESS,PHONE_NO,DRIVEN_CAR_NO,HIRE_DATE,MONTHLY_EARNING,UBER_CONTRIBUTION,RIDE_NO,RATING,OWNER_ID) 
VALUES ('$id', '$name','$address','$phone','$carnumber','$date','$monthly','$ubercontribution','$rideno','$rating','$ownerid')");



if($is_inserted){
  echo "<script Type='text/javascript'>alert('Data Added Successfully!')</script>";
  echo "<script> location.href='driverlist.php'; </script>";
}else{
  echo "Opps error!";
}

}else{
  echo "404 not found";
}



?>
