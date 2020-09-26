<?php
require 'connection.php';

  $id=$_GET['id'];
  $name   =  $_POST['NAME'];
  $address =  $_POST['ADDRESS'];
  $phone = $_POST['PHONE_NO'];
  $carnumber = $_POST['CAR_NO'];
  
$sql2="UPDATE owner SET NAME='$name',ADDRESS='$address',PHONE_NO='$phone',CAR_NO='$carnumber' WHERE OWNER_ID='$id'"; 

$update = mysqli_query($conn,$sql2);

if($update){
  echo "<script Type='text/javascript'>alert('Owner Data Edited Successfully!')</script>";
  echo "<script> location.href='ownerlist.php'; </script>";
}else{
  echo "Opps error!";
}




?>