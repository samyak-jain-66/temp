<html>
<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	  $(function () {
	    $('#datepicker').datepicker();
	 });
</script>
</head>
<body>
	<form action="vendor_payment.php" method="post">
		<label>Payment To</label>
		<input type="text" name="company"/><br/>
		<label>Date</label>
		<input type="text" id="datepicker" name="date1"/><br/>
		<label>Amount</label>
		<input type="text" name="amount"/>
		<label>Method</label>
		<select name="method">
			<option>Cash</option>
			<option>NEFT</option>	
			<option>UPI</option>
			<option>Cheque</option>
		</select>
		<br/>
		<label>Description(Cheque no, Transaction Id)</label>
		<input type="text" name="desc"/><br/>
		<input type="submit" value="Go" name="submit"/>
	</form>
</body>
</html>
<?php
$company=isset($_POST['company'])?$_POST['company']:'';
$date=isset($_POST['date1'])?$_POST['date1']:'';
$method=isset($_POST['method'])?$_POST['method']:'';
$amount=isset($_POST['amount'])?$_POST['amount']:'';
$description=isset($_POST['desc'])?$_POST['desc']:'';
$con = mysqli_connect("localhost", "root", "", "building_data");
$query="INSERT into vendor values('$company','$method','$amount','$date','$description')";
$run=mysqli_query($con, $query);
if($run){
	echo"<h3>Successfully updated!!</h3>";
}
?>
