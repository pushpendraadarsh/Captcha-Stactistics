<?php 
include("../../../config/database.php");
session_start();
if(isset($_POST['click'])== 1 && isset($_SESSION['id']) && isset($_SESSION['username'])){
    $return_arr = array();
    $eid = $_SESSION['username'];
    $sql = "SELECT * FROM activity WHERE eid = '$eid' ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    while($arrayResult = mysqli_fetch_array($result)){

        $title = $arrayResult['title'];
        $event = $arrayResult['event'];
        $date = $arrayResult['date_'];
        $time = $arrayResult['time_'];
        $ip_address= $arrayResult['mac_address'];
        $return_arr[] = array(
        "title"=>$title,
        "event"=>$event,
        "date"=>$date,
        "time"=>$time,
        "ip_address"=>$ip_address
    );
    }
    echo json_encode($return_arr);
  }else{
    echo json_encode(array("action"=>"redirect"));
    echo header("location: https://pggroup.tech/");
  }
            ?>