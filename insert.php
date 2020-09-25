<?php
require 'connection.php';


if(isset($_POST['NAME'])){
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

$is_inserted = mysqli_query($conn,"INSERT INTO driver (NAME,DRIVER_ADDRESS,PHONE_NO,DRIVEN_CAR_NO,HIRE_DATE,MONTHLY_EARNING,UBER_CONTRIBUTION,RIDE_NO,RATING,OWNER_ID) 
VALUES ('$name','$address','$phone','$carnumber','$date','$monthly','$ubercontribution','$rideno','$rating','$ownerid')");
$is_inserted_2 = mysqli_query($conn,"INSERT INTO car (CAR_LICENSE_NO,CAR_NAME,CAR_COLOR,OWNER_ID)
VALUES ('$carnumber','$carname','$carcolor','$ownerid')");


if($is_inserted&&$is_inserted_2){
  echo "<script Type='text/javascript'>alert('Data Added Successfully!')</script>";
  echo "<script> location.href='driverlist.php'; </script>";
}else{
  echo "Opps error!";
}

}else{
  echo "404 not found";
}



?>
