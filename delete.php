<?php
require 'connection.php';

$user_id = $_GET["DRIVER_ID"];

$delete = mysqli_query($conn, "DELETE FROM driver WHERE DRIVER_ID='$user_id'");

if($delete){
  echo "<script>
        alert('Data Deleted!');
        window.location.href= 'driverlist.php';
        </script>
  ";
  exit;
}

 ?>
