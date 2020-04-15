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
	<form action="expense.php" method="post">
		<label>Company Name</label>
		<input type="text" name="company"/><br/>
		<label>Date</label>
		<input type="text" id="datepicker" name="date1"/><br/>
		<label>Amount</label>
		<input type="text" name="amount"/>
		<label>Related to</label>
		<select name="related">
			<option>Food</option>
			<option>Water</option>	
			<option>Electricity</option>
			<option>Construction</option>
			<option>Equipment</option>
			<option>Stationary</option>
			<option>Others</option>
		</select>
		<br/>
		<input type="submit" value="Go" name="submit"/>
	</form>
</body>
</html>
<?php
$company=isset($_POST['company'])?$_POST['company']:'';
$date=isset($_POST['date1'])?$_POST['date1']:'';
$related=isset($_POST['related'])?$_POST['related']:'';
$amount=isset($_POST['amount'])?$_POST['amount']:'';
$con = mysqli_connect("localhost", "root", "", "building_data");
$query="INSERT into expense values('$company','$date','$amount','$related')";
$run=mysqli_query($con, $query);
if($run){
	echo"<h3>Successfully updated!!</h3>";
}
?>
