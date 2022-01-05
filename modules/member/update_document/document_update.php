<?php
/**
 * Created by ADARSH PUSHPENDRA PANDEY.
 * User: Adarsh
 * Date: 3/18/2021
 * Time: 7:46 PM
 */

session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    include("../../../config/database.php");
    $id = $_SESSION['id'];
    $eid = $_SESSION['username'];
    $date = date("d/m/Y");

$sql = "SELECT * FROM document WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $document_status= ucfirst($row['status']);
        $aadhar_card= ucfirst($row['aadhar_card']);
        $pan_card= ucfirst($row['pan_card']);
        $bank_detail= ucfirst($row['bank_detail']);
}

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
            $pan_no = $row['pan_no'];
            $aadhar_no = $row['aadhar_no'];
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
            $tpassword = $row['tpassword'];
      }
      $ydate = date("d-m-Y H:i:s"); 
$day = date("l");

if($document_status == 'no' || $document_status == 'No')
 {
        ?>
        <?php include('header.php'); ?>
<body>


    <div class="row-fluid">
        <div class="span12">

         

            <div class="container">
			
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Document</th>
                                    
                                    <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">

                                       <?php if($image == '') { ?>
                              <img src="../document/aadhaar_card.jpg" width="889px" height="664px" style="border:1px solid #333333;">

                                         <?php } else { ?>
									<img src="../document/<?php echo $aadhar_card; ?>" width="889px" height="664px" style="border:1px solid #333333;">
									
									          <?php }?>
									

								</td>

								<td style="text-align:center; width:350px;">
									 <a href="#updateaadhar_card"  data-toggle="modal"  class="btn btn-warning" >Update Image</a>
								</td>
								</tr>
										<!-- Modal -->
							<div id="updateaadhar_card" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
							<h3 id="myModalLabel">Update</h3>
							</div>
							<div class="modal-body">
							<div class="alert alert-danger">
							<?php if($image == '') { ?>
                              <img src="../document/aadhaar_card.jpg" width="889px" height="664px" style="border:1px solid #333333;">

                                         <?php } else { ?>
									<img src="../document/<?php echo $aadhar_card; ?>" width="889px" height="664px" style="border:1px solid #333333;">
									
									          <?php }?>
							<form action="edit_PDO.php<?php echo '?eid='.$eid; ?>" method="post" enctype="multipart/form-data">
							<div style="color:blue; margin-left:150px; font-size:30px;">
								<input type="file" name="image" style="margin-top:-115px;">
							</div>
							
							</div>
							<hr>
							<div class="modal-footer">
							<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
							<button type="submit" name="submit" class="btn btn-danger">Yes</button>
							</form>
							</div>
							</div>
							</div>
							
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>
<?php
    }else{
        ?>
<!--=====================START HEADER======================-->

<?php include '../no_libs/header_b.php';?>
             <!--=====================END HEADER======================-->

<div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Notice</h5>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-sm-12">


                <div>
            <p style="font-size: 30px">Your Document Detail Are Sucessfully Uploaded<span class="form-group" style="background-color: yellow;"> <a href="../../">Click me To Back</a></span></p>
            <img src="../../../images/sucess.gif">
        </div>
</div>
</div>
</div>
</div>
</div>


  <?php include '../libs/footer.php';?>
<?php include '../no_libs/extra_last.php';?>
<?php include '../no_libs/js.php';?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


  </body>
  </html>
<?php
 }
}
else{
    ?>
<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>
<center><p><a href="../">LOGIN</a></p></center>
</body>
</html>
    <?php
}

?>