<?php
/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 * User: Adarsh
 * Date: 3/18/2021
 * Time: 7:46 PM
 */

session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    include("../../config/database.php");
    $id = $_SESSION['id'];
    $eid = $_SESSION['username'];

    $sqlpg = "UPDATE employee SET last_seen= now() where username = '$eid'";

    $sql = "SELECT * FROM employee WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result)){
        $fname= ucfirst($row['fname']);
            $lname = ucfirst($row['lname']);
            $placement = $row['placement'];
            $phone = $row['phone'];
            $dob = $row['dob'];
            $gender = $row['gender'];
            $phone_coated = $row['phone_coated'];
            $email = $row['email'];
            $email_coated = $row['email_coated'];
            $join_date = $row['join_date'];
            $sub_id = $row['sub_id'];
            $expiry_date = $row['expiry_date'];
            $position = ucfirst($row['position']);
            $address = $row['address'];
            $occupation = ucfirst($row['occupation']);
            $image = $row['image'];
            $last_seen = $row['last_seen'];
            $registration_date = $row['registration_date'];
            $aid = $row['aid'];
            $status = $row['status'];
      }
      if($status == 'yes' || $status == 'Yes') {
      ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $fname.' '.$lname ?>-Employee</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        a{
            text-decoration: none;
        }
        a:hover{
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="header">

    <span style="font-size:30px;cursor:pointer" class="logo" onclick="openNav()">&#9776; open </span>

    <div class="header-right">
        <a href="profile.php">
            <?php echo $fname . " " . $lname . " (" . strtoupper($eid) . ")" ?></a>
    </div>
</div>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php" class="logo"><span style="color:red;font-size:70px">Captcha system</span></a>
    <a href="profile.php"><?php echo $fname . " " . $lname . " (" . strtoupper($eid) . ")" ?></a>
    <a href="index.php">Home</a>
    <a href="attendance.php">Attendance</a>
    <a href="timetable.php">TimeTable</a>
    <a href="marks.php">Marks</a>
    <a href="fees.php">Fees</a>
    <a href="complaint.php">Complaint</a>
    <a href="password_update.php">Update Password</a>
    <a href="../../logout.php">Logout</a>
</div>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                <img src="images/user_pic/<?php echo $image; ?>" alt="<?php echo $fname; ?>" class="img">
            </div>
            <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                <div class="container" style="border-bottom:1px solid black">
                    <h2><?php echo $fname.' '.$lname; ?></h2>
                </div>
                <hr>
                <ul class="container details">
                    <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><?php echo '+91 '.$phone; ?></p></li>
                    <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span><?php echo $email; ?></p></li>
                    <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>
                        <?php echo ucfirst($gender) ?></p></li>
                    <li><p><span class="glyphicon glyphicon-tower" style="width:50px;"></span><?php echo ucfirst($dob) ?></p></li>
                    <li><p><span class="glyphicon glyphicon-tower" style="width:50px;"></span><?php echo ucfirst($gender) ?></p></li>
                    <li><p><span class="glyphicon glyphicon-tower" style="width:50px;"></span><?php echo ucfirst($address) ?></p></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }

        function showsome() {
            alert("To Update Details Kindly Contact Your Class Mentor.");
        }
    </script>
</body>
</html>
<?php
    }else{
        ?>
        <h1>Your account is deactivated by admin due to some reasons. kindly contact Admin for further.</h1>
        <?php
    }
}else{
    header("Location: ../../index.php");
}
