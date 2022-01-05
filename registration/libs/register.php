<?php 
if (isset($_POST['register'])) {
  
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $eid = $_POST['eid'];
    $aid = $_POST['aid'];
    $placement = $_POST['placement'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
     $pin_code = $_POST['pin_code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $dob = $day ."/". $month ."/". $year;
    $gender = $_POST['gender'];
    $position = "employee";
    $status = "no";
    $joining = "yes";
    $registration_date = $date;
    $sub_id = "0";
    $address = $_POST['address'];
    $password = $_POST['password'];
    $time_stamp = date("Y-m-d H:i:s");


$query = "INSERT INTO employee
(eid,fname, lname,phone,email,aid,registration_date,sub_id,dob,gender,position,placement,address,city,state,pin_code,country,last_seen,status,joining)
 VALUES ('$eid','$fname','$lname','$phone','$email','$aid','$registration_date','$sub_id','$dob','$gender','$position','$placement','$address','$city','$state','$pin_code','$country','$time_stamp','$status','$joining')";
 $query2 = "INSERT INTO users (username,password,email,type,last_seen)
 VALUES ('$eid','$password','$email','$position','$time_stamp')";
 $query3 = "INSERT INTO document (eid)
 VALUES ('$eid')";
  $query4 = "INSERT INTO nominee (eid)
 VALUES ('$eid')";
 $query5 = "INSERT INTO placement (eid,place,aid)
 VALUES ('$eid','$placement','$aid')";
  $query6 = "INSERT INTO sub_id (eid,status)
 VALUES ('$eid','$status')";
$query7 = "INSERT INTO bank_detail (eid,account_status)
 VALUES ('$eid','$status')";
$query8 = "INSERT INTO aid (aid,eid,fname,lname,phone,email,status)
 VALUES ('$aid','$eid','$fname','$lname','$phone','$email','$status')";
 $query10 = "INSERT INTO exit_policy (user_eid)
 VALUES ('$eid')";
 $query11 = "INSERT INTO balance (user_eid,balance)
 VALUES ('$eid',0)";


 $query_check11 = mysqli_query($conn,$query11);
 $query_check10 = mysqli_query($conn,$query10);
 $query_check8 = mysqli_query($conn,$query8);
 $query_check7 = mysqli_query($conn,$query7);
 $query_check6 = mysqli_query($conn,$query6);
 $query_check5 = mysqli_query($conn,$query5);
 $query_check4 = mysqli_query($conn,$query4);
$query_check3 = mysqli_query($conn,$query3);
$query_check2 = mysqli_query($conn,$query2);
$query_check = mysqli_query($conn,$query);
if ($query_check) {
  //echo '<script></script>';
   echo '<script>
var a = "Your Request Successfully Inserted!!";
document.getElementById("sucess").innerHTML = a;
</script>';
} else {
   echo '<script>
var a = "Something wents wrong!!!!";
document.getElementById("error").innerHTML = a;
</script>';
}

if ($query_check2) {
  //echo '<script></script>';
   echo '<script>
var a = "Your Request Successfully Inserted!!";
document.getElementById("sucessr").innerHTML = a;
</script>';
} else {
   echo '<script>
var a = "Something wents wrong!!!!";
document.getElementById("errorr").innerHTML = a;
</script>';
}
          
           exit();
    }
?>