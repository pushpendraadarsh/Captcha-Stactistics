<?php 

	$dbhost = 'sql309.epizy.com';
	$dbuser = 'epiz_28975964';
	$dbpass = 'Khushb00';
	$dbname = 'epiz_28975964_ctpg'; 
    $timezone= date_default_timezone_set("Asia/Kolkata");
	$conn= mysqli_connect('sql309.epizy.com', 'epiz_28975964', 'Khushb00', 'epiz_28975964_ctpg');

	// Checking the connection
	if (mysqli_connect_errno()) {
		die('Database connection failed ' . mysqli_connect_error());
	}

/*  notification COUNT    */
$sql_find_batch = "SELECT count(title) AS title FROM notification";
                    $sql_find_batch_get=mysqli_query($conn,$sql_find_batch);
                    $notification = mysqli_fetch_assoc($sql_find_batch_get);
              /*END*/
?>