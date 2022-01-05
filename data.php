<?php
session_start();
include_once("config/database.php");
if(isset($_POST['login_button'])) {
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['password']);
	$ydate = date("d-m-Y H:i:s"); 
	
	$sql = "SELECT * FROM users WHERE email='$user_email'";
	$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	$row = mysqli_fetch_assoc($resultset);
	$username = $row['username'];	
	if($row['password']==$user_password){
		$_SESSION['username'] = $username;
		$_SESSION['id'] = $row['id'];
		/******************************************************** */
$current_date = date("d-M-Y");
$current_time= date("H:i:s");
$title= 'Employee LogIN In E-PANEL';
$ip = $_SERVER['REMOTE_ADDR'];
$event= 'logIN';
$sql3= "INSERT INTO activity (eid,title,event,date_,time_, mac_address) VALUES ('$username','$title','$event','$current_date','$current_time','$ip')"; 
$query_check1 = $conn->query($sql3);
/******************************************************** */
		echo "ok";
	} else {
		echo "email or password does not exist."; // wrong details 
	}		
}
?>