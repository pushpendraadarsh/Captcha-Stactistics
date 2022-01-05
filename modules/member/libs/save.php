<?php
	include '../database.php';
	session_start();
	if($_POST['type']==1){
		$user_eid=$_POST['user_eid'];
		$dep_full_name=$_POST['dep_full_name'];
		$dep_email_id=$_POST['dep_email_id'];
		$dep_contact_number=$_POST['dep_contact_number'];
		$dep_pan_no=$_POST['dep_pan_no'];
		$dep_adhaar_no=$_POST['dep_adhaar_no'];
		$dep_remark=$_POST['dep_remark'];
		$date_of_complaint=date('Y-m-d');

		$duplicate=mysqli_query($conn,"select * from exit_policy where user_eid='$user_eid'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{
			$sql = "INSERT INTO `exit_policy`( `user_eid`, `dep_full_name`, `dep_email_id`, `dep_contact_number`, `dep_pan_no`, `dep_adhaar_no` ,`dep_remark`, `date_of_complaint`) 
			VALUES ('$user_eid','$dep_full_name','$dep_email_id','$dep_contact_number', '$dep_pan_no', '$dep_adhaar_no', '$dep_remark', '$date_of_complaint')";
			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}
		mysqli_close($conn);
	}
	if($_POST['type']==2){
		$email=$_POST['email'];
		$check=mysqli_query($conn,"select * from crud where email='$email'");
		if (mysqli_num_rows($check)>0)
		{
			$_SESSION['email']=$email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}
		mysqli_close($conn);
	}
?>