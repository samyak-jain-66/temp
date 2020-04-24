<h2>Update Details</h2>";
<form action='updateDetail.php' method='post'>
	<label>Name</label><input type='text' name='name'/><br/>
	<label>Address </label><input type='text' name='address'/><br/>
	<label>Phone Number</label><input type='text' name='number'/><br/>
	<label>Institute</label><input type='text' name='ins'/><br/>
	<label>Gender</label><select name='gender'><option>Male</option><option>Female</option></select>";
	<input type='submit' value='Go' name='submit'/><br/>
</form>
<?php
session_start();
$email = $_SESSION['semail'];
$name=isset($_POST['name'])?$_POST['name']:'';
$address=isset($_POST['address'])?$_POST['address']:'';
$number=isset($_POST['number'])?$_POST['number']:'';
$institute=isset($_POST['ins'])?$_POST['ins']:'';
$gender=isset($_POST['gender'])?$_POST['gender']:'';
$con = mysqli_connect('localhost','root','','building_data');
$query = "UPDATE student_table set NAME='$name',ADDRESS='$address',PHONE='$number',INSTITUTE='$institute',GENDER='$gender' where email='$email'";
$run=mysqli_query($con,$query);
if($run){
	echo"submitted successfully";
}else{
	echo"Not submitted";
}

