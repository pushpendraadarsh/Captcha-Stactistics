<?php

include 'config.php';

if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);

    $query = "select count(*) as cntUser from employee where email='".$email."'";
    
    $result = mysqli_query($con,$query);
    $response = "<span style='color: green;'>Email Address Available.</span>";
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    
        $count = $row['cntUser'];
        
        if($count > 0){
            $response = "<span style='color: red;'>Email Address Already Registered.</span>";
        }
       
    }
    
    echo $response;
    die;
}
