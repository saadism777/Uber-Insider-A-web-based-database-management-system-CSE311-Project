<?php
require 'connection.php';

$user_id = $_GET["PHONE_NO"];

$delete = mysqli_query($conn, "DELETE FROM complaint WHERE PHONE_NO=$user_id");

if($delete){
  echo "<script>
        alert('Complaint Deleted!');
        window.location.href= 'complaintpanel.php';
        </script>
  ";
  exit;
}

 ?>
