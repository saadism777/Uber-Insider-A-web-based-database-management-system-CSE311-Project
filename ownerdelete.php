<?php
require 'connection.php';

$user_id = $_GET["OWNER_ID"];

$delete = mysqli_query($conn, "DELETE FROM owner WHERE OWNER_ID='$user_id'");

if($delete){
  echo "<script>
        alert('Data Deleted!');
        window.location.href= 'ownerlist.php';
        </script>
  ";
  exit;
}

 ?>
