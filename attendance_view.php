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
	<title>view attendance</title>
</head>
<body>
	<h2>Select method to view attendance</h2>
	<form action='attendance_view.php' method='post'>
	<select name='choice'>
		<option>Date Wise</option>
		<option>Student Wise</opion>
	</select>
	<input type='submit' value='Go' method='post'>
    </form>
</body>
</html>
<?php
$choice=isset($_POST['choice'])?$_POST['choice']:'';
if($choice=='Date Wise'){
	echo"<form action='attendance_date.php' method='post'>";
    echo"<label>Attendance Date</label><input type='text' id='datepicker' name='date' /><br/>";
    echo"<input type='submit' value='Go' name='submit'>";
}else if($choice=='Student Wise'){
	echo"<form action='attendance_id.php' method='post'><label>Student Id</label><select name='id'>";
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
}
?>