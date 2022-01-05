<?php
include('../../../config/databaset.php');
?>
<?php
//Start session
session_start();
	
		//Sanitize the POST values
    $username = $_POST['username'];
	$password = $_POST['tpassword'];
	
		//Create query
	$qry="SELECT * FROM employee WHERE eid='$username' AND tpassword='$password'";
	$result=mysqli_query($db,$qry);
	
	
if($result)
 {
		if(mysqli_num_rows($result) > 0 ) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $eid['username'];
			$_SESSION['password'] = $password['password'];		
			
			session_write_close();
			header("location: ../password_management");
			exit();
			}
		
		else
		 {
			//Login failed
			header("location: wrong.php");
			exit();
		}
		}
else
	{
	die("Query failed");
	}	
	

?>