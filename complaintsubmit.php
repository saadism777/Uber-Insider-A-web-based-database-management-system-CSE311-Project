<?php
require 'connection.php';
if(isset($_POST['PHONE_NO'])){
  $name   =  $_POST['CUST_NAME'];
  $driverphone = $_POST['PHONE_NO'];
  $customerphone = $_POST['CUST_PHONE_NO'];
  $carnumber = $_POST['CAR_NO'];
  $text = $_POST['TEXT'];

$is_inserted = mysqli_query($conn,"INSERT INTO complaint (PHONE_NO,CAR_NO,CUST_NAME,CUST_PHONE_NO,TEXT) 
VALUES ('$driverphone','$carnumber','$name','$customerphone','$text')");

if($is_inserted){
  echo "<script Type='text/javascript'>alert('Report Submitted Successfully!')</script>";
  echo "<script> location.href='complaintpage.php'; </script>";
}else{
  echo "Opps error!";
}

}else{
  echo "404 not found";
}



?>
