<?php
include '../config/database.php';
$date = date("d/m/Y"); 
$ydate = date("d-m-Y H:i:s"); 
?>

<!doctype html>
<html>
    <head>
<title>Registration :: PGROUP</title>
<link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
<link rel="manifest" href="favicon_io/site.webmanifest">
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
    <body>

<div class="segment">
    <h1 style="color: red">Registration At Pushpendra Group Colony!!</h1>
  </div>
    <div>
      <span id="sucess" style="color: green;"></span>
      <span id="error" style="color: red;"></span><br>
      <span id="sucessr" style="color: green;"></span>
      <span id="errorr" style="color: red;"></span>

    <form action="index.php" method="post">

<label>Enter First Name
    <input type="text" name="fname" placeholder="Enter first name" required/>
  </label>

  <label>Enter Last Name
    <input type="text" name="lname" placeholder="Enter Last name" required/>
  </label>


  <label>Create Username
    <input type="text" id="txt_username" name="eid" placeholder="Enter Your EID" required/>
  </label><!-- Response -->
<div id="uname_response"></div>


<label style="color: yellow;">Affiliate Id
    <input type="username" placeholder="Enter Your Affiliate Id" id="txt_aid" name="aid" required>
    <div id="aid_response"></div>
</label>

<label>Placement
    <select name="placement" style="color: black;">
        <option value="">Select</option>
        <option value="Left">Left</option>
        <option value="Right">Right</option>
    </select>
</label>
<label>Enter Country
    <input type="text" name="country" placeholder="Enter Your Country" required/>
  </label>

  <label>Enter State
    <input type="text" name="state" placeholder="Enter State" required/>
  </label>

 <label>Enter city
    <input type="text" name="city" placeholder="Enter City" required/>
  </label>

 <label>Enter Pin code
    <input type="number" maxlength = "6" name="pin_code" placeholder="Enter Pin code" required/>
  </label>

 <label>Enter Phone No.
    <input type="Number" name="phone"  maxlength = "10" placeholder="Enter Mobile No." required/>
  </label>


 <label>Enter Email Id
    <input type="email" id="txt_email" name="email" placeholder="Enter Email Address" required/>
  </label>
  <div id="email_response"></div>


<label>Enter Your DOB
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

  </label>

  <label>Address
      <input type="text" name="address" placeholder="Address" required>
  </label>

<label>
    <select name="gender" style="color: red;">
         <option value="">Gender</option>
      <option value="MALE">MALE</option>
      <option value="FEMALE">FEMALE</option>
    </select>
</label>


<label>Enter Password
    <input type="password" name="password" placeholder="Enter Your Password" required/>
  </label>

<label>Re-Enter Password
    <input type="text" name="re_password" placeholder="Re-Enter Password" required />
  </label>


  <button type="submit" name="register"><span class="iconify" data-icon="flat-ui:lock" data-inline="false"></span> Register</button>
</form>

<?php include 'libs/register.php'  ?>

<div class="segment">
    <button class="unit" onclick="goBack()" type="button"><span class="iconify" data-icon="ion-md-arrow-back" data-inline="false"></span></button>
    <button class="unit" type="button"><span class="iconify" data-icon="bi:bookmark-fill" data-inline="false"></span></button>
    <button class="unit" type="button"><span class="iconify" data-icon="flat-color-icons:settings" data-inline="false"></span></button>
  </div>
  
 <!-- <div class="input-group">
    <label>
      <input type="text" placeholder="Email Address"/>
    </label>
    <button class="unit" type="button"><span class="iconify" data-icon="fluent:globe-search-24-regular" data-inline="false"></span></button>
  </div>-->
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php include 'libs/extra.js.php' ?>
    </body>
</html>