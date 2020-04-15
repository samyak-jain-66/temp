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
	<title>view fee</title>
</head>
<body>
	<h2>Select method to view fee</h2>
	<form action='fee_view.php' method='post'>
	<select name='choice'>
		<option>Date Wise</option>
		<option>Student Wise</opion>
    <option>Month Wise</opion>
    <option>Transaction Wise</opion>
    <option>All</opion>
	</select>
	<input type='submit' value='Go' method='post'>
    </form>
</body>
</html>
<?php
$choice=isset($_POST['choice'])?$_POST['choice']:'';
if($choice=='Date Wise'){
	echo"<form action='fee_date.php' method='post'>";
    echo"<label>Attendance Date</label><input type='text' id='datepicker' name='date' /><br/>";
    echo"<input type='submit' value='Go' name='submit'>";
}else if($choice=='Student Wise'){
	echo"<form action='fee_id.php' method='post'><label>Student Id</label><select name='id'>";
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
       echo"<input type='submit' value='Go' name='submit'>";
   }
}else if($choice=='Month Wise'){
  echo"<form action='fee_month.php' method='post'>";
  echo"<label>Fee Month</label><select name='month'><option>January</option><option>February</option><option>March</option><option>April</option><option>May</option><option>June</option><option>July</option><option>August</option><option>September</option><option>October</option><option>November</option><option>December</option></select><br/>";
  echo"<input type='submit' value='Go' name='submit'>";
}else if($choice=='All'){
  header("location:fee_all.php");
}else if($choice=='Transaction Wise'){
  echo"<form action='fee_transaction.php' method='post'>";
  echo"<label>Transaction Number</label><input type='text' name='trans'/>";
  echo"<input type='submit' value='Go' name='submit'>";
}
?>