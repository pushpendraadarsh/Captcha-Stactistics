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
    $date = date("d/m/Y");

$sql = "SELECT * FROM nominee WHERE eid = '$eid'";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($row = mysqli_fetch_assoc($result))
    {
        $nominee_status= ucfirst($row['status']);
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

if($nominee_status == 'no' || $nominee_status == '') {
        ?>
             <!--=====================START HEADER======================--> 
<?php include 'no_libs/header_b.php';?>
             <!--=====================END HEADER======================-->

<style type="">
  select {
  margin-right: 8px;
  box-shadow: inset 2px 2px 5px #BABECC, inset -5px -5px 10px #FFF;
  width: 100%;
  box-sizing: border-box;
  transition: all 0.2s ease-in-out;
  appearance: none;
  -webkit-appearance: none;
}
select {
    background-size: 1.25rem;
    background-repeat: no-repeat;
    background-position: calc(100% - 1rem) center;
    height: 2.75em;
    padding-right: 2.75em;
    text-overflow: ellipsis;
}

select, textarea {
    -moz-appearance: none;
    -webkit-appearance: none;
    -ms-appearance: none;
    appearance: none;
    border-radius: 8px;
    border: solid 1px;
    color: black;
    display: block;
    outline: 0;
    padding: 0 1em;
    text-decoration: none;
    width: 100%;
}

select, textarea {
    background-color: #EBECF0;
    border-color: #EBECF0;
}
</style>
<div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header" style="background-color: #3E4095">
            <h5 class="modal-title" style="text-align: center;color: white;font-size: 22px;font-weight: 800;text-shadow: 3px 1px 1px red;">Nominee Detail</h5>
         </div>
         <div class="modal-body">
          <p>For <?php echo $fname ."". $lname ?></p>
            <div class="row">
               <div class="col-sm-12">

                  <form method="post">
      <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">FIRST NAME</label>
      <input type="text" class="form-control" name="fname" value="" placeholder="Enter Your Nominee First name" required="">
    </div>

     <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">MIDDLE NAME</label>
      <input type="text" class="form-control" name="mname" value="" placeholder="Enter Your Nominee middle name">
    </div>

    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">LAST NAME</label>
      <input type="text" class="form-control" name="lname" value="" placeholder="Enter Your Nominee last name" required>
    </div>


<div class="form-group">
     <label for="exampleInputEmail1" class="ddc">DATE OF BIRTH</label>
     <select name="day" style="color: black;">
        <option value="">Day</option>
      <option value="">---</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>

    <select name="month" style="color: black;">
        <option value="">Month</option>
      <option value="">-----</option>
      <option value="January">January</option>
      <option value="February">February</option>
      <option value="March">March</option>
      <option value="April">April</option>
      <option value="May">May</option>
      <option value="June">June</option>
      <option value="July">July</option>
      <option value="August">August</option>
      <option value="September">September</option>
      <option value="October">October</option>
      <option value="November">November</option>
      <option value="December">December</option>
    </select>

<select name="year" style="color: black;">
        <option value="">Year</option>
      <option value="">----</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
      <option value="1940">1940</option>
      <option value="1939">1939</option>
      <option value="1938">1938</option>
      <option value="1937">1937</option>
      <option value="1936">1936</option>
      <option value="1935">1935</option>
      <option value="1934">1934</option>
      <option value="1933">1933</option>
      <option value="1932">1932</option>
      <option value="1931">1931</option>
      <option value="1930">1930</option>
      <option value="1929">1929</option>
      <option value="1928">1928</option>
      <option value="1927">1927</option>
      <option value="1926">1926</option>
      <option value="1925">1925</option>
      <option value="1924">1924</option>
      <option value="1923">1923</option>
      <option value="1922">1922</option>
      <option value="1921">1921</option>
      <option value="1920">1920</option>
      <option value="1919">1919</option>
      <option value="1918">1918</option>
      <option value="1917">1917</option>
      <option value="1916">1916</option>
      <option value="1915">1915</option>
      <option value="1914">1914</option>
      <option value="1913">1913</option>
      <option value="1912">1912</option>
      <option value="1911">1911</option>
      <option value="1910">1910</option>
      <option value="1909">1909</option>
      <option value="1908">1908</option>
      <option value="1907">1907</option>
      <option value="1906">1906</option>
      <option value="1905">1905</option>
      <option value="1904">1904</option>
      <option value="1903">1903</option>
      <option value="1901">1901</option>
      <option value="1900">1900</option>
    </select>
      
    </div>

<div class="form-group">
     <label for="exampleInputEmail1" class="ddc">EMAIL ADDRESS</label>
      <input type="text" class="form-control" name="email" value="" placeholder="Enter Your Nominee email-id" required="">
    </div>

    <div class="form-group">
     <label for="exampleInputEmail1" class="ddc">MOBILE NO.</label>
      <input type="number" class="form-control" name="phone" value="" placeholder="Enter Your Nominee Mobile no." required="">
    </div>


<div class="form-group">
     <label for="exampleInputEmail1" class="ddc">RELATION SHIP</label>
     <select name="relation" required>
       <option>select</option>
       <option value="Husband">Husband</option>
       <option value="Wife">Wife</option>
     </select>
     <!-- <input type="text" class="form-control" name="account_type" value="" placeholder="Enter Account Type" required="">-->
    </div>



    <br>
    <center>
      <br>
      <input type="submit" name="nominee_detail" value="nominee_detail" class="btn btn-primary">
    </center>
   
 </form>
                </div>
<?php
        if(isset($_POST['nominee_detail'])){
            $fname=$_POST['fname'];
            $mname=$_POST['mname'];
            $lname=$_POST['lname'];
            $day=$_POST['day'];
            $month=$_POST['month'];
            $year=$_POST['year'];
            $dob=$day .'/'. $month .'/'. $year;
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $relation=$_POST['relation'];
            $status="yes";
            $date=$ydate;

         $update_users = "UPDATE nominee SET fname='$fname', mname='$mname' ,lname='$lname' ,dob='$dob' ,email='$email' ,phone='$phone' ,relation='$relation' ,status='$status' ,time_stamp='$date' WHERE eid='$eid'";
                    $update_users_q = mysqli_query($conn,$update_users);
                    if($update_users_q){
                        echo '<script>alert("Nominee Detail Update Success");window.location="main"</script>';

                    }else{
                        echo '<script>alert("SomeThing Went Wrong. Try Again after some time")</script>';
                    }
        }
    ?>





<?php include 'libs/footer.php';?>
<?php include 'no_libs/extra_last.php';?>
<?php include 'no_libs/js.php';?>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>


  </body>
  </html>
<?php
    }else{
        ?>
<!--=====================START HEADER======================--> 
<?php include 'no_libs/header_b.php';?>
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
            <p style="font-size: 30px">Your Bank Detail Are Sucessfully Uploaded<span class="form-group" style="background-color: yellow;"> <a href="../">Click me To Back</a></span></p>
            <img src="../../images/sucess.gif">
        </div>
</div>
</div>
</div>
</div>
</div>

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
<center><p><a href="main">LOGIN</a></p></center>
</body>
</html>
    <?php
}

?>