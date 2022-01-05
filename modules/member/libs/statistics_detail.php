<p class="head">!!Google Recaptcha Statistics <?php echo date("M"); ?>!!
<br><br><br><br><br><br><br><br>Slide Here----></p>
<div class="pot">
	<table>

		<?php 
		$count="SELECT date_u,earning,affiliate, SUM(earning + affiliate) AS total
FROM earning
WHERE eid= '$eid' and id BETWEEN '$payout_date' AND '$today' group by id ORDER BY id ASC";  ?>
		<thead>
			<tr>
				<th class="tx-25">Date</th>
				<th class="tx-20">₹ <?php echo $fname ?></th>
				<th class="tx-20">₹ <?php echo $affiliate_fname ?></th>
				<th class="tx-25">₹ TOTAL</th>
			</tr>
		</thead>
		<tbody>
			<b>
				<?php foreach ($conn->query($count) as $row) {  
					?>
					<?php
					$date=$row['date_u'];
					$sudha= $row['earning'] * $doller_rate;
                      $sudha_earning =number_format($sudha, 0);

					$sachin= $row['affiliate']*$doller_rate;
					$sachin_earning= number_format($sachin, 0);

					$total_half= ($sachin + $sudha);
					$total_rowu= $total_half;
                    $total_row= number_format($total_rowu, 0);
					?>
			<tr>
				<td class="date"><?php echo $date; ?></td>
				<td style="background-color: red"><?php echo $sudha_earning; ?></td>
                 <td style="background-color: green"><?php echo $sachin_earning; ?></td>
				<td class="total"><?php echo $total_row; ?></td>
			</tr>
	<?php } ?>
			<tr>
				<td>TOTAL</td>
				<td id="subtotal"></td>
				<td id="total"></td>
				<td id="total2"></td>
			</tr>
		</b>
	</tbody>

	</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
  $("#subtotal").html(sumColumn(2));
  $("#total").html(sumColumn(3));
  $("#total2").html(sumColumn(4));
});

function sumColumn(index) {
  var total = 0;
  $("td:nth-child(" + index + ")").each(function() {
    total += parseInt($(this).text(), 10) || 0;
  });  
  return total;
}
</script>


<style type="text/css">
	html,
body {
  height: 100%;
}
body {
  margin: 0;
  background: linear-gradient(45deg, #49a09d, #5f2c82);
  font-family: sans-serif;
  font-weight: 100;
}

.head{
	font-size: 30px;
}
	.pot {
		margin: 150px 0 0 680px;
  width: 100vw;
  transform: translate(-50%, -50%);
}

table {
  width: 100vw;
  border-collapse: collapse;
  border: 3px solid red;
  overflow-x: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th{
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: white;
}
td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: white;
}
th {
  text-align: left;
}
thead th {
  background-color: #55608f;
}
tbody tr:hover {
  background-color: cream;
}
tbody td {
  position: relative;
  text-decoration: blink;
}
tbody td:hover:before {
  	content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
.date{
	background: #00467f; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #00467f, #a5cc82); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #00467f, #a5cc82); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  font-size: 15px;
}
.total{
	background-image: linear-gradient(yellow, blue);
	width: 50px;
}
.tx-25{
	font-size: 20px;
}
.tx-20{
	font-size: 20px;
}

@media screen and (max-width: 400px;){
	.pot {

  margin: 0 200px 0 0;
  width: 100vw;
  transform: translate(-50%, -50%);
}
.slide{
	display: absolute;
	position: static;
	top: 20px;
}
}
</style>