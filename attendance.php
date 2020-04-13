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
<?php
echo"<form action='attendance_config.php' method='post'><label>Student Id</label><select name='id'>";
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
   echo"<label>Attendance Date</label><input type='text' id='datepicker' name='date' /><br/>";
   echo"<label>isPresence</label><select name='presence'><option>Yes</option><option>No</option></select><br/>";
   echo"<label>isLeave</label><select name='leave'><option>Yes</option><option>No</option></select><br/>";
   echo"<input type='submit' value='Go' name='submit'>";
   echo"</form>";
}
?>
</html>