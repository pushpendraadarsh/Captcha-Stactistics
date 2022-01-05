<?php
$dbhost = 'sql201.epizy.com';
    	$dbuser = 'epiz_28717385';
        	$dbpass = 'googlework';
            	$dbname = 'epiz_28717385_google_statictics'; 
                    $timezone= date_default_timezone_set("Asia/Kolkata");
                    	$con= mysqli_connect('sql201.epizy.com', 'epiz_28717385', 'googlework', 'epiz_28717385_google_statictics');

                        	// Checking the connection
                            	if (mysqli_connect_errno()) {
                                		die('Database connection failed ' . mysqli_connect_error());
                                        	}