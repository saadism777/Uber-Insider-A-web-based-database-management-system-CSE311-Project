<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'uber_insider';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['DRIVER_ID'], $_POST['PHONE_NO']) ) {
	exit('Please fill both the username and password fields!');
}
if ($stmt = $con->prepare('SELECT DRIVER_ID, PHONE_NO FROM driver WHERE DRIVER_ID = ?')) {
	$stmt->bind_param('s', $_POST['DRIVER_ID']);
	$stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if ($_POST['PHONE_NO'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin2'] = TRUE;
            $_SESSION['name2'] = $_POST['DRIVER_ID'];
            $_SESSION['id2'] = $id;
            header("Location: driverhomepage.php?");
        } else {
            echo '<font color=red>Incorrect password!</font>';
        }
    } else {
        echo '<font color=red>Incorrect username</font>';
    }
    $stmt->close();
}
?>

