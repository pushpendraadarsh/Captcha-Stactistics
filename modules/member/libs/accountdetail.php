<div class="row row-sm mg-b-20">
            <div class="col-lg-4">
              <div class="card card-dashboard-pageviews">
                <div class="card-header">
                  <h6 class="card-title">Account Details</h6>
                </div><!-- card-header -->
                <div class="card-body">
                 <div class="az-list-item">
                    <div>
                      <h6>Registration date</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $registration_date; ?></h6>
                    </div>
                  </div><!-- list-group-item --> 
                  
                  
                  <div class="az-list-item">
                    <div>
                      <h6>Account Upgrade Date</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary">
                        <?php
if($join_date == '' || $join_date == '') {
        ?>
Nil
<?php } else 
{ ?>

                        <?php echo $join_date; ?></h6>

                        <?php } ?>
                    </div>
                  </div><!-- list-group-item -->


                  <div class="az-list-item">
                    <div>
                      <h6>Account Expiry Date</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary">
                        <?php if($expiry_date == '' || $expiry_date == '') { ?>
                      Nil
                        <?php } else { ?>
                        <?php echo $expiry_date; ?>                                                    
                                              </h6><?php } ?>
                    </div>
                  </div><!-- list-group-item -->
                                    <div class="az-list-item">
                    <div>
                      <h6>Left Account Upgrade Date</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $left_upgrade_date; ?> Days</h6>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item" style="cursor: pointer" data-target="#sup_panel_info" data-toggle="modal">
                    <div>
                      <h6>Sub Id</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $sub_id; ?></h6>
                    </div>
                  </div><!-- list-group-item -->

                  <div class="az-list-item" style="cursor: pointer">
                    <div>
                      <h6>Last Login</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $last_seen; ?></h6>
                    </div>
                  </div><!-- list-group-item -->


          <div class="az-list-item">
                    <div>
                      <h6>Designation</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary">
                      <?php echo $position; ?>
                                              </h6>
                    </div>
                  </div><!-- list-group-item -->
                </div><!-- card-body -->
              </div><!-- card -->

            </div><!-- col -->
            <!--============================================================-->
      <div class="col-lg-4">
        <div class="card card-dashboard-pageviews text-center">
        <div class="card-body margin-0-auto">
        <img src="https://netsolutions.net.au/wp-content/uploads/2020/04/googles-reCAPTCHA.jpg" style="height:100px" class="img-fluid">
        <hr>
        <img src="https://i.ytimg.com/vi/9GeAjnXZuUw/maxresdefault.jpg" class="img-fluid" /*onclick="lets_go_goa_model();"*/ style="height:120px">
        </div>
        </div>
      </div>
      <!--============================================================================-->
      <div class="col-lg-4">
        <div class="card card-dashboard-pageviews text-center">
        <div class="card-body margin-0-auto">
        <a href="#">
        <img src="https://irctcair463787178.files.wordpress.com/2020/03/how-to-book-flight-tickets.jpg?w=300" style="height:100px" class="img-fluid">
        </a>
        <hr>
        <img src="https://img.inextlive.com/inext/IRCTC-12-ticket-in-month-1.jpg" style="height:120px" class="img-fluid">
        </div>
        </div>
          </div>
         </div>
      <!--============================================================================-->
