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
<?php
echo"<form action='fee_config.php' method='post'><label>Student Id</label><select name='id'>";
$con = mysqli_connect('localhost','root','','building_data');
$query="SELECT ID from student_table";
$run = mysqli_query($con,$query);
if($run){
	while($row=mysqli_fetch_array($run)){
    ?>
    <option>
    <?php echo $row['ID'] ?>
    </option>
    <?php
   }
   echo"</select><br/>";
   echo"<label>Payment Date</label><input type='text' id='datepicker' name='date' /><br/>";
   echo"<label>Fee Month</label><select name='month'><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option></select><br/>";
   echo"<label>Paid By</label><select name='paid'><option>Cash</option><option>NEFT</option><option>UPI</option><option>DD</option></select><br/>";
   echo"<label>Transaction Number</label><input type='text' name='trans'/><br/>";
   echo"<label>Amount</label><input type='text' name='amount'/><br/>";
   echo"<label>Remark</label><input type='text' name='remark'/><br/>";
   echo"<input type='submit' value='Go' name='submit'>";
   echo"</form>";
}
?>
</html>