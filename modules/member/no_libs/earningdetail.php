<div class="az-content az-content-dashboard">
      <div class="container-fluid">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Hi, <?php echo $fname . " " . $lname ?> !(<?php echo $position; ?>)</h2>
              NOTICE:- <marquee class="marquee">ALL EMPLOYEE ARE ATTENTION:- ALL DETAIL ARE UNLOCK WHEN YOU ARE FILL ALL DETAIL SUCESSFULLY.</marquee>
            </div>
<!--=========================================================================================================-->
            <div class="az-content-header-right">

              <div class="media">
                <div class="media-body">
                  <label>Start Date</label>
                  <h6>
                    nil                  </h6>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="media-body">
                  <label>Expiry Date</label>
                  <h6>
                    nil</h6>
                </div><!-- media-body -->
              </div><!-- media -->
            </div>
          </div>
          <!-- az-dashboard-one-title -->

<div class="az-dashboard-nav"> 
          </div>
      
        </td>
        </tr>
      </table>

          <div class="row row-sm mg-b-20">


            <div class="col-sm-6 col-lg-4 col-xl-3">
            <div class="card card-body card-dashboard-fifteen">
                            <h2>All Data Filled Status</h2>
            <table border="3px">
        <tr>
    <th>Event</th>
    <th>Status</th>
    <th>URL</th>

  </tr>
  <tbody>
    <?php 
    
    if($bank_status == 'yes' || $bank_status == 'Yes') {
        ?>
  <tr>
     <td>Banking Detail</td>
    <td><img src="../../images/tick.png" style="height: 20px; width: 20px;"></td>
    <td><img src="../../images/complete.jpg" style="height: 50px; width: 50px;"></td>
  </tr>
<?php
    }else{
        ?>
<tr>
     <td>Banking Detail</td>
    <td><img src="../../images/cross.png" style="height: 20px; width: 20px;"></td>
    <td><a href="banking_detail_fill"><img src="../../images/click.png" style="height: 50px; width: 50px;"></a></td>
  </tr>
<?php } ?>


<?php 
    
    if($document_status == 'yes' || $document_status == 'Yes') {
        ?>
<tr>
    <td>Document Upload</td>
    <td><img src="../../images/tick.png" style="height: 20px; width: 20px;"></td>
    <td><img src="../../images/complete.jpg" style="height: 50px; width: 50px;"></td>
  </tr> 
<?php
    }else{
        ?>
<tr>
    <td>Document Upload</td>
    <td><img src="../../images/cross.png" style="height: 20px; width: 20px;"></td>
    <td><a href="document_update">
    <img src="../../images/click.png" style="height: 50px; width: 50px;"></a></td>
  </tr>
<?php } ?>


<?php 
    
    if($nominee_status == 'yes' || $nominee_status == 'Yes') {
        ?>
   <tr>
    <td>Nominee Detail</td>
    <td><img src="../../images/tick.png" style="height: 20px; width: 20px;"></td>
    <td><img src="../../images/complete.jpg" style="height: 50px; width: 50px;"></td>
  </tr> 
<?php
    }else{
        ?>
  <tr>
    <td>Nominee Detail</td>
    <td><img src="../../images/cross.png" style="height: 20px; width: 20px;"></td>
    <td><a href="nominee_detail">
    <img src="../../images/click.png" style="height: 50px; width: 50px;"></a></td>
  </tr> 
<?php } ?>

  </tbody>  
        </table>
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-20 mg-lg-t-0">
            <span id="sucess" style="font-size: 25px; color: green; font-style: bold;"></span>
            <div class="card card-body card-dashboard-fifteen">
              <?php
if($image == '') {
        ?>
        <div>
        <img src="images/user_pic/user_profile.png" alt="<?php echo $fname; ?>" class="img-fluid mr-2">
      </div>
      <form method="post" enctype="multipart/form-data" action="edit_PDO<?php echo '?eid='.$eid; ?>">
                <input type="file" name="image" class="btn btn-primary">
                <button name="submit" class="btn btn-primary">Submit</button>
            </form>
<?php } else
{ ?>
                            <div style="border-radius: 50%;">
                            <img src="images/user_pic/<?php echo $image; ?>" style="border-radius: 50%;" alt="<?php echo $fname; ?>" class="img-fluid mr-2">
                          </div>


                        
<?php }?>


              </div><!-- chart-wrapper -->
            </div><!-- card -->
          </div><!-- col -->
 </div><!-- card -->
          </div><!-- col -->


          <div class="col-sm-6 col-lg-4 col-xl-3 mg-t-20 mg-sm-t-20 mg-lg-t-0">
            <span id="sucess" style="font-size: 25px; color: green; font-style: bold;"></span>
            <div class="card card-body card-dashboard-fifteen">
              <?php
if($nominee_status == '' || $document_status == '' || $bank_status == '') {
        } else
{ ?>

     <div>
        <img src="images/arrow.png" alt="Final Button Click" class="img-fluid mr-2">
      </div>
      <form method="post" enctype="multipart/form-data" action="">
                <button name="final_button_click" class="btn btn-primary">Final Button Click</button>
            </form>
            <?php
        if(isset($_POST['final_button_click'])){
            $status="yes";
            $date= date("Y-m-d H:i:s");

         $update_users = "UPDATE employee SET status='$status' ,last_seen='$date' WHERE eid='$eid'";
                    $update_users_q = mysqli_query($conn,$update_users);
                    if($update_users_q){
                        echo '<script>alert("final_button_click Detail Update Success");window.location="main"</script>';

                    }else{
                        echo '<script>alert("SomeThing Went Wrong. Try Again after some time")</script>';
                    }
        }
    ?>
              </div><!-- chart-wrapper -->
            </div><!-- card -->
            <?php }?>
                    
                  </div><!-- row -->
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
