<?php

include 'config.php';
if(isset($_POST['aid'])){
    $aid = mysqli_real_escape_string($con,$_POST['aid']);

    $query = "select count(*) as cntUser from employee where eid='".$aid."'";
    
    $result = mysqli_query($con,$query);
    $response = "<span style='color: red;'>Username Not Found.</span>";
    if(mysqli_num_rows($result)){
        $row = mysqli_fetch_array($result);
    
        $count = $row['cntUser'];
        
        if($count > 0){
            $sql = "SELECT * FROM employee WHERE eid = '".$aid."'";
    $result = mysqli_query($con, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $fname= ucfirst($row['fname']);
        $lname= ucfirst($row['lname']);
}
            $response = "<span style='color: green;'>$fname $lname</span>";
             

        }
       
    }
    
    echo $response;
    die;
}