<div class="row row-sm mg-b-20 mg-lg-b-0">
            <div class="col-lg-5 col-xl-4">
              <div class="row row-sm">
                <div class="col-md-6 col-lg-12 mg-b-20 mg-md-b-0 mg-lg-b-20">
                  <div class="card card-dashboard-pageviews">
                <div class="card-header">
                  <h6 class="card-title">Placement Details</h6>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="az-list-item">
                    <div>
                      <h6>Proposer Name - ID</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $admin_fname; ?> <?php echo $admin_lname; ?> - <?php echo $aid; ?></h6>
                    </div>
                  </div><!-- list-group-item -->

                  <div class="az-list-item">
                    <div>
                      <h6>Placement Node</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $placement; ?></h6>
                    </div>
                  </div><!-- list-group-item -->
                </div><!-- card-body -->
              </div><!-- card --><!-- card-dashboard-five -->
                </div><!-- col -->

                <div class="col-md-6 col-lg-12">
                  <div class="card card-dashboard-five">
                <div class="card-header">
                  <h6 class="card-title">Personal Details</h6>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="az-list-item">
                    <div>
                      <h6>Gender</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $gender; ?></h6>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Email ID</h6>
                    </div>
                    <div>
                   <h6 class="tx-primary">   <?php $string = $email;
                  if (strlen($string) > 10) {
                 $trimstring = substr($string, 0, 10). '...';
                 } else {
                 $trimstring = $string;
                 }
                 echo $trimstring;
                 ?>
                  
                     <!--<?php echo $email; ?>--></h6>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Contact No 1</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary">
                                                  <?php $string = $phone;
                  if (strlen($string) >= 10) {
                 $trimstring = substr($string, 0,3). '...';
                 } else {
                 $trimstring = $string;
                 }
                 echo $trimstring;
                 ?>
                        <!--<?php echo $phone; ?>-->                </h6>
                    </div>
                  </div><!-- list-group-item -->
          <div class="az-list-item">
                  </div><!-- list-group-item -->
          <div class="az-list-item">
                    <div>
                      <h6>DOB</h6>
                    </div>
                    <div>
                      <h6 class="tx-primary"><?php echo $dob; ?></h6>
                    </div>
                  </div><!-- list-group-item -->
                </div><!-- card-body -->
              </div><!-- card-dashboard-five -->
                </div><!-- col -->
              </div><!-- row -->
            </div><!-- col-lg-3 -->
<!--======================================Popup sub-id detail===================================-->

<div class="modal fade" id="sup_panel_info" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <div class="modal-header"  style="background-color: #3E4095">
      <h5 class="modal-title" id="exampleModalLongTitle" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Sub-ID Account Upgrade and Expiry Date</h5>
       <button class="close close_box" style="top: 3PX !important;padding: 0px 38px !important;" data-dismiss="modal" aria-label="Close"><img src="../../images/cross.png" width="30px"></button>
    </div>
    <div class="modal-body">
      <li class="list-group-item">
                 <div class="">
                  <h4 class="address">Sub-Id Details</h4>
                </div>
                <div class="table table-reponsive">
                  <table class="table  table-bordered  table-hover">
                    <thead>
                      <tr>
                        <td></td>
                        <td style="color: #090909;font-weight: 500">Upgrade Date</td>
                        <td style="color: #090909;font-weight: 500">Expiry Date</td>
                      </tr>
                    </thead>
                    <tbody>
                                              <!--  -->
                        <tr>
                          <td class="oxiinc_w"> Sub Id <?php echo $sub_id; ?> </td>
                          <td><?php echo $subidupgrade; ?></td>
                          <td><?php echo $subidexpiry; ?></td>
                        </tr>
                        
                    </tbody>
                  </table>
                </div>
              </li>
    </div>
    </div>
  </div>
</div>
<!--=======================================popup end========================================-->
<div class="col-lg-4">
        <div class="card card-dashboard-pageviews text-center">
        <div class="card-body margin-0-auto">
        <a href="#" target="_blank">
        <img src="https://images.financialexpress.com/2020/06/aadhar-pan-link-660.jpg" style=" height:200px; width: 100%">
        </a>
        <hr>
        <div class="widget widget-card-one padding0px">
      <div class="widget-content full-height">

        

        <div class="w-action padding0px full-height">
          <div class="card-like bn-ing-col full-height">
            <video id="mein_aa_raha" width="100%" height="270px" controls="" >
            <source src="video/tutorial.mp4" type="video/mp4">
            Your browser does not support the video tag.
            </video>
          </div>
        </div>
      </div>
    </div>
        </div><!-- card-body -->
        </div><!-- card -->
      </div>
      
      <div class="col-lg-4">
        <div class="card card-dashboard-pageviews text-center">
        <div class="card-body margin-0-auto">
        <img src="https://img.devrant.com/devrant/rant/r_962153_6eGft.jpg" style="width: 100%;height:120px;">
        <hr>
        <a href="#">
        <img src="https://img.etimg.com/thumb/msid-61393843,width-1070,height-580,imgsize-38855,overlay-etwealth/photo.jpg" style="width: 100%;height:160px;">
        </a>
        <hr>
        <span style="color: black;font-size: 18px;font-weight: 700" data-target="#credit_card_bitcoin" data-toggle="modal">
          <img src="https://vakilsearch.com/advice/wp-content/uploads/2020/01/Income-Certificate-Online.jpg" style="width: 100%;">
        </span>
        </div><!-- card-body -->
        </div><!-- card -->
      </div>

          </div><!-- row -->
         

                  </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->
