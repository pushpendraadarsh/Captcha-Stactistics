<?php
/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 
 */
include("config/database.php");
session_start();
if(isset($_SESSION['username'])){
    $eid = $_SESSION['username'];
    $ydate = date("d-m-Y H:i:s"); 

$query = "UPDATE employee SET last_seen='$ydate',mac_address='$ip' WHERE eid ='$eid'";
$query_check = mysqli_query($conn,$query);
/******************************************************** */
$current_date = date("d-M-Y");
$current_time= date("H:i:s");
$title= 'Employee Logout In E-PANEL';
$ip = $_SERVER['REMOTE_ADDR'];
$event= 'logout';
$sql= "INSERT INTO activity (eid,title,event,date_,time_, mac_address) VALUES ('$eid','$title','$event','$current_date','$current_time','$ip')"; 
$query_check1 = $conn->query($sql);
/******************************************************** */
if($query_check && $query_check1){
    session_start();
    session_unset();
    session_destroy();
   header("Location: /");
} else{
	echo "something went wrong!!";
}
}
else {
	 header("Location: /");
}
?>