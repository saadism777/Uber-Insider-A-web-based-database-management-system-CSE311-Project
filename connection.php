<?php

  $db_server = "localhost";
  $db_user   = "root";
  $db_pass   = "";
  $db_name   = "uber_insider";
  $conn = mysqli_connect($db_server,$db_user,$db_pass,$db_name);
  if(!$conn){
    die("Connection failed! :".mysqli_connect_error());
  }

?>
