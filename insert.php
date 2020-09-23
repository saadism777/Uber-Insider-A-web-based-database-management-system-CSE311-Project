<?php
require 'connection.php';


if(isset($_POST['id'])){
	$id = $_POST['id'];
	$username   =  $_POST['username'];
	$user_email =  $_POST['email'];

$is_inserted = mysqli_query($conn,"INSERT INTO user (id,user_name,email) VALUES ('$id', '$username','$user_email')");



if($is_inserted){
  echo "Inserted successfully";
}else{
  echo "Opps error!";
}

}else{
  echo "404 not found";
}



?>
